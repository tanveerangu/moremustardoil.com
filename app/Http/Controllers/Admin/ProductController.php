<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductCategory;
use App\Models\ProductImage;
use App\Models\Size;
use App\Tarits\ImageUploadTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $products =  Product::with('images')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $product_categories = ProductCategory::all();
        return view('admin.products.create', compact('product_categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'category_id' => 'nullable|exists:product_categories,id',
            'sku' => 'nullable|string|unique:products|max:255',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'nullable|string',
            'meta_tags' => 'nullable|string',
        ]);



        // Create Product
        $product = Product::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'sku' => $request->sku,
            'content' => $request->content,
            'meta_tags' => $request->meta_tags,
        ]);

        if ($request->hasFile('images')) { // Check if files exist
            foreach ($request->file('images') as $file) { // Loop through each file
                $imagePath = $this->uploadImage($file, 'uploads/products');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_url' => $imagePath
                ]);
            }
        }


        // foreach ($request->array('attributes') as $attribute) {
        //     ProductAttribute::create([
        //         'product_id' => $product->id,
        //         'size_id' => $attribute['size_id'],
        //         'color_id' => $attribute['color_id'],
        //         'stock' => $attribute['stock'],
        //         'price' => $attribute['price'],
        //         'discount_price' => $attribute['discount_price'] ?? 0,
        //     ]);
        // }


        return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');
    }

    public function edit($slug)
    {
        $product = Product::where('slug', $slug)->with('images')->first();
        $product_categories = ProductCategory::all();
        return view('admin.products.edit', compact('product', 'product_categories'));
    }

    public function update(Request $request, $slug)
    {

        $product = Product::where('slug', $slug)->with('attributes', 'images')->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'category_id' => 'nullable|exists:product_categories,id',
            'sku' => 'nullable|string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'nullable|string',
            'meta_tags' => 'nullable|string',
        ]);

        if ($request->hasFile('images')) { // Check if files exist
            foreach ($request->file('images') as $file) { // Loop through each file
                $imagePath = $this->uploadImage($file, 'uploads/products');
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_url' => $imagePath
                ]);
            }
        }


        $product->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'sku' => $request->sku,
            'content' => $request->content,
            'meta_tags' => $request->meta_tags,
        ]);

        return redirect()->route('admin.products.edit', $product->slug)->with('success', 'Product updated successfully!');
    }


    public function delete($slug)
    {
        $product = Product::where('slug', $slug)->first();

        $images = ProductImage::where('product_id', $product->id)->get();
        foreach ($images as $image) {
            if ($image->image_url && file_exists(public_path($image->image_url))) {
                unlink(public_path($image->image_url));
            }
        }

        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product Deleted successfully!');
    }


    public function deleteImage($id)
    {
        $image = ProductImage::find($id);

        if (!$image) {
            return redirect()->back()->with('error', 'Image not found.');
        }

        $product = Product::where('id', $image->product_id)->first();

        // Count how many images the product has
        $totalImages = ProductImage::where('product_id', $product->id)->count();

        if ($totalImages <= 1) {
            return redirect()->route('admin.products.edit', $product->slug)->with('error', 'Cannot delete. A product must have at least one image.');
        }

        // Safe to delete if more than 1 image
        if ($image->image_url && file_exists(public_path($image->image_url))) {
            unlink(public_path($image->image_url));
        }

        $image->delete();

        return redirect()->route('admin.products.edit', $product->slug)->with('success', 'Product Image Deleted successfully!');
    }


    public function multipleDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
        ], [
            'ids.required' => 'Please select the item(s) to delete.',
        ]);

        $products = Product::whereIn('id', $request->ids)->get();

        foreach ($products as $product) {
            // Delete related product images
            $images = ProductImage::where('product_id', $product->id)->get();
            foreach ($images as $image) {
                if ($image->image_url && file_exists(public_path($image->image_url))) {
                    unlink(public_path($image->image_url));
                }
                $image->delete(); // Don't forget to delete the image record too
            }

            // Finally delete product
            $product->delete();
        }

        return redirect()->route('admin.products.index')->with('success', 'Products deleted successfully.');
    }


    public function reorder(Request $request)
    {
        foreach ($request->order as $orderData) {
            Product::where('id', $orderData['id'])->update(['order' => $orderData['position']]);
        }

        return redirect()->route('admin.products.index')->with('success', 'Product order updated successfully!');
    }
}

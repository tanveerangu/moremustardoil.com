<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Enquiry;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::get();
        $blogs = Blog::latest()->get()->take(3);
        $products = Product::get()->take(4);
        $gallery = Gallery::get()->take(6);
        $testimonials = Testimonial::get();
        return view('front.index', compact(
            'banners',
            'blogs',
            'products',
            'gallery',
            'testimonials'
        ));
    }

    public function about()
    {
        $testimonials = Testimonial::get();
        return view('front.about', compact('testimonials'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function products()
    {
        $products = Product::get();
        return view('front.products', compact('products'));
    }
    public function manufacturingProcess()
{
    return view('front.manufacturing-process');
}

    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $latestProduct = Product::latest()->get()->take(4);
        return view('front.singleProduct', compact('product', 'latestProduct'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return view('front.blogs', compact('blogs'));
    }

    public function singleBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('front.singleBlog', compact('blog'));
    }

    public function gallery()
    {
        $gallery = Gallery::get();
        return view('front.gallery', compact('gallery'));
    }

    public function enquiry(Request $request)
    {
        Enquiry::create($request->all());
        return redirect()->back()->with('success', 'Thanks For Contacting Us');
    }
}

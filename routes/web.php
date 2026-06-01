<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CatalogController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/our-products', [HomeController::class, 'products'])->name('products');
Route::get('/product/{slug}', [HomeController::class, 'singleProduct'])->name('singleProduct');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [HomeController::class, 'singleBlog'])->name('singleBlog');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::post('/enquiry', [HomeController::class, 'enquiry'])->name('enquiry');
Route::get('/manufacturing-process', [HomeController::class, 'manufacturingProcess'])
    ->name('manufacturing-process');


Auth::routes([
    'register' => false,
]);


Route::prefix('/admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');

    // Route::prefix('/pages')->name('pages.')->group(function () {
    //     Route::get('/', [PageController::class, 'index'])->name('index');
    //     Route::get('/create', [PageController::class, 'create'])->name('create');
    //     Route::post('/store', [PageController::class, 'store'])->name('store');
    //     Route::get('/edit/{slug}', [PageController::class, 'edit'])->name('edit');
    //     Route::post('/update/{slug}', [PageController::class, 'update'])->name('update');
    //     Route::get('/delete/{slug}', [PageController::class, 'delete'])->name('delete');
    //     Route::post('/multiple-delete', [PageController::class, 'multipleDelete'])->name('multipleDelete');
    // });

    Route::prefix('/blogs')->name('blogs.')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/store', [BlogController::class, 'store'])->name('store');
        Route::get('/edit/{slug}', [BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{slug}', [BlogController::class, 'update'])->name('update');
        Route::get('/delete/{slug}', [BlogController::class, 'delete'])->name('delete');
        Route::post('/multiple-delete', [BlogController::class, 'multipleDelete'])->name('multipleDelete');
    });

    Route::prefix('/services')->name('services.')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/create', [ServiceController::class, 'create'])->name('create');
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::get('/edit/{slug}', [ServiceController::class, 'edit'])->name('edit');
        Route::post('/update/{slug}', [ServiceController::class, 'update'])->name('update');
        Route::get('/delete/{slug}', [ServiceController::class, 'delete'])->name('delete');
        Route::post('/multiple-delete', [ServiceController::class, 'multipleDelete'])->name('multipleDelete');
        Route::post('/reorder', [ServiceController::class, 'reorder'])->name('reorder');
    });

    Route::prefix('/testimonials')->name('testimonials.')->group(function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('index');
        Route::get('/create', [TestimonialController::class, 'create'])->name('create');
        Route::post('/store', [TestimonialController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [TestimonialController::class, 'delete'])->name('delete');
        Route::post('/multiple-delete', [TestimonialController::class, 'multipleDelete'])->name('multipleDelete');
        Route::post('/reorder', [TestimonialController::class, 'reorder'])->name('reorder');
    });

    // Route::prefix('/colors')->name('colors.')->group(function () {
    //     Route::get('/', [ColorController::class, 'index'])->name('index');
    //     Route::get('/create', [ColorController::class, 'create'])->name('create');
    //     Route::post('/store', [ColorController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}', [ColorController::class, 'edit'])->name('edit');
    //     Route::post('/update/{id}', [ColorController::class, 'update'])->name('update');
    //     Route::get('/delete/{id}', [ColorController::class, 'delete'])->name('delete');
    //     Route::post('/multiple-delete', [ColorController::class, 'multipleDelete'])->name('multipleDelete');
    // });

    // Route::prefix('/sizes')->name('sizes.')->group(function () {
    //     Route::get('/', [SizeController::class, 'index'])->name('index');
    //     Route::get('/create', [SizeController::class, 'create'])->name('create');
    //     Route::post('/store', [SizeController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}', [SizeController::class, 'edit'])->name('edit');
    //     Route::post('/update/{id}', [SizeController::class, 'update'])->name('update');
    //     Route::get('/delete/{id}', [SizeController::class, 'delete'])->name('delete');
    //     Route::post('/multiple-delete', [SizeController::class, 'multipleDelete'])->name('multipleDelete');
    // });

    Route::prefix('/product-categories')->name('productCategories.')->group(function () {
        Route::get('/', [ProductCategoryController::class, 'index'])->name('index');
        Route::get('/create', [ProductCategoryController::class, 'create'])->name('create');
        Route::post('/store', [ProductCategoryController::class, 'store'])->name('store');
        Route::get('/edit/{slug}', [ProductCategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{slug}', [ProductCategoryController::class, 'update'])->name('update');
        Route::get('/delete/{slug}', [ProductCategoryController::class, 'delete'])->name('delete');
        Route::post('/multiple-delete', [ProductCategoryController::class, 'multipleDelete'])->name('multipleDelete');
        Route::post('/reorder', [ProductCategoryController::class, 'reorder'])->name('reorder');
    });

    Route::prefix('/banners')->name('banners.')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('index');
        Route::get('/create', [BannerController::class, 'create'])->name('create');
        Route::post('/store', [BannerController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BannerController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [BannerController::class, 'delete'])->name('delete');
        Route::post('/multiple-delete', [BannerController::class, 'multipleDelete'])->name('multipleDelete');
        Route::post('/reorder', [BannerController::class, 'reorder'])->name('reorder');
    });

    // Route::prefix('/coupons')->name('coupons.')->group(function () {
    //     Route::get('/', [CouponController::class, 'index'])->name('index');
    //     Route::get('/create', [CouponController::class, 'create'])->name('create');
    //     Route::post('/store', [CouponController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}', [CouponController::class, 'edit'])->name('edit');
    //     Route::post('/update/{id}', [CouponController::class, 'update'])->name('update');
    //     Route::get('/delete/{id}', [CouponController::class, 'delete'])->name('delete');
    //     Route::post('/multiple-delete', [CouponController::class, 'multipleDelete'])->name('multipleDelete');
    // });


    Route::prefix('/products')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::get('/edit/{slug}', [ProductController::class, 'edit'])->name('edit');
        Route::post('/update/{slug}', [ProductController::class, 'update'])->name('update');
        Route::get('/delete/{slug}', [ProductController::class, 'delete'])->name('delete');
        Route::get('/delete-image/{id}', [ProductController::class, 'deleteImage'])->name('deleteImage');
        Route::post('/multiple-delete', [ProductController::class, 'multipleDelete'])->name('multipleDelete');
        Route::post('/reorder', [ProductController::class, 'reorder'])->name('reorder');
    });

    Route::prefix('/galleries')->name('galleries.')->group(function () {
        Route::get('/', [GalleryController::class, 'index'])->name('index');
        Route::get('/create', [GalleryController::class, 'create'])->name('create');
        Route::post('/store', [GalleryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [GalleryController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [GalleryController::class, 'delete'])->name('delete');
        Route::post('/multiple-delete', [GalleryController::class, 'multipleDelete'])->name('multipleDelete');
        Route::post('/reorder', [GalleryController::class, 'reorder'])->name('reorder');
    });

    Route::prefix('/catalogs')->name('catalogs.')->group(function () {
        Route::get('/', [CatalogController::class, 'index'])->name('index');
        Route::get('/create', [CatalogController::class, 'create'])->name('create');
        Route::post('/store', [CatalogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CatalogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CatalogController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [CatalogController::class, 'delete'])->name('delete');
        Route::post('/multiple-delete', [CatalogController::class, 'multipleDelete'])->name('multipleDelete');
        Route::post('/reorder', [CatalogController::class, 'reorder'])->name('reorder');
    });


    Route::prefix('/enquires')->name('enquires.')->group(function () {
        Route::get('/', [EnquiryController::class, 'index'])->name('index');
        Route::get('/delete/{id}', [EnquiryController::class, 'delete'])->name('delete');
        Route::post('/multiple-delete', [EnquiryController::class, 'multipleDelete'])->name('multipleDelete');
    });

    Route::prefix('/settings')->name('settings.')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::post('/update', [SettingController::class, 'update'])->name('update');
    });

    Route::get('/clear-cache', function () {
        Artisan::call('optimize:clear');
        return  redirect()->route('admin.index')->with('success', '✅ All caches cleared (app, route, config, view)');
    })->name('clear-cache');
});

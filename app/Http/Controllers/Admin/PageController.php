<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $pages =  Page::paginate(10);
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string|max:255|unique:pages,slug|regex:/^[a-z0-9-]+$/',
        ]);

        Page::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'meta_tags' => $request->meta_tags,
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page Created successfully!');
    }

    public function edit($slug)
    {
        $page = Page::where('slug', $slug)->first();


        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id . '|regex:/^[a-z0-9-]+$/',
        ]);

        $page->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
            'meta_tags' => $request->meta_tags,
        ]);

        return redirect()->route('admin.pages.edit', $page->slug)->with('success', 'Page updated successfully!');
    }


    public function delete($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page Deleted successfully!');
    }

    public function multipleDelete(Request $request)
    {

        $request->validate([
            'ids' => 'required|array',
        ], [
            'ids.required' => 'Please select the item(s) to delete.',
        ]);

        Page::whereIn('id', $request->ids)->delete();

        return redirect()->route('admin.pages.index')->with('success', 'Pages deleted successfully.');
    }
}

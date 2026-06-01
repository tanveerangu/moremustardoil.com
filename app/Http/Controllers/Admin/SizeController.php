<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{

    public function index()
    {
        $sizes = Size::paginate(10);
        return view('admin.sizes.index', compact('sizes'));
    }

    public function create()
    {
        return view('admin.sizes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:sizes,name',
            'code' => 'required|string|max:4|unique:sizes,code'
        ]);

        Size::create($request->all());

        return redirect()->route('admin.sizes.index')->with('success', 'Size created successfully');
    }

    public function edit($id)
    {
        $size = Size::where('id', $id)->first();

        return view('admin.sizes.edit', compact('size'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:sizes,name,' . $id,
            'code' => 'required|string|max:4|unique:sizes,code,' . $id,
        ]);

        $size = Size::where('id', $id)->first();
        $size->update($request->all());

        return redirect()->route('admin.sizes.edit', $id)->with('success', 'Size updated successfully!');
    }

    public function delete($id)
    {
        $size = Size::where('id', $id)->first();
        $size->delete();

        return redirect()->route('admin.sizes.index')->with('success', 'Size deleted successfully!');
    }


    public function multipleDelete(Request $request)
    {

        $request->validate([
            'ids' => 'required|array',
        ], [
            'ids.required' => 'Please select the item(s) to delete.',
        ]);

        Size::whereIn('id', $request->ids)->delete();

        return redirect()->route('admin.sizes.index')->with('success', 'Sizes deleted successfully.');
    }
}

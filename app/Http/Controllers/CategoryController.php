<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories', [
            'title' => 'Category | CMS',
            'no' => 1,
            'category' => Category::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('admin.add-category', [
            'title' => 'Add Category | CMS'
        ]);
    }

    public function store()
    {
        $data = [
            'name' => request('name'),
            'slug' => Str::of(request('name'))->slug('-'),
        ];

        Category::create($data);

        return redirect('/admin/categories')->with('success', 'Successfully Added');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.edit-category', [
            'title' => 'Edit Category | CMS',
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'slug' => Str::of(request('name'))->slug('-'),
        ]);

        $data = Category::find($id);

        $data->update($validatedData);

        return redirect('/admin/categories')->with('edit', 'Edit Success');
    }

    public function destroy($id)
    {
        $data = Category::find($id);
        $data->delete();

        return redirect('/admin/categories')->with('deleteCategory', 'Deleted Successfully');
    }
}

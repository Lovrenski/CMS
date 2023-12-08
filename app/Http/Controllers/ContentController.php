<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contents', [
            'title' => 'Manage Contents | CMS',
            'no' => 1,
            'contents' => Content::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('admin.add-content', [
            'title' => 'Add Contents | CMS',
            'categories' => Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|max:60',
            'category_id' => 'required',
            'body'        => 'required',
            'foto'        => 'required|file|max:2048',
        ]);

        $data['slug'] = Str::of($data['title'])->slug('-');

        $data['username'] = Auth::user()->username;

        $data['foto'] = request('foto')->store('contents');

        Content::create($data);

        return redirect('/admin/contents')->with('success', 'Successfully Added');
    }
    public function show($id)
    {
        $data = Content::find($id);
        return view('admin.show-content', [
            'title' => 'Show Content | CMS',
            'content' => $data,
        ]);
    }

    public function edit($id)
    {
        return view('admin.edit-content', [
            'title' => 'Edit Content | CMS',
            'content' => Content::where('id', $id)->get(),
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|max:60',
            'category_id' => 'required',
            'body' => 'required',
        ]);

        $data['slug'] = Str::of($request->title)->slug('-');

        $data['username'] = Auth::user()->username;

        if ($request->oldFoto) {
            Storage::delete($request->oldFoto);
        }

        if ($request->foto) {
            $data['foto'] = $request->file('foto')->store('contents');
        }

        Content::find($id)->update($data);

        return redirect('/admin/contents')->with('edit', 'Edit Success');
    }

    public function destroy($id)
    {
        $data = Content::find($id);

        if ($data->foto) {
            Storage::delete($data->foto);
        }

        $data->delete();

        return redirect('/admin/contents')->with('delete', 'Successfully deleted');
    }
}
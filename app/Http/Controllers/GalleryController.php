<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.galleries', [
            'title' => 'Manage Gallery | CMS',
            'gallery' => Gallery::latest()->paginate(6),
        ]);
    }

    public function create()
    {
        return view('admin.add-gallery', [
            'title' => 'Add Gallery | CMS'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:60',
            'foto' => 'required|file|max:2048',
        ]);

        $validatedData['foto'] = $request->file('foto')->store('galleries');

        Gallery::create($validatedData);

        return redirect('/admin/galleries')->with('tambahGallery', 'Successfully Added');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->foto) {
            Storage::delete($gallery->foto);
        }

        Gallery::destroy($gallery->id);
        return redirect('/admin/galleries')->with('deleteGallery', 'Successfully Deleted');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        return view('admin.carousels', [
            'title' => 'Carousel | CMS',
            'dataCarousel' => Carousel::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.add-carousel', [
            'title' => 'Add Carousel | CMS'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:60',
            'foto' => 'required|file|max:2048',
        ]);

        $validatedData['foto'] = $request->file('foto')->store('carousels');

        Carousel::create($validatedData);

        return redirect('/admin/carousels')->with('tambahCarousel', 'Successfully Added');
    }

    public function edit($id)
    {
        return view('admin.edit-carousel', [
            'title' => 'Edit Carousel | CMS',
            'carousel' => Carousel::where('id', $id)->get()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:60',
            'foto' => 'required|file|max:2048',
        ]);

        if ($request->oldFoto) {
            Storage::delete($request->oldFoto);
        }

        $validatedData['foto'] = $request->file('foto')->store('carousel');

        Carousel::find($id)->update($validatedData);

        return redirect('/admin/carousels')->with('tambahCarousel', 'Successfully Edited');
    }

    public function destroy(Carousel $carousel)
    {
        if ($carousel->foto) {
            Storage::delete($carousel->foto);
        }

        Carousel::destroy($carousel->id);
        return redirect('/admin/carousels')->with('deleteCarousel', 'Successfully Deleted');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gallery;
use App\Models\Content;
use App\Models\Category;
use App\Models\Carousel;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        $admin = User::where('level', 'Admin')->count();
        $contributor = User::where('level', 'Contributor')->count();
        $contents = Content::count();
        $category = Category::count();
        $carousel = Carousel::count();
        $gallery = Gallery::count();
        return view('admin.index', [
            'title'       => 'Dashboard Admin | CMS',
            'contents'    => $contents,
            'admin'       => $admin,
            'contributor' => $contributor,
            'category'    => $category,
            'carousel'    => $carousel,
            'gallery'     => $gallery,
        ]);
    }

    public function manageContributor()
    {
        return view('admin.manage-contributor', [
            'no'              => 1,
            'title'           => 'Manage Contributor | CMS',
            'dataContributor' => User::where('level', 'Contributor')->latest()->get(),
        ]);
    }

    public function addContributor()
    {
        return view('admin.add-contributor', [
            'title' => 'Add Contributor | CMS'
        ]);
    }

    public function tambahContributor(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:60|unique:users',
            'password' => 'required|min:3|max:200',
            'name' => 'required|min:3|max:40',
            'level' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/manage-contributor')->with('tambahContributor', 'Successfully Added');
    }

    public function deleteContributor($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/manage-contributor')->with('deleteContributor', 'Successfully deleted');
    }

    public function manageAdmin()
    {
        return view('admin.manage-admin', [
            'no' => 1,
            'title' => 'Manage Admin | CMS',
            'dataAdmin' => User::where('level', 'Admin')->latest()->get(),
        ]);
    }

    public function addAdmin()
    {
        return view('admin.add-admin', [
            'title' => 'Add Admin | CMS'
        ]);
    }

    public function tambahAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:60|unique:users',
            'password' => 'required|min:3|max:200',
            'name' => 'required|min:3|max:40',
            'level' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/manage-admin')->with('tambahAdmin', 'Successfully Added');
    }

    public function deleteAdmin($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/manage-admin')->with('deleteAdmin', 'Deleted Successfully');
    }
}
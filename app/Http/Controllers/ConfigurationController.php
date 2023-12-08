<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index()
    {
        $config = Configuration::all();
        return view('admin.config', [
            'title' => 'Config | CMS',
            'config' => $config
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'web_title'   => 'required|max:60',
            'web_profile' => 'required',
            'instagram'   => 'required|max:50',
            'facebook'    => 'required|max:50',
            'email'       => 'required|max:50',
            'address'     => 'required|max:50',
        ]);

        Configuration::create($data);

        return redirect('/admin/config')->with('add', 'Added New Config');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'web_title'   => 'required|max:60',
            'web_profile' => 'required',
            'instagram'   => 'required|max:50',
            'facebook'    => 'required|max:50',
            'email'       => 'required|max:50',
            'address'     => 'required|max:50',
        ]);

        Configuration::find(1)->update($data);

        return redirect('/admin/config')->with('success', 'Update Success');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Content;
use App\Models\Gallery;
use App\Models\Carousel;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Suggestion;

class VisitorController extends Controller
{
    public function index()
    {
        $head = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $head = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $head = ' by ' . $author->username;
        }

        $carousels = Carousel::all();
        $categories = Category::all();
        $recent = Content::latest()->paginate(5);
        $contents = Content::with('category')->latest()->filter(request(['search', 'category']))->paginate(10)->withQueryString();
        $footer = Content::latest()->paginate(2);
        $config = Configuration::first();

        return view('visitors.index', [
            'title' => 'Home | CMS',
            'head' => 'All Content' . $head,
            'no' => 1,
            'carousels' => $carousels,
            'categories' => $categories,
            'recent' => $recent,
            'contents' => $contents,
            'config' => $config,
            'footer' => $footer,
            'hero' => 'carousels'
        ]);
    }

    public function detail($slug)
    {
        $carousels = Carousel::all();
        $categories = Category::all();
        $recent = Content::with('category')->latest()->paginate(5);
        $config = Configuration::first();
        $footer = Content::latest()->paginate(2);
        $content = Content::where('slug', $slug)->first();

        return view('visitors.content', [
            'title' => 'Single Post',
            'no' => 1,
            'carousels' => $carousels,
            'categories' => $categories,
            'recent' => $recent,
            'config' => $config,
            'content' => $content->load('category'),
            'footer' => $footer,
            'hero' => 'content'
        ]);
    }

    public function galleries()
    {
        $carousels = Carousel::all();
        $categories = Category::all();
        $recent = Content::latest()->paginate(5);
        $galleries = Gallery::latest()->paginate(10);
        $footer = Content::latest()->paginate(2);
        $config = Configuration::first();

        return view('visitors.galleries', [
            'title' => 'Galleries | CMS',
            'no' => 1,
            'carousels' => $carousels,
            'categories' => $categories,
            'recent' => $recent,
            'galleries' => $galleries,
            'config' => $config,
            'footer' => $footer,
            'hero' => 'galleries'
        ]);
    }

    public function about()
    {
        $carousels = Carousel::all();
        $categories = Category::all();
        $recent = Content::latest()->paginate(5);
        $footer = Content::latest()->paginate(2);
        $config = Configuration::first();

        return view('visitors.about', [
            'title' => 'Galleries | CMS',
            'no' => 1,
            'carousels' => $carousels,
            'categories' => $categories,
            'recent' => $recent,
            'config' => $config,
            'footer' => $footer,
            'hero' => 'about'
        ]);
    }

    public function contact()
    {
        $carousels = Carousel::all();
        $categories = Category::all();
        $recent = Content::latest()->paginate(5);
        $footer = Content::latest()->paginate(2);
        $config = Configuration::first();

        return view('visitors.contact', [
            'title' => 'Galleries | CMS',
            'no' => 1,
            'carousels' => $carousels,
            'categories' => $categories,
            'recent' => $recent,
            'config' => $config,
            'footer' => $footer,
            'hero' => 'contact'
        ]);
    }

    public function addSuggest(Request $request)
    {
        $data = $request->validate([
            'body'  => 'required',
            'name'  => 'required',
            'email' => 'required'
        ]);

        Suggestion::create($data);
        return redirect('/contact')->with('success', 'Thank you!');
    }
}
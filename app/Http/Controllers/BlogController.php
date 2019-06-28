<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::all();
        return view('index', compact('blogs'));
    }

    public function create()
    {
        return view('create');
    }

    public function view($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('list', compact('blogs'));
    }

    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        return view("edit", compact('blogs'));
    }

    public function update(Request $request, $id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->title = $request->title;
        $blogs->type = $request->type;
        $blogs->author = $request->author;
        $blogs->save();
        return redirect()->route('index');
    }

    public function delete($id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        return redirect()->route('index');
    }

    public function store(Request $request)
    {
        $blogs = new Blog();
        $blogs->title = $request->title;
        $blogs->type = $request->type;
        $blogs->author = $request->author;
        $blogs->save();
        return redirect()->route('index');
    }

}

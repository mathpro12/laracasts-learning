<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Blog::latest()->get();

    	return view ('blog.index', compact('posts'));
    }

    public function create()
    {
    	return view ('blog.create');
    }

    public function store()
    {

    	$this->validate(request(), [

			'title' => 'required',
    		'body' => 'required'

    		]);

    	Blog::create([

    		'title' => request('title'),
    		'body' => request('body')

    	]);

    	return redirect('/');

    }

    public function show($id)
    {
    	$post = Blog::find($id);

    	return view ('blog.show', compact('post'));
    }
}



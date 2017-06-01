<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class PostsController extends Controller
{
    public function index()
    {
    	return view ('blog.index');
    }

    public function create()
    {
    	return view ('blog.create');
    }

    public function store()
    {

    	Blog::create([

    		'title' => request('title'),
    		'body' => request('body')

    	]);

    	return redirect('/');

    }
}



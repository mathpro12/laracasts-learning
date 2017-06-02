<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->get();

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

    	Post::create([

    		'title' => request('title'),
    		'body' => request('body')

    	]);

    	return redirect('/'); 

    }

    public function show(POst $post)
    {
    	#$post = Post::find($id);

    	return view ('blog.show', compact('post'));
    }
}



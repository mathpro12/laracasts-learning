<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }


    public function index()
    {
    	$posts = Post::latest()->get();

    	return view ('blog.index', compact('posts'));
    }

    public function create()
    {
    	return view ('blog.posts.create');
    }

    public function store()
    {

    	$this->validate(request(), [

			'title' => 'required',
    		'body' => 'required'

    		]);

    	Post::create([

    		'title' => request('title'),
    		'body' => request('body'),
            'user_id' => auth()->user()->id

    	]);

    	return redirect('/'); 

    }

    public function show(Post $post)
    {
    	#$post = Post::find($id);

    	return view ('blog.posts.show', compact('post'));
    }
}



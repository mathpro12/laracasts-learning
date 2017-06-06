<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }


    public function index()
    {
    	$posts = Post::latest()->filter(request(['month', 'year']))->get();

        $archives = Post::archives();

    	return view ('blog.index', compact('posts', 'archives'));
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

        session()->flash('message', 'Your post has been published!');

    	return redirect('/'); 

    }

    public function show(Post $post)
    {
    	#$post = Post::find($id);

    	return view ('blog.posts.show', compact('post'));
    }
}



@extends('layouts.master')

@section('content')

  <div class="col-sm-8 blog-main">

  	<h1> {{ $post->title }} </h1>

  	{{ $post->body }}

  	<hr>

	  	@foreach ($post->comments as $comment)

	  		<div class = "list-group-item">


	  			{{ $comment->created_at->diffForHumans() }}: &nbsp
  			{{ $comment->body }}

  		</div>

  	@endforeach

  	<hr>

  	<form method="POST" action = "/posts/{{ $post->id }}/comments">

  		{{ csrf_field() }}	

		<div class = "form-group">
	  		<label for="body">Type Your Comment</label>
	    	<textarea class="form-control" id="body" name="body"></textarea>
	    </div>
    	<button type="submit" class="btn btn-secondary">Comment</button>

  	</form>

  	@include('layouts.errors')

  </div>

@endsection

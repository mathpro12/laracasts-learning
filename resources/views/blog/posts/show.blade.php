@extends('layouts.master')

@section('content')

  <div class="col-sm-8 blog-main">

  	<h1> {{ $post->title }} </h1>

  	{{ $post->body }}


    @if(count ($post->tags))

      <hr>

      <h2>Tags</h2> 

      <ul>

        @foreach( $post->tags as $tag)

          <li> <a href='/posts/tags/{{$tag->name}}'>{{ $tag->name }}</a></li>

        @endforeach

      </ul>
    @endif

  	<hr>

	  	@foreach ($post->comments as $comment)

	  		<div class = "list-group-item">

          {{ $comment->user->name }} at
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

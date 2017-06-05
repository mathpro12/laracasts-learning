@extends('layouts.master')

@section('content')

  @foreach ($posts as $post)

    @include('blog.posts.post')
    
  @endforeach

@endsection


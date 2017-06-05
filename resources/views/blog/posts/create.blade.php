@extends('layouts.master')

@section('content')

  <div class="col-sm-8 blog-main">

	<div class = "form-group">
    	@include ('layouts.form')
    </div>

     @include ('layouts.errors')

  </div>

@endsection


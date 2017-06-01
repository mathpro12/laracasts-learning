@extends('layouts.master')

@section('content')

  <div class="col-sm-8 blog-main">

	<div class = "form-group">
    	@include ('layouts.form')
    </div>

    @if (count($errors))
	    <div class="form-group">
	    	<div class = "alert alert-danger">

	    		<ul>

		    		@foreach ($errors->all() as $error)

		    			<li> {{ $error }} </li>

		    		@endforeach

	    		</ul>

	    	</div>
	    </div>

    @endif

  </div>

@endsection


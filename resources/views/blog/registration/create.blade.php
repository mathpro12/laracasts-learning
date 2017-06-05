@extends('layouts.master')

@section('content')

	<form method = "POST" action = '/register'>

  		{{ csrf_field() }}

  		<h1>Register</h1>

  		<div class="form-group">
   			<label for="name">Name</label>
    		<input type="text" class="form-control" id="name" name="name" required>
  		</div>

		<div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="youremail@example.com" required>
 		</div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="form-group">
        <label for="password">Password Confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>

  		<button type="submit" class="btn btn-primary">Register</button>
	</form>

  @include('layouts.errors')

@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function create()
    {
    	return view ('blog.registration.create');
    }

    public function store(RegistrationRequest $request)
    {

    	$user = User::create([

    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))

    	]);

    	auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        session()->flash('message', 'Thanks for signin up!');

    	return redirect()->home();
    }
}

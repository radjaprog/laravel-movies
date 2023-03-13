<?php

namespace App\Http\Controllers;

//use App\Http\Requests\LoginRequest;
//use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        // $credentials = $request->validated();

        return view('auth.login');
    }
}

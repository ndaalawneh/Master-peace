<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\provider;
use App\Models\admin;


class login extends Controller
{
    public function login()
    {
    return view('login');
    }

    public function register()
    {
    return view('register');
    }

    public function logout()
    {
    return view('index');
    }




}

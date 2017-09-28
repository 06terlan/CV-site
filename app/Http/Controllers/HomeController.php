<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\MyClass;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
    	$user = User::find(1);
    	return view('layouts.pages.home',['user' => $user]);
    }
}

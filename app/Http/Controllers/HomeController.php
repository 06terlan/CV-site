<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\MyClass;
use App\User;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
    	$user = User::find(1);
    	$about = Storage::get('about.txt');
    	return view('layouts.pages.home',['user' => $user , 'about' => $about ]);
    }
}

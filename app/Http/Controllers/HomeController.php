<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\MyClass;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
    	$user 			= User::find(1);
    	$about 			= Storage::get('about.txt');
    	$skills			= Skill::realSkill()->where('type','skill')->get();
    	$generalSkills	= Skill::realSkill()->where('type','general_skill')->get();

    	return view('layouts.pages.home',[ 'skills' => $skills , 'user' => $user , 'about' => $about , 'generalSkills' => $generalSkills ]);
    }
}

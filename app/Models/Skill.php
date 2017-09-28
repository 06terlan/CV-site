<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
	public $timestamps = false;
	
    public static function realSkill()
    {
    	return self::where('deleted',0)->orderBy('created_at', 'desc');
    }
}

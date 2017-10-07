<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewSkillRequest;
use App\Models\Skill;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Library\MyClass;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::realSkill()->paginate( MyClass::ADMIN_ROW_COUNT );
        return view('admin.skill.skills',['skills' => $skills]);
    }

    public function addEdit($id)
    {
    	$dataToBlade = [
    		'id'	=> $id,
            'Skill' 	=> Skill::find($id)
        ];

        return view('admin.skill.skillAddEdit',$dataToBlade);
    }

    public function addEditPost(NewSkillRequest $request)
    {
        if($request->input('id') == 0)
        {
            $post                   = new Skill();
            $post->skill            = $request->input('skill');
            $post->percent          = $request->input('percent');
            $post->type             = $request->input('type');

            $post->save();
        }
        else
        {
            $post                   = Skill::find( $request->input('id') );
            $post->skill            = $request->input('skill');
            $post->percent          = $request->input('percent');
            $post->type             = $request->input('type');

            $post->save();
        }

        return redirect("admin/skills");
    }

    public function delete($id)
    {
        $post = Skill::find($id);
        $post->deleted = 1;
        $post->save();
        
        return redirect("admin/skills");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UpdateSaveUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $dataToBlade = [
            'Users' => User::all()
        ];
        return view('admin.user.users',$dataToBlade);
    }

    public function addEdit($id)
    {
        $dataToBlade = [
            'id' => $id,
            'User' => User::find($id)
        ];

        return view('admin.user.userAddEdit',$dataToBlade);
    }

    public function addEditUser(Request $request,$id)
    {
        $UpdateUserRequestR = new UpdateSaveUserRequest();
        $validate = Validator::make($request->all(), $UpdateUserRequestR->rules());
        if($validate->fails()) return redirect()->back()->withErrors($validate);

        if($id == 0)
        {
            $validate = Validator::make($request->all(), ['password' => 'required|string|min:6']);
            if($validate->fails()) return redirect()->back()->withErrors($validate);

            $user = new User();
            $user->name = Input::get("name");
            $user->email = Input::get("email");
            $user->login = Input::get("login");
            $user->password = Hash::make(Input::get("password"));
            $user->role = Input::get("role");

            $user->save();
        }
        else
        {
            $user = User::find($id);;
            $user->name = Input::get("name");
            $user->email = Input::get("email");
            $user->login = Input::get("login");
            $user->role = Input::get("role");

            if( !empty(Input::get("password")) )
            {
                $validate = Validator::make($request->all(), ['password' => 'required|string|min:6']);
                if($validate->fails()) return redirect()->back()->withErrors($validate);

                $user->password = Hash::make(Input::get("password"));
            }

            $user->save();
        }

        return redirect("admin/users");
    }

    public function delete(Request $request,$id)
    {
        if( Auth::user()->id != $id )
        {
            $user = User::find($id);
            $user->delete();
        }

        return redirect("admin/users");
    }
}

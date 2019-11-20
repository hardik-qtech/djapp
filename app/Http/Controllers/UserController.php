<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function add_data()
    {
        return view('users.add');
    }
    public function insert(Request $request)
    {
        $user=new User;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return view('users.add');
    }
    public function table()
    {
        return view('users.table');
    }
    public function get_data()
    {
        $users=User::all();
        return view('users.table')->with('users',$users);
    }
    public function delete_user($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.table');
    }
}

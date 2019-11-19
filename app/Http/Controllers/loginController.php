<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required'
            ]);
            if ($validator->fails()) {
                return $validator->errors()->all();
            } else {
                $check_email = User::find(1);

                if ($check_email) {
                    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                        return redirect()->route('admin.home');
                    } else {
                        return redirect()->route('loginpage');
                    }
                } else {
                    return redirect()->route('loginpage');
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage() . "" . $e->getFile() . "" . $e->getLine();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginpage')->with('success', 'Logout Successfully.');
    }
}

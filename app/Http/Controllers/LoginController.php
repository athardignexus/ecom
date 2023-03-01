<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.signup');
    }
    public function login_action(Request $request)
    {
        $valid = $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "confirm_password" => "required",
        ]);
        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => "2",
        ];
        user::create($data);
        return redirect()->back();
        //return $request;
    }

    public function log()
    {
        return view('admin.signin');
    }
    public function register_action(Request $request)
    {
        $valid = $request->validate([
            "email" => "required|email",
            "password" => "required|min:8",
        ]);

        $remember = $request->input('remember');
        // echo $remember;

        $data = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if (Auth::attempt($data, $remember)) {
            if (Auth::user()->role == '1')
                return redirect('admin');
            else
                return redirect('user');
        } else {

            return redirect()->back()->with(['status' => "Invalid", 'msg' => 'Invalid Login']);
        }
        //$user = DB::table('users')->where('email', $request->email)->first();
        //echo ($user->email);
        //return redirect()->back();
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/signin');
    }
}

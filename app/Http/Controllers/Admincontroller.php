<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Session;
use function App\Helpers\is_mobile;
use App\Models\privacy_policy;

class Admincontroller extends Controller
{
    //
    function index(Request $request){
        $type = $request->input('type');

        $privacy_policy= privacy_policy::count();
        $res['privacy_policy'] = $privacy_policy;

        return is_mobile($type, "index", $res, 'view');
        // return view('index',compact('merchant','transaction','feessum','amtsum'));
    }

    function usersignup(Request $req){
        $validator = Validator::make($req->all(), [ 
            'username' => 'required|unique:admins', 
            'email' => 'required|email||unique:admins', 
            'password' => 'required', 
        ]);
        if ($validator->fails()) {
            // Redirect back with errors
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $hashedPassword = md5($req->input('password'));
        $type = $req->input('type');
        $admin=new admin;
        $admin->username=$req->username;
        $admin->email=$req->email;
        $admin->password=$hashedPassword;
        $admin->save();

        Session::put('adminid',$admin->id);
        Session::put('adminname',$admin->username);
        Session::put('role',$admin->role);
        return is_mobile($type, "admin_dashboard");
        // return redirect()->route('admin_dashboard');
    }
    function usersignin(Request $req){
        $user=admin::where('username',$req->username)->first();
        $type = $req->input('type');
        if($user){
            $check= md5($req->input('password')) === $user->password;
            if($check){

                Session::put('adminid',$user->id);
                Session::put('adminname',$user->username);
                Session::put('role',$user->role);
                // return redirect()->route('admin_dashboard');
                return is_mobile($type, "admin_dashboard");
            }
            else{
                $error = 'Invalid password';
                return redirect()->back()->withErrors([$error])->withInput();
            }
        }
        else{
            $error = 'Invalid username';
            return redirect()->back()->withErrors([$error])->withInput();
        }
    }

    function admin_logout(Request $req){
        $type = $req->input('type');
        Session::forget('adminid');
        Session::forget('adminname');
        Session::forget('role');
        return is_mobile($type, "login");
        // return redirect()->route('login');
    }
}

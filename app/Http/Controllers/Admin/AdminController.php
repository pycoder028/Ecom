<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Redirect;

session_start();
class AdminController extends Controller
{
public function index(){
        return view('admin.pages.login');
    }

    public function dashboard(){
        return view('admin.pages.dashboard');
    }

    public function show_dashboard(Request $request){

        $admin_email = $request->email;
        $admin_password = md5($request->password);

        $result = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

        if($result){
            Session::put('admin_id', $request->admin_id);
            Session::put('admin_name', $request->admin_name);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Email or Password Invalid');
            return Redirect::to('/admin');
        }

    }

}

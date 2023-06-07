<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainController extends Controller
{
    public function login(){
        return view('DashboardView.login');
    }

    public function loginstore(Request $req){

        $result = DB::select('select * from admin where admin_email = ? and admin_password = ?' ,[ $req['admin_email'] , $req['admin_password'] ]);

        if($result != null){
           session()->put('admin_email',$req['admin_email']);
           session()->put('admin_password',$req['admin_password']);
           return redirect('/dashboard');
        }else{

           session()->flash('status',"login Failed");
                return redirect('/login');
        }


     }

    public function logout(){

        session()->forget('admin_email');
        session()->forget('admin_passwoed');

        return redirect('/login');

     }

}

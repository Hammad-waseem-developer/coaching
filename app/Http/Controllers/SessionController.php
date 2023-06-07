<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SessionController extends Controller
{
    // Class
    public function Session(){

        $data = Db::select('select * from session');

        return view('DashboardView.session',compact('data'));
    }
// Classes
    public function SessionAddSession(){

        $data = Db::select('select * from session');

        return view('DashboardView.session-add-session',compact('data'));
    }
    public function SessionStoreSession(Request $req){
        $req->validate(
            [
                'session_name' => 'required | max:30',
            ]
            );

        Db::insert('insert into session(session_name) values(?)',[$req->session_name]);
        return redirect('/dashboard/session');
    }
// Classes
    public function SessionEditSession($id){


        $session = Db::select('select * from session where session_id = ?',[$id]);

        if($session != null){


            return view('DashboardView.session-edit-session',compact('session'));
        }

        return redirect('/dashboard/session');



    }
    public function SessionUpdateSession($id,Request $req){



        $session = Db::select('select * from session where session_id = ?',[$id]);

        if($session != null){

            Db::update('update session set session_name = ? where session_id = ?',[$req['session_name'],$id]);

        return redirect('/dashboard/session');

        }

        return redirect('/dashboard/session');


    }

    public function SessionDeleteSession($id){
        $session = DB::select('select * from session where session_id = ?',[$id]);

        if($session != null){
            $row = DB::select('select * from student where session_id = ? ',[$id]);
            if($row != null){
                session()->flash('status','You can"t Delete this Session');
                return redirect('/dashboard/session');
            }
            DB::delete('delete from session where session_id = ?',[$id]);
            return redirect('/dashboard/session');

        }

        return redirect('/dashboard/session');


    }

}

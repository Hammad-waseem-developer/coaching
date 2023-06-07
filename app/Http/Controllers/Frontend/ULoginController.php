<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use app\Models\user_models;

class ULoginController extends Controller
{
    //index
    public function userindex(){
        $result = DB::select('select * from user_models');
        return view('DashboardView.user.user-all')->with('result',$result);
     }

    public function userregister()
    {
        return view('frontend.user.userregister');
    }

    public function userregisterstore(Request $req){
        $req->validate([
       'username'=>'required',
       'useremail'=>'required',
       'userpassword'=>'required',
        ]);

     DB::insert('insert into user_models(username,useremail,userpassword) values(?,?,?)',
     [$req['username'],$req['useremail'],$req['userpassword']]);

        return redirect('/home');
}

public function userlogin(){
    return view('frontend.user.userlogin');
}

public function userloginstore(Request $req){
    $req->validate([
         'useremail'=>'required',
         'userpassword'=>'required',
    ]);

  $result=  DB::select('select * from user_models where useremail = ? and userpassword = ?',[
        $req['useremail'],$req['userpassword']]);

        session()->put('userid',$result[0]->userID);
        session()->put('useremail',$result[0]->useremail);

    if($result == ""){
        return redirect('/userlogin');
    }

    else{

        return redirect('/home');
    }
}
public function userlogout(){

    session()->forget('userid');
    session()->forget('useremail');

    return redirect('userlogin');
}

public function userdelete($id){

    $result = DB::select('select * from user_models where userID = ?',[$id]);

    Db::delete('delete from user_models where userID = ?',[$id]);
    return redirect('user/user-all');
}


}

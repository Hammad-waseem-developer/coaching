<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user_msg;

class UserMsgController extends Controller
{
    function DataInsert(Request $request){

        $user_name = $request->input('user_name');
        $user_contact = $request->input('user_contact');
        $user_email = $request->input('user_email');
        $user_date = $request->input('user_date');
        $user_message = $request->input('user_message');
    }
}









// public function register(Request $req){
//     $req->validate(
//         [
//             'user_name' => 'required | max:30',
//             'user_contact' => 'required | max:11',
//             'user_email' => 'required | email | max:50',
//             'user_date' => 'required | date',
//             'user_message' => ''
//         ]
//     );
//     echo"<pre>";
//     print_r($req->all());
// }

<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    public function messages()
    {

        $messages = DB::select('select * from user_msg');

        return view('DashboardView.messages', compact('messages'));

    }

    public function messagesdelete($id){

        $data = DB::select('select * from user_msg where msg_id = ?' ,[$id]);

        if($data != null){

            Db::delete('delete from user_msg where msg_id = ?',[$id]);

            return redirect('/dashboard/messages');
        }
        
        return redirect('/dashboard/messages');

    }
}

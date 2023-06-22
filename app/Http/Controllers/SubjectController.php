<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubjectController extends Controller
{
    // Class
    public function Subject(){

        $data = Db::select('select * from subject inner join class on class.class_id = subject.class_id');

        return view('DashboardView.subject',compact('data'));
    }
// Classes
    public function SubjectAddSubject(){
        $class = DB::select('select * from class');
        return view('DashboardView.subject-add-subject',compact('class'));
    }

    public function SubjectStoreSubject(Request $req){
        $req->validate(
            [
                'subject_name' => 'required | max:30',
                'class' => 'required',
            ]
            );

        Db::insert('insert into subject(subject_name,class_id) values(?,?)',[$req->subject_name,$req->class]);
        return redirect('/dashboard/subject');
    }

    public function SubjectEditSubject($id){

        $subject = Db::select('select * from subject where subject_id = ?',[$id]);
        $class = DB::select('select * from class');
        if($subject != null){
            return view('DashboardView.subject-edit-subject',compact('subject','class'));
        }

        return redirect('/dashboard/subject');

    }
    public function SubjectUpdateSubject($id,Request $req){

        $subject = Db::select('select * from subject where subject_id = ?',[$id]);

        if($subject != null){

            Db::update('update subject set subject_name = ? , class_id = ? where subject_id = ?',[$req['subject_name'],$req['class'],$id]);

        return redirect('/dashboard/subject');

        }

        return redirect('/dashboard/subject');

    }

    public function SubjectDeleteSubject($id){


        $subject = Db::select('select * from subject where subject_id = ?',[$id]);


        if($subject != null){

            $row = Db::select('select * from test where subject_id = ?',[$id]);

            if($row != null){
                session()->flash('status','You can"t Delete this Subject');
                return redirect('/dashboard/subject');
            }


            Db::delete('delete from subject where subject_id = ?',[$id]);

        return redirect('/dashboard/subject');

        }

        return redirect('/dashboard/subject');


    }

}

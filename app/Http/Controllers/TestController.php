<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

Class TestController extends Controller
{
    public function Test(){

        $test = Db::select('select * from test inner join subject on test.subject_id = subject.subject_id');

        return view('DashboardView.test',compact('test'));
    }
    public function TestAddTest(){

        $subject = Db::select('select * from subject');

        return view('DashboardView.test-add-test',compact('subject'));
    }
    public function TestStoreTest(Request $req)
    {

        $req->validate(
            [
                'test_title' => 'required | max:30',
                'subject' => 'required',
                'test_marks' => 'required',
            ]
        );

        // lanat he

        Db::insert('insert into test(test_title,subject_id,test_marks)
        values(?,?,?)', [$req->test_title,$req->subject,$req->test_marks]);

        return redirect('/dashboard/test');
    }
    public function TestEditTest($id)
    {


        $test = Db::select('select * from test where test_id = ?', [$id]);
        $subject = Db::select('select * from subject');

        if ($test != null) {

            $test = $test[0];

            return view('DashboardView.test-edit-test', compact('test','subject'));
        }
        return redirect('/dashboard/test');
    }
    public function TestUpdateTest($id,Request $req){



        $test = Db::select('select * from test where test_id = ?',[$id]);

        if($test != null){

            Db::update('update test set test_title = ? , subject_id = ? ,test_marks = ? where test_id = ?',
            [
                $req['test_title'], $req->subject ,$req['test_marks'],$id
            ]
        );

        return redirect('/dashboard/test');
    }

    return redirect('/dashboard/test');
}
public function TestDeleteTest($id){


    $test = Db::select('select * from test where test_id = ?',[$id]);

    if($test != null){

            $item =  Db::select('select * from student_test where test_id = ?' ,[$id]);

            if($item){

                session()->flash('status','You can"t delete this Test');

                return redirect('/dashboard/test');
            }
            else{

                $del =  Db::delete('delete from test where test_id = ?',[$id]);
                return redirect('/dashboard/test');
            }

        }



    }



}

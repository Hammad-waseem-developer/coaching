<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;



class WebController extends Controller
{
    public function home()
    {

        $faculity = DB::select('select * from faculity');
        $faculity_count = count($faculity);

        $student = DB::select('select * from student');
        $student_count = count($student);

        $subject = DB::select('select * from subject');
        $subject_count = count($subject);

        $topstudent = DB::select('select * from alumnai');
        $topstudent_count = count($topstudent);

        $announcement = DB::select('select * from announcement');

        $faculity = DB::select('select * from faculity');

        return view('frontend.home', compact('topstudent', 'announcement', 'faculity','faculity_count','student_count','subject_count','topstudent_count'));
    }
    public function usermessage (Request $req){
        $req->validate(
            [
                'user_name' => 'required | max:30',
                'user_contact' => 'required | max:12',
                'user_email' => 'max:60 | email',
                'user_date' => 'required',
                'user_message' => 'required',
            ]
        );
        $insert = DB::insert('INSERT INTO user_msg(user_name, user_contact, user_email, user_date,user_message) VALUES (?,?,?,?,?)',[$req->user_name,$req->user_contact,$req->user_email,$req->user_date,$req->user_message]);
        if($insert){
           session()->flash('status',"Message Submit");
            return redirect('/');
        }
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function about()
    {
        return view('frontend.aboutus');
    }

    public function announce()
    {
        $announcement = DB::select('select * from announcement ');
        return view('frontend.announcements')->with('announcement', $announcement);
    }

    public function announcedetails($id)
    {
        $announcedetails = DB::select('select * from announcement where announcement_id = ?', [$id]);
        return view('frontend.announcement_details')->with('announcedetails', $announcedetails);
    }

    public function teacher()
    {

        $faculity = DB::select('select * from faculity ');

        return view('frontend.teachers', compact('faculity'));
    }

    public function faculityinfo($id)
    {
        $faculity = DB::select('SELECT * FROM faculity INNER JOIN field ON field.field_id = faculity.faculity_field WHERE faculity_id = ?', [$id]);

        return view('frontend.faculity-info', compact('faculity'));
    }

    public function std()
    {
        $topstudent = DB::select('select * from alumnai');

        return view('frontend.top_students')->with('topstudent', $topstudent);
    }

    public function studentlogin()
    {
        return view('frontend.user.studentlogin');
    }
    public function studentloginstore(Request $req)
    {
        $pass = Crypt::encryptString($req->student_password);
        // $pass = md5($req->student_password);

        $data = DB::select('select * from student where student_email = ? OR student_password = ? ', [$req['student_email'], $pass]);
        $announcement = DB::select('SELECT * FROM announcement ORDER BY announcement_id DESC limit 1');
        if ($data != null) {
            session()->put('student_email', $data[0]->student_email);
            session()->put('student_password', $data[0]->student_password);
            session()->put('student_id', $data[0]->student_id);
            session()->put('announcement_name', $announcement[0]->announcement_name);
            session()->put('announcement_desc', $announcement[0]->announcement_desc);
            session()->put('announcement_date', $announcement[0]->announcement_date);
            return redirect('/');
        } else {

           session()->flash('status',"login Failed");
            return redirect('/student-login');
        }
    }

    public function studentlogout(){
        session()->forget('student_email');
        session()->forget('student_password');
        session()->forget('student_id');
        session()->forget('announcement_name');
        session()->forget('announcement_desc');
        session()->forget('announcement_date');
        return redirect('/student-login');
    }

    public function myprofile(){
        $student_id = session()->get('student_id');
        $student = DB::select('select * from student inner join session on session.session_id = student.session_id inner join class on class.class_id = student.class_id inner join field on field.field_id = student.field_id where student.student_id = ?', [$student_id]);
        $test = DB::select('select * from student_test inner join student on student.student_id = student_test.student_id inner join test on test.test_id = student_test.test_id where student.student_id = ?',[$student_id]);
        $faculity = DB::select('select * from faculity INNER join field on field.field_id = faculity.faculity_field WHERE faculity.faculity_field = ?',[$student[0]->field_id]);

        
        return view('frontend.my-profile', compact('student','faculity' , 'test'));

    }

    public function teacherlogin(){
        return view('frontend.user.teacherlogin');
    }

    public function teacherloginstore(Request $req){
        $req->validate([
            'teacher_email' => 'required | max:50',
            'teacher_password' => 'required',
        ]);
        $data = DB::select('select * from faculity where faculity_email = ? OR faculity_password = ?',[$req->teacher_email , $req->teacher_password]);
        if($data){
            session()->put('teacher_id', $data[0]->faculity_id);
            return redirect('/dashboard/faculty');
        }
    }

    public function teacherlogout(){
        session()->forget('teacher_id');
        return redirect('/');
    }



}

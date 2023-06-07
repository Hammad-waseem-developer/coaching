<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;



class StudentController extends Controller
{
    public function Student(){

            $student = Db::select('select * from student inner join class on class.class_id = student.class_id inner join field on field.field_id = student.field_id
            inner join session on student.session_id = session.session_id');
            return view('DashboardView.student', compact('student'));
        }
    public function StudentAddStudent(){

        $student = Db::select('select * from student');
        $class = Db::select('select * from class');
        $field = Db::select('select * from field');
        $sess = Db::select('select * from session');


        return view('DashboardView.student-add-student', compact('student','class','field','sess'));
    }
    public function StudentStoreStudent(Request $req){

        $req->validate(
        [
            'student_name' => 'required | max:30',
            'student_fname' => 'required | max:30',
            'student_contact' => 'required | max:12',
            'father_contact' => 'required | max:12',
            'student_cnic' => 'required | max:15',
            'occupation' => 'required | max:20',
            'address' => 'required',
            'class_id' => 'required',
            'field_id' => 'required',
            'session' => 'required',
            'student_email' => 'required | max:50',
            'student_password' => 'required',
            'student_status' => 'required'
        ]
        );

        if($req['student_pic']){

        $img = $req['student_pic'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . "_" . $imgname;
        $img->move('public/student_pic', $imgname);
        }

        else{
            $imgname = null;
        }

        $pass = Crypt::encryptString($req->student_password);
        // $pass = md5($req->student_password);


        Db::insert('insert into student(student_name,student_fname,student_contact,father_contact,
        student_cnic,f_occupation,office_contact,office_address,address,section,class_id,field_id,session_id,
        student_email,student_password,student_status,picture)
        values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
        [$req->student_name, $req->student_fname, $req->student_contact, $req->father_contact,$req->student_cnic,
        $req->occupation,$req->office_contact,$req->office_address,$req->address,$req->section,$req->class_id,
        $req->field_id,$req->session ,$req->student_email,$pass ,$req->student_status,$imgname]);

        return redirect('/dashboard/student');
    }

    public function StudentEditStudent($id){

        $field = Db::select('select * from field');

        $student = Db::select('select * from student where student_id = ? ', [$id]);
        $class = Db::select('select * from class');
        $field = Db::select('select * from field');
        $sess = Db::select('select * from session');

        if ($student != null) {

            $student = $student[0];

        return view('DashboardView.student-edit-student', compact('student','class','field','sess'));
        }

        return redirect('/dashboard/student');
    }

    public function StudentUpdateStudent(Request $req, $id){
        $req->validate(
            [
             'student_name' => 'required | max:30',
            'student_fname' => 'required | max:30',
            'student_contact' => 'required | max:12',
            'father_contact' => 'required | max:12',
            'student_cnic' => 'required | max:15',
            'occupation' => 'required | max:20',
            'address' => 'required',
            'class_id' => 'required',
            'field_id' => 'required',
            'session' => 'required',
            'student_email' => 'required | max:50',
            'student_password' => 'required',
            'student_status' => 'required'
            ]
            );

            $student = Db::select('select * from student where student_id = ?', [$id]);

           if($student != null){

            if($req['student_pic']){

                $img = $req['student_pic'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/student_pic', $imgname);

            }

                else{
                    $imgname = $req->oldpic;
                }

                $pass = Crypt::encryptString($req->student_password);
            // $pass = md5($req->student_password);

            $student = DB::update('UPDATE student SET student_name =?,
            student_fname= ?,student_contact = ?,father_contact= ? ,student_cnic= ?,f_occupation= ?,
            office_contact= ?,office_address = ?, address = ?,section = ?,class_id = ?,field_id = ?,session_id = ?,
             student_email =?,student_password =?,student_status = ? ,picture = ? where student_id = ?',

            [$req->student_name, $req->student_fname, $req->student_contact,$req->father_contact, $req->student_cnic,
             $req->occupation,$req->office_contact,$req->office_address,$req->address,$req->section,$req->class_id, $req->field_id,
             $req->session ,$req->student_email,$pass,$req->student_status, $imgname ,$id ]);

             return redirect('/dashboard/student');
            }

            return redirect('/dashboard/student');

    }


    public function StudentDetailStudent($id){


        $student = Db::select('select * from student inner join class on class.class_id = student.class_id inner join field on field.field_id = student.field_id
        inner join session on student.session_id = session.session_id where student_id = ?',[$id]);
        $student = $student[0];
        return view('DashboardView.student-detail',compact('student'));
    }


    public function StudentDeleteStudent($id){
        $delete = Db::select('select * from student where student_id = ?',[$id]);

        if($delete != null){

            if($delete[0]->picture != null){
                unlink('public/student_pic/'.$delete[0]->picture);

            }

            Db::delete('delete from student where student_id = ?',[$id]);
         return redirect('/dashboard/student');

        }

        return redirect('/dashboard/student');

    }
}

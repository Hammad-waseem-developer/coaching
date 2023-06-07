<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TDetailsController extends Controller
{
    public function testdetail(){
        $student = Db::select('select std.studenttest_id,std.student_id,test.test_title ,std.status ,std.obtain_marks 
         ,test.test_marks , student.student_name  from student_test as std inner join student on student.student_id = std.student_id inner join test on test.test_id = std.test_id');
        
        return view('DashboardView.test-detail')->with('student',$student);    
    }

    public function student_marks_add($id){

        $data = Db::select('select * from test where test_id = ?',[$id]);

        session()->put('test_id',$data[0]->test_id);
        session()->put('total_marks',$data[0]->test_marks);

        return redirect('/dashboard/test-detail-add');
    }

    public function testdetailAdd(){
        $test_detail = Db::select('select * from student_test');

        if(session()->has('testfield')){
            $student = Db::select('select * from student where class_id = ? and field_id = ?',[session()->get('testclass'),session()->get('testfield')]);
        }
        else{
            
            $student = Db::select('select * from student');
        }

        $test = Db::select('select * from test');
        $class = Db::select('select * from class');
        $field = Db::select('select * from field');

        return view('DashboardView.test-detail-add', compact('test_detail','student','test','class','field'));
    }

    public function testsearching(Request $req){

        session()->put('testclass',$req->class);
        session()->put('testfield',$req->field);

        session()->flash('status','Searched Students List');

        return redirect('/dashboard/test-detail-add');
    }

    public function testdetailStore(Request $req){
        $req->validate(
            [
                'student_id' => 'required',
                'obtain_marks' => 'required',
                'status' => 'required',
                'date' => 'required'
            ]
            );

           $row =  Db::select('select * from student_test where student_id = ? and test_id = ?',[$req->student_id,$req->test_id]);

           if($row != null){

                session()->flash('status','Already Uploaded This Test Marks');

                return redirect('/dashboard/test-detail-add');

           }
           else{

               Db::insert('insert into student_test(student_id,test_id,obtain_marks,status,date)
               values(?,?,?,?,?)',
               [$req->student_id, $req->test_id,$req->obtain_marks,$req->status,$req->date]);
               
            }

            return redirect('/dashboard/test-detail');
       
    }

    public function testdetailEdit($id){
        
        $test_detail = Db::select('select * from student_test where studenttest_id = ? ', [$id]);
        $student = Db::select('select * from student');
        $test = Db::select('select * from test');
        $class = Db::select('select * from class');
        $field = Db::select('select * from field');

        if ($test_detail != null) {

            $test_detail = $test_detail[0];

        return view('DashboardView.test-detail-edit', compact('test_detail','student','test','field','class'));
        }
    }
    
    public function testdetailUpdate(Request $req, $id){
        $req->validate(
            [
                'student_id' => 'required',
                'obtain_marks' => 'required',
                'status' => 'required',
                'date' => 'required'
            ]
            );

        $test_detail = Db::select('select * from student_test where studenttest_id = ? ', [$id]);
            
        if($test_detail != null){
            $test_detail = DB::update('UPDATE student_test SET student_id = ? ,test_id = ?, 
            obtain_marks = ?, status = ? ,date = ? WHERE studenttest_id = ?',
            
            [$req->student_id, $req->test_id, $req->obtain_marks, $req->status, $req->date,$id]);

             return redirect('/dashboard/test-detail');
            }
            
            return redirect('/dashboard/test-detail');
    }

    public function testdetailDelete($id){
        $delete = Db::select('select * from student_test where studenttest_id = ?',[$id]);
        
        if($delete != null){

            Db::delete('delete from student_test where studenttest_id = ?',[$id]);
         return redirect('/dashboard/test-detail');
 
        }
 
        return redirect('/dashboard/test-detail');
    }
}

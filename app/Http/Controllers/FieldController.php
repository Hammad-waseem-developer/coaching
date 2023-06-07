<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FieldController extends Controller
{
    // Class
    public function Field(){

        $data = Db::select('select * from field');

        return view('DashboardView.field',compact('data'));
    }
// Classes
    public function FieldAddField(){

        $data = Db::select('select * from field');

        return view('DashboardView.field-add-field',compact('data'));
    }
    public function FieldStoreField(Request $req){
        $req->validate(
            [
                'field_name' => 'required | max:30',
            ]
            );

        Db::insert('insert into field(field_name) values(?)',[$req->field_name]);
        return redirect('/dashboard/field');
    }
// Classes
    public function FieldEditField($id){


        $field = Db::select('select * from field where field_id = ?',[$id]);

        if($field != null){


            return view('DashboardView.field-edit-field',compact('field'));
        }

        return redirect('/dashboard/field');

    }
    public function FieldUpdateField($id,Request $req){



        $field = Db::select('select * from field where field_id = ?',[$id]);

        if($field != null){

            Db::update('update field set field_name = ? where field_id = ?',[$req['field_name'],$id]);

        return redirect('/dashboard/field');

        }

        return redirect('/dashboard/field');


    }

    public function FieldDeleteField($id){


        $field = Db::select('select * from field where field_id = ?',[$id]);

        if($field != null){

            $row = DB::select('select * from alumnai where field_id = ? ',[$id]);
            $row1 = DB::select('select * from student where field_id = ? ',[$id]);
            if($row != null || $row1 != null){
                session()->flash('status','You can"t Delete this Field');
                return redirect('/dashboard/field');
            }

            Db::delete('delete from field where field_id = ?',[$id]);

        return redirect('/dashboard/field');

        }

        return redirect('/dashboard/field');


    }

}

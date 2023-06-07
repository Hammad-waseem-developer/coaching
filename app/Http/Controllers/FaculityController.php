<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FaculityController extends Controller
{
    public function Faculty()
    {

        $data = Db::select('select * from faculity');
        $faculity = Db::select('select * from faculity where faculity_id = ?',[session()->get('teacher_id')]);

        return view('DashboardView.faculity', compact('data','faculity'));
    }


    public function FacultyAddFaculty()
    {

        $field = Db::select('select * from field');

        return view('DashboardView.faculity-add-faculity', compact('field'));
    }
    public function FacultyStoreFaculty(Request $req)
    {

        $req->validate(
            [
                'faculity_name' => 'required | max:30',
                'faculity_contact' => 'required | max:12',
                'faculity_address' => 'max:200',
                'faculity_cnic' => 'required | max:15',
                'faculity_qualification' => 'required | max:50',
                'faculity_gender' => 'required',
                'faculity_joining' => 'required',
                'faculity_image' => 'mimes:png,jpg',
                'faculity_email' => 'required | max:50 | email',
            ]
        );

        if ($req['faculity_image']) {

            $img = $req['faculity_image'];
            $imgname = $img->getClientOriginalName();
            $imgname = Str::random(8) . "_" . $imgname;
            $img->move('public/faculityinfo', $imgname);
        }
        // else {
        //     $imgname = null;
        // }

        if ($req['faculity_cv']) {

            $cv = $req['faculity_cv'];
            $cvname = $cv->getClientOriginalName();
            $cvname = Str::random(8) . "_" . $cvname;
            $cv->move('public/faculityinfo', $cvname);
        }
        // else {
        //     $cvname = null;
        // }

        // $data = Db::select('select * from faculity order by faculity_id desc  limit 1');

        // if ($data != null) {
        //     $id = $data[0]->faculity_id;
        //     $id = ($id + 1) * 100;
        // } else {
        //     $id = 100;
        // }

        // $em =  explode("@", $req->faculity_email);
        // $fpass =  $em[0] . "-" . $id;

        // $fpass = Crypt::encrypt($fpass);



        $fpass = Crypt::encrypt(12345);
        // $fpass = md5(12345);

        Db::insert('insert into faculity(faculity_name,faculity_contact,faculity_contact2,faculity_address,
        faculity_cnic,faculity_qualification,experience,faculity_gender,faculity_joining,faculity_field,faculity_image,faculity_cv,
        faculity_email,faculity_password,faculity_status)
        values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
            $req->faculity_name, $req->faculity_contact, $req->faculity_contact2, $req->faculity_address,
            $req->faculity_cnic, $req->faculity_qualification, $req->experience, $req->faculity_gender, $req->faculity_joining,
            $req->field, $imgname,
            $cvname, $req->faculity_email, $fpass, 1
        ]);

        return redirect('/dashboard/faculty');
    }

    public function FacultyDetailFaculty($id)
    {
        $faculity = DB::select('SELECT * FROM faculity INNER JOIN field ON field.field_id = faculity.faculity_field WHERE faculity_id = ?',[$id]);
        return view('DashboardView.faculity-info',compact('faculity'));
    }

    public function FacultyEditFaculty($id)
    {
        $field = Db::select('select * from faculity');
        $faculity = Db::select('select * from faculity where faculity_id = ?', [$id]);
        $field = Db::select('select * from field');
        if ($faculity != null) {
            $faculity = $faculity[0];
            return view('DashboardView.faculity-edit-faculity', compact('faculity', 'field'));
        }
        return redirect('/dashboard/faculty');
    }
    public function FacultyUpdateFaculty(Request $req, $id)
    {
        $req->validate(
            [
                'faculity_name' => 'required | max:30',
                'faculity_contact' => 'required | max:12',
                'faculity_address' => 'max:200',
                'faculity_cnic' => 'required | max:15',
                'faculity_qualification' => 'required | max:50',
                'faculity_gender' => 'required',
                'faculity_joining' => 'required',
                // 'faculity_image' => 'mimes:png,jpg',
                'faculity_email' => 'required | max:50 | email',
            ]
        );

        $faculity = Db::select('select * from faculity where faculity_id = ?', [$id]);

        if ($faculity != null) {

            if ($req['faculity_image'] != null) {

                $img = $req['faculity_image'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/faculityinfo/', $imgname);
                unlink('public/faculityinfo/' . $req['oldimg']);
            } else {
                $imgname = $req['oldimg'];
            };
            if ($faculity != null) {

                if ($req['faculity_cv'] != null) {

                    $cv = $req['faculity_cv'];
                    $cvname = $cv->getClientOriginalName();
                    $cvname = Str::random(8) . "_" . $cvname;
                    $cv->move('public/faculityinfo/', $cvname);
                    unlink('public/faculityinfo/' . $req['oldcv']);
                } else {
                    $cvname = $req['oldcv'];
                }
            }
            Db::update(
                'update faculity set faculity_name = ? , faculity_contact = ?, faculity_address = ? , faculity_cnic = ? ,
                faculity_qualification = ? , faculity_gender = ? , faculity_joining = ? ,
                faculity_image  = ? , faculity_cv = ? , faculity_email = ?,
                faculity_password = ? , faculity_status = ? where faculity_id = ? ',
                [
                    $req['faculity_name'], $req['faculity_contact'], $req['faculity_address'], $req['faculity_cnic'],
                    $req['faculity_qualification'], $req['faculity_gender'], $req['faculity_joining'], $imgname, $cvname,
                    $req['faculity_email'], Crypt::encrypt($req['faculity_password']), $req['faculity_status'], $id
                ]
            );


            return redirect('/dashboard/faculty');
        }

        return redirect('/faculity');
    }
    public function FacultyDeleteFaculty($id)
    {

        $delete = Db::select('select * from faculity where faculity_id = ?', [$id]);

        if ($delete != null) {

            unlink('public/faculityinfo/' . $delete[0]->faculity_image);
            unlink('public/faculityinfo/' . $delete[0]->faculity_cv);

            Db::delete('delete from faculity where faculity_id = ?', [$id]);
            return redirect('/dashboard/faculty');
        }

        return redirect('/dashboard/faculty');
    }
}

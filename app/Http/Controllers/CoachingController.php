<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CoachingController extends Controller
{

    // coaching
        public function Coaching(){
            $detail = Db::select('SELECT * FROM coaching');
            return view('DashboardView.coaching',compact('detail'));
        }
    // Coaching
        public function CoachingAddCoaching(){
            return view('DashboardView.add_coaching');
        }
        public function CoachingAddCoachingStore(Request $req){

            $req->validate(
            [
                'coaching_name' => 'required | max:100',
                'coaching_email' => 'required | max:40 | email',
                'coaching_contact' => 'required | max:11',
                'coaching_web' => 'required | max:50 | url',
                'coaching_address' => 'required | max:200',
                'coaching_logo' => 'required',
            ]
            );

            $img = $req['coaching_logo'];
            $imgname = $img->getClientOriginalName();
            $imgname = Str::random(8) . "_" . $imgname;
            $img->move('public/coachinginfo',$imgname);

            Db::insert('insert into coaching(coaching_name,coaching_email,coaching_contact,coaching_web,coaching_address,coaching_logo)
            values(?,?,?,?,?,?)',[$req->coaching_name,$req->coaching_email,$req->coaching_contact,$req->coaching_web,$req->coaching_address,$imgname]);

            return redirect('/dashboard/coaching');


        }
    // Coaching
        public function CoachingEditCoaching($id){

            $data = Db::select('select * from coaching where coaching_id = ?',[$id]);

            if($data != null){
                $data = $data[0];
                return view('DashboardView.edit_coaching',compact('data'));
            }
            return redirect('/coaching');
        }

        public function CoachingUpdateCoaching(Request $req,$id){

            $data = Db::select('select * from coaching where coaching_id = ?',[$id]);

            if($data != null){
                $validatedData = $req->validate([
                    'coaching_name' => 'required|string',
                    'coaching_email' => 'required|email',
                    'coaching_contact' => 'required|string',
                    'coaching_web' => 'nullable|url',
                    'coaching_address' => 'nullable|string',
                ]);

                if($req['coaching_logo'] != null){

                    $img = $req['coaching_logo'];
                    $imgname = $img->getClientOriginalName();
                    $imgname = Str::random(8) . "_" . $imgname;
                    $img->move('public/coachinginfo',$imgname);

                    unlink('public/coachinginfo/'.$req['oldlogo']);

                }
                else{
                    $imgname = $req['oldlogo'];
                }


            Db::update('update coaching set coaching_name =? , coaching_email = ?, coaching_contact = ? , 	coaching_web = ? , coaching_address = ? , coaching_logo = ?  where coaching_id = ? ',
            [$req['coaching_name'], $req['coaching_email'], $req['coaching_contact'],$req['coaching_web'],
            $req['coaching_address'],$imgname,$id]);

            return redirect('/dashboard/coaching');

            }

            return redirect('/coaching');



        }

        public function CoachingDeleteCoaching($id){

           $delete = Db::select('select * from coaching where coaching_id = ?',[$id]);

           if($delete != null){

            unlink('public/coachinginfo/'.$delete[0]->coaching_logo);

               Db::delete('delete from coaching where coaching_id = ?',[$id]);
            return redirect('/coaching');

           }

           return redirect('/coaching');


        }
}

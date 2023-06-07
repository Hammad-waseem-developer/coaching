<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AnnouncementController extends Controller
{
    public function Announcement(){

        $data = Db::select('select * from announcement');

        return view('DashboardView.announcement',compact('data'));
    }
    public function AnnouncementAddAnnouncement(){

        $data = Db::select('select * from announcement');

        return view('DashboardView.announcement-add-announcement',compact('data'));
    }
    public function AnnouncementStoreAnnouncement(Request $req){
        $req->validate(
            [
                'announcement_name' => 'required | max:30',
                'announcement_desc' => 'required | max:300',
                'announcement_date' => 'required',
            ]
            );

    if($req['announcement_image']){

        $img = $req['announcement_image'];
        $imgname = $img->getClientOriginalName();
        $imgname = Str::random(8) . "_" . $imgname;
        $img->move('public/announcementinfo',$imgname);
    }
    else{
        $imgname = null;
    }

        Db::insert('insert into announcement(announcement_name,announcement_desc,announcement_date,announcement_image)
        values(?,?,?,?)',[$req->announcement_name,$req->announcement_desc,$req->announcement_date,$imgname]);
        return redirect('/dashboard/announcement');
    }
    public function AnnouncementEditAnnouncement($id){

        $data = Db::select('select * from announcement where announcement_id = ?',[$id]);

        if($data != null){

            $data = $data[0];


            return view('DashboardView.announcement-edit-announcement',compact('data'));
        }
        return redirect('/dashboard/announcement');

    }
    public function AnnouncementUpdateAnnouncement(Request $req,$id){

        $req->validate(
            [
                'announcement_name' => 'required | max:30',
                'announcement_desc' => 'required | max:300',
                'announcement_date' => 'required',
            ]
            );


        $data = Db::select('select * from announcement where announcement_id = ?',[$id]);

        if($data != null){

            if($req['announcement_image'] != null){

                $img = $req['announcement_image'];
                $imgname = $img->getClientOriginalName();
                $imgname = Str::random(8) . "_" . $imgname;
                $img->move('public/announcementinfo',$imgname);
                unlink('public/announcementinfo/'.$req['oldimage']);

            }
            else{
                $imgname = $req['oldimage'];
            }
            Db::update('update announcement set announcement_name =? , announcement_desc = ?,
            announcement_date = ? , announcement_image = ? where
            announcement_id = ? ',
        [$req['announcement_name'], $req['announcement_desc'], $req['announcement_date'], $imgname, $id]);


        return redirect('/dashboard/announcement');


        return redirect('/dashboard/announcement');
    }
}


public function AnnouncementDeleteAnnouncement($id){

        $delete = Db::select('select * from announcement where announcement_id = ?',[$id]);

        if($delete != null){

          unlink('public/announcementinfo/'.$delete[0]->announcement_image);

            Db::delete('delete from announcement where announcement_id = ?',[$id]);
         return redirect('/dashboard/announcement');

        }

        return redirect('/dashboard/announcement');


     }


}

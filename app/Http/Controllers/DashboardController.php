<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $student = DB::select("select * from student");
        $faculity = DB::select("select * from faculity");
        $test = DB::select("select * from test");
        $announcement = DB::select("select * from announcement");
        $student = count($student);
        $faculity = count($faculity);
        $test = count($test);
        $announcement = count($announcement);
        return view('DashboardView.index', compact('student','faculity','test','announcement'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MoodleController extends Controller
{
    //
    public function list()
    {
        $students = DB::table( 'mdl_course_modules_completion' )
        ->groupBy('userid')
        ->join('mdl_user', 'mdl_course_modules_completion.userid', '=', 'mdl_user.id')
        ->select('userid','firstname','middlename','lastname','email','phone2','address','city', \DB::raw('count(*) as count'))
        ->get();
        return $students;
    }
}

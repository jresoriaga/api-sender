<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moodle;
class MoodleController extends Controller
{
    //
    public function list()
    {
        $list =  Moodle::where('id','4')->get();
        return $list;
    }
}

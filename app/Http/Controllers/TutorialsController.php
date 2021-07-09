<?php

namespace App\Http\Controllers;

use App\Models\Tutorials;
use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    public function addVideos()
    {
        $tuts = new Tutorials;
        $tuts->title = "Introduction to Laravel 8 models";
        $tuts->video_length = 10.10;
        $tuts->views = 10000.00;
        $tuts->save();
        return view('tutorials')->with(['code' => 1, 'msg' => 'Success']);
    }
    public function showVideos()
    {
        return view('videos')->with(['data' => Tutorials::all()]);
    }
}

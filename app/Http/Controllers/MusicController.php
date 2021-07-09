<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function addMusic()
    {
        $music = new Music;
        $music->title = "Jeniffer my babe";
        $music->artist = "Rayvanny";
        $music->music_length = 10.10;
        $music->views = 100000.00;
        $music->save();
        return view('music')->with(['code' => 1, 'msg' => 'Success']);
    }
    public function viewMusic()
    {
        return view('viewmusic')->with(['data' => Music::all()]);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Konten;
use App\Models\Video;
use LaravelVideoEmbed;
use Illuminate\Http\Request;

class DisplaySiswaController extends Controller
{
    public function index()
    {
        $data   = Video::orderBy('id','desc')->first();
        $url    = $data->video;
        $whitelist   = ['Youtube','Vimeo'];
        $params = [
            'autoplay' => 1,
            'loop' => 1
          ];

$attributes = [
  'height' => 100,
  'width' => 200,
];
        $link   = LaravelVideoEmbed::parse($url, ['YouTube'], $params, $attributes);
        $konten = Konten::orderBy('id','desc')->limit(3)->get();
        // return $link;
        return view('displayAdmin.siswa.index',compact('konten','link'));
    }
}

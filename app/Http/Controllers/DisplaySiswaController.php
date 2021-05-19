<?php

namespace App\Http\Controllers;
use App\Models\Konten;
use Illuminate\Http\Request;

class DisplaySiswaController extends Controller
{
    public function index()
    {
        $konten = Konten::all();
        return view('displayAdmin.siswa.index',compact('konten'));
    }
}

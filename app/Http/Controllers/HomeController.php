<?php

namespace App\Http\Controllers;
use App\Models\Ucapan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ucapan = Ucapan::inRandomOrder()->first();
        return view('displayAdmin.loket.index',compact('ucapan'));
    }
}

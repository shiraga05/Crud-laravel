<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *

    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {
        $datas = Siswa::get();
        return view('dashboard.siswa.index', compact('datas'));
    }
}

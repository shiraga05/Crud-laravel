<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class SiswaController extends Controller
{
    public function index()
    {
        $datas = Siswa::get();
        return view('dashboard.siswa.index', compact('datas'));
    }
    
}

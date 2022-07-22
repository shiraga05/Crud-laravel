<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    public function index()
    {
        $datas = Siswa::get();
        return view('dashboard.siswa.index', compact('datas'));
    }
    public function create()
    {
        return view('dashboard.guru.create');
    }
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        Siswa::insert($data);
        return redirect('/guru');
    }

    public function show($id)
    {
        $datas = Siswa::where('id', $id)->first();
        return view('dashboard.guru.show', compact('datas'));
    }


    public function destroy($id)
    {
        $item = Siswa::where('id', $id)->first();
        $item->delete();
        return redirect('/guru');
    }
    public function update(Request $request, $id)
    {
        $item = Siswa::where('id', $id)->first();
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/guru');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function postbiodata(Request $request)
    {
        DB::table('detail_profile')->insert([
        'nama_mhs' => $request->nama,
        'alamat' => $request->alamat,
        'ttl' => $request->ttl,
        'status' => $request->status
        ]);
        $data = [
        'nama_mhs' => $request->nama,
        'alamat' => $request->alamat,
        'ttl' => $request->ttl,
        'status' => $request->status
        ];

        return redirect()->route('mahasiswas');
    }
}
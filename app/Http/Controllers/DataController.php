<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailProfile;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function showData()
    {
        // Mengambil data mahasiswa dari database
        $mahasiswas = DB::table('detail_profile')->get();

        // Mengirim data mahasiswa ke view 'mahasiswa'
        return view('mahasiswa', ['mahasiswas' => $mahasiswas]);
    }

    public function formEdit($id_mhs) {
        $mahasiswas = DetailProfile::select('*')->where('id_mhs', $id_mhs)->get();
        return view('edit', [
            'mahasiswas' => $mahasiswas
        ]);
    }
    
    public function fungsiEdit(Request $request) {
        $mhs = DetailProfile::where('id_mhs', $request->id_mhs)->update([
        'nama_mhs' => $request->nama_mhs,
        'alamat' => $request->alamat,
        'ttl' => $request->ttl,
        'status' => $request->status,
    ]);
        return redirect()->route('mahasiswas');
    }

    public function delete($id_mhs) {
        $mahasiswa = DetailProfile::where('id_mhs', $id_mhs)->delete();
        return redirect()->route('mahasiswas');
    }
}
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class regisController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function actionRegister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        // Set flash message untuk pendaftaran berhasil
        Session::flash('success', 'Pendaftaran berhasil! Silakan masuk.');
        // Lakukan redirect ke halaman login
        return redirect('/');
    }
}

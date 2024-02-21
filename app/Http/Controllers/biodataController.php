<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biodataController extends Controller
{
    public function index() {
        return view('biodata');
    }
}
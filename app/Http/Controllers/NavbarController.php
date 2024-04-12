<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function poli()
    {
        $layanan = Layanan::all();
        return view('menu.home', compact('layanan'));
    }
    public function viewpoli(Layanan $layanan)
    {
        return view('menu.layanan', compact('layanan'));
    }
}

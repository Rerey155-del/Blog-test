<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $packages = Package::where('category', 'media_sosial')->get(); // Ambil data paket Media Sosial
        
        return view('layout.homepage', compact('packages')); // Pastikan variabel dikirim ke view
    }
}



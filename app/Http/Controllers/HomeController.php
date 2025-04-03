<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Video;

class HomeController extends Controller
{


    public function index()
    {

        $videos = Video::all(); // Ambil semua data dari tabel videos

        // Ambil packages berdasarkan kategori
        $mediaSosialPackages = Package::where('category', 'Media Sosial')->get();
        $desainPackages = Package::where('category', 'Desain')->get();
        
        // Pastikan semua variabel di-compact untuk dikirim ke view
        return view('layout.homepage', compact( 'videos','mediaSosialPackages', 'desainPackages'));
    }
}
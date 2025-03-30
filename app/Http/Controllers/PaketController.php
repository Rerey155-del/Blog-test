<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package; // ✅ Import Model

class PaketController extends Controller
{
    public function showPackage1()
    {
        $package = Package::where('name', 'Paket Normal')->first();

        if (!$package) {
            return abort(404, "Paket tidak ditemukan!"); // Jika tidak ditemukan, tampilkan error
        }

        return view('components.package1', compact('package'));
    }
}
    
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package; // ✅ Import Model

class PaketController extends Controller
{
    public function showPackage1()
    {
        $package = Package::where('name', 'Paket Normal')->first();
        return view('components.package1page', compact('package'));
    }
}
    
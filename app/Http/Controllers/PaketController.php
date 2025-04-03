<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PaketController extends Controller
{
    public function showPackagesByCategory($category)
    {
        // Ambil semua paket berdasarkan kategori
        $packages = Package::where('category', $category)->get();

        if ($packages->isEmpty()) {
            return abort(404, 'Paket tidak ditemukan');
        }

        // Pilih view berdasarkan kategori
        switch ($category) {
            case 'Media Sosial':
                return view('components.package_media_sosial', compact('packages'));
            case 'Desain':
                return view('components.package_desain', compact('packages'));
            default:
                return abort(404, 'Kategori tidak ditemukan');
        }
    }

     // Fungsi khusus untuk halaman desain
     public function showDesainPackages()
     {
         $packages = Package::where('category', 'Desain')->get();
         
         if ($packages->isEmpty()) {
             return abort(404, 'Paket desain tidak ditemukan');
         }
         
         return view('components.package_desain', compact('packages'));
     }

     // Fungsi khusus untuk halaman media sosial
    public function showMediaSosialPackages()
    {
        $packages = Package::where('category', 'Media Sosial')->get();
        
        if ($packages->isEmpty()) {
            return abort(404, 'Paket media sosial tidak ditemukan');
        }
        
        return view('components.package_media_sosial', compact('packages'));
    }
}


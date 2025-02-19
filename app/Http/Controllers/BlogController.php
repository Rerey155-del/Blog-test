<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    // Menampilkan semua data post
    public function index()
    {
        $blog = Blog::all(); // Mengambil semua data dari tabel blog
        return view('blog', compact('blogs'));
    }

}

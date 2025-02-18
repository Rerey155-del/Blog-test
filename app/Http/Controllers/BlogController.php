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

    // Menampilkan form tambah post
    public function create()
    {
        return view('blog_create');
    }

    // Menyimpan post baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Proses upload gambar
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->store('images', 'public');
        }

        Blog::create([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body,
            'image' => $imageName, // Simpan nama file gambar
        ]);

        return redirect()->route('blogs.index')->with('success', 'blog berhasil dibuat!');
    }
}

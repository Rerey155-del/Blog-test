<?php

use App\Models\Blog;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome', [
        'nama' => "Reyhan Maulana",
        'title' => "Ini halaman Home yaa",
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => "Ini halaman about yaa"]);
});

// ======= INI ADALAH CONTOH ROUTE DENGAN MENGGUNAKAN ARRAY ( Data Dummy ) =======
// Route::get('/blog', function () {
//     $posts = [
//         [
//             'id' => 1,
//             'title' => 'Judul Artikel 1',
//             'author' => 'Reyhan Maulana',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
//         ],
//         [
//             'id' => 2,
//             'title' => 'Judul Artikel 2',
//             'author' => 'Nadira Aulia Haq',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
//         ]
//     ];

//     return view('blog', [
//         'title' => 'ini adalah bagian Blog',
//         'posts' => $posts
//     ]);
// });

// ========= Route untuk menampilkan semua post dari database ========
Route::get('/blog', function () {
    $blogs = Blog::all();  // Mengambil semua data blog
    return view('blog', compact('blogs'));
});



// ======= INI ADALAH CONTOH ROUTE DENGAN MENGGUNAKAN ARRAY (data dummy) =======
// Route::get('/post/{id}', function ($id) {
//     $posts = [
//         [
//             'id' => 1,
//             'title' => 'Judul Artikel 1',
//             'author' => 'Reyhan Maulana',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
//         ],
//         [
//             'id' => 2,
//             'title' => 'Judul Artikel 2',
//             'author' => 'Nadira Aulia Haq',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
//         ]
//     ];

//     // Cari post berdasarkan ID
//     $post = collect($posts)->firstWhere('id', $id);

//     // Jika tidak ditemukan, tampilkan halaman 404
//     if (!$post) {
//         abort(404, 'Post tidak ditemukan');
//     }

//     return view('post', [
//         'title' => $post['title'],
//         'post' => $post
//     ]);
// });

// Route untuk menampilkan single blog dari database 
Route::get('/blog/{id}', function ($id) {
    $blog = Blog::find($id);

    if (!$blog) {
        abort(404, 'Blog tidak ditemukan');
    }

    return view('post', compact('blog'));  // Ganti 'blog' menjadi 'post'
});





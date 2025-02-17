<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'nama' => "Reyhan Maulana",
        'title' => "Ini halaman Home yaa",
        
    ]);
});

Route::get('/about', function () {
    return view('about',['title' => "Ini halaman about yaa"]);
});

// ======= INI ADALAH CONTOH ROUTE DENGAN MENGGUNAKAN ARRAY =======
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

Route::get('/blog', function () {
    $posts = Blog::all();
    return view('blog', compact('posts'));
});



Route::get('/about', function () {
    return view('about',['title' => "Ini halaman about yaa"]);
});

// ======= INI ADALAH CONTOH ROUTE DENGAN MENGGUNAKAN ARRAY =======
Route::get('/post/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Reyhan Maulana',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Nadira Aulia Haq',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]
    ];

    // Cari post berdasarkan ID
    $post = collect($posts)->firstWhere('id', $id);

    // Jika tidak ditemukan, tampilkan halaman 404
    if (!$post) {
        abort(404, 'Post tidak ditemukan');
    }

    return view('post', [
        'title' => $post['title'],
        'post' => $post
    ]);
});


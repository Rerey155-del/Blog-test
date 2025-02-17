<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'Judul Artikel 1',
            'author' => 'Reyhan Maulana',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]);

        Blog::create([
            'title' => 'Judul Artikel 2',
            'author' => 'Nadira Aulia Haq',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
        ]);
    }
}

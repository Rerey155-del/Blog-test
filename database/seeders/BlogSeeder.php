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
            'image' => 'https://fahum.umsu.ac.id/blog/wp-content/uploads/2025/01/apa-itu-ai-berikut-pengertian-kelebihan-kekurangan-dan-penerapannya-dalam-kehidupan.jpg',
           
            'title' => 'Inovasi AI Terbaru: Chatbot Generasi Baru Makin Cerdas',
            'date' => '26 Janari 2021',
            'category' => 'Teknologi',
            'author' => 'Reyhan Maulana',
            'content' => 'Perkembangan kecerdasan buatan (AI) semakin pesat dengan hadirnya chatbot generasi terbaru yang mampu berkomunikasi layaknya manusia. Teknologi ini dikembangkan dengan model bahasa canggih yang dapat memahami konteks percakapan secara lebih akurat.'
        ]);
        Blog::create([
            'image' => 'https://asset.kompas.com/crops/bjuP5CM77JsFYwTQ6AgA3jAi7_8=/0x0:0x0/1200x800/data/photo/2022/01/01/61d06bde62306.jpg',
            'date' => '17 Februari 2025',
            'title' => 'Timnas Indonesia Lolos ke Final Piala Asia 2025',
            
            'category' => 'Olahraga',
            'author' => 'Reyhan Maulana',
            'content' => ' Timnas Indonesia berhasil melaju ke final Piala Asia setelah mengalahkan Jepang dengan skor 2-1. Kemenangan ini membawa harapan baru bagi sepak bola Indonesia di kancah internasional.'
        ]);
        Blog::create([
            'image' => 'https://c.files.bbci.co.uk/1654A/production/_131666419_banner_4_1920_.png',
            'title' => 'Pemilu 2025: Kandidat Unggulan Mulai Kampanye Besar-besaran',
            'date' => '16 Februari 2024',
            'category' => 'Politik',
            'author' => 'Reyhan Maulana',
            'content' => 'Menjelang pemilu 2025, para kandidat mulai aktif menggelar kampanye di berbagai daerah. Debat calon presiden pertama akan digelar pekan depan untuk mengupas visi dan misi mereka..'
        ]);
        Blog::create([
            'image' => 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/14090452/Ketahui-X-Manfaat-Meditasi-untuk-Kesehatan-Mental.jpg',
            'title' => 'Manfaat Meditasi bagi Kesehatan Mental yang Perlu Anda Ketahui',
            'date' => '15 Februari 2025',
            'category' => 'Kesehatan',
            'author' => 'Dr. Ahmad Fauzi',
            'content' => 'Meditasi telah terbukti membantu mengurangi stres, meningkatkan fokus, dan memperbaiki kualitas tidur. Banyak penelitian menunjukkan bahwa praktik ini dapat mengurangi risiko gangguan mental seperti depresi dan kecemasan.'
        ]);
        Blog::create([
            'image' => 'https://img2.beritasatu.com/cache/investor/480x310-3/2024/08/1724375270-741x458.webp',
            'title' => 'Harga Emas Naik Tajam, Investor Beralih ke Aset Aman',
            'date' => '13 Februari 2025',
            'category' => 'Ekonomi',
            'author' => 'Rina Wijaya',
            'content' => 'Ketidakstabilan pasar global mendorong harga emas melonjak hingga 5% dalam sepekan terakhir. Para investor kini mulai mengalihkan aset mereka ke instrumen yang lebih aman sebagai langkah mitigasi risiko.'
        ]);
        Blog::create([
            'image' => 'https://m.media-amazon.com/images/M/MV5BMjQ0MmQ4NDktZWQ1MS00ZThiLWFiOWUtYmJlZWEwYWIzYzk5XkEyXkFqcGdeQWFsZWxvZw@@._V1_.jpg',
            'title' => 'Film Sci-Fi Terbaru ‘Guardians of the Galaxy 2’ Pecahkan Rekor Box Office',
            'date' => '13 Februari 2025',
            'category' => ' Hiburan',
            'author' => 'Budi Santoso',
            'content' => 'Film fiksi ilmiah terbaru, ‘Guardians of the Galaxy 2’, berhasil meraih pendapatan tertinggi di minggu pertamanya. Dengan efek visual yang memukau dan alur cerita yang menarik, film ini menjadi favorit di berbagai negara.'
        ]);
        

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    public function run()
    {
        Package::insert([
            // Layanan Media Sosial
            [
                'name' => 'Paket Normal',
                'category' => 'Media Sosial',
                'price' => '500rb',
                'description' => 'Kalender Konten, 8 Feeds (Foto), 3 Reels (Maks. 30 Detik), 4 Stories, 1 Platform Medsos(Opsional)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paket Silver',
                'category' => 'Media Sosial',
                'price' => '999rb',
                'description' => 'Kalender Konten, 14 Feeds (Foto), 6 Reels (Maks.30 Detik), 4 Stories, 2 Platform Medsos(Opsional)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paket Premium',
                'category' => 'Media Sosial',
                'price' => '1.5jt',
                'description' => 'Kalender Konten, 16 Feeds (Foto), 8 Reels (Maks.30 Detik), 6 Stories,1 Platform Medsos(Opsional)',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Layanan Desain
            [
                'name' => 'Paket Normal',
                'category' => 'Desain',
                'price' => '350rb',
                'description' => '2 Desain Logo, 5 Postingan Feed, 2 Story Highlight, 1 Banner Promo (Flyer/Poster)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paket Silver',
                'category' => 'Desain',
                'price' => '750rb',
                'description' => '3 Desain Logo, 8 Postingan Feed, Brosur, Poster',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paket Premium',
                'category' => 'Desain',
                'price' => '1.2jt',
                'description' => '5 Desain Logo, 12 Postingan Feed, 6 Story Highlight, 3 Banner Promo,1 Cover Facebook/LinkedIn',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

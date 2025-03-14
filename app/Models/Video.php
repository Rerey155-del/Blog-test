<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos'; // Sesuaikan dengan nama tabel di database

    protected $fillable = ['title', 'video_path'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    // Menambahkan kolom yang boleh diisi
    protected $fillable = ['nama', 'email', 'mata_kuliah'];
}
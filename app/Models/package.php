<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages'; // Sesuaikan dengan nama tabel di database
    protected $fillable = ['name', 'description', 'price'];
}



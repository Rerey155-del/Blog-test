<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class package extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'description',
    ];

    public $timestamps = true;

}

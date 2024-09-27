<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Especifica los campos que se pueden llenar masivamente
    protected $fillable = [
        'title',
        'author',
        'description',
    ];
}

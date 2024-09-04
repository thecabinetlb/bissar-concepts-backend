<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EditorialCarouselSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'images',
        'description',
        'is_featured'
    ];
    protected $casts = [
        'images' => 'array'
    ];
}

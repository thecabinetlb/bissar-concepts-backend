<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionBehindTheBrandImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'is_featured'
    ];
    
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}

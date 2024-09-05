<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'architects',
        'year',
        'location',
        'description',
        'banner',
        'thumbnail',
        'images',
        'client',
        'slug',
        'type_id'
    ];
    protected $casts = [
        'architects' => 'array',
        'images' => 'array'
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->attributes['banner']);
    }
}

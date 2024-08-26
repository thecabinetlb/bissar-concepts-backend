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
        'slug',
        'description',
        'location',
        'year',
        'architects',
        'client',
        'images',
        'thumbnail',
        'banner',
        'category',
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
}

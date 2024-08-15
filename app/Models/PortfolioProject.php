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
        'location',
        'year',
        'architects',
        'client',
        'images',
        'thumbnail',
        'banner',
        'completion_date',
        'category_id',
        'type_id'
    ];
    protected $casts = [
        'architects' => 'array',
        'images' => 'array'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}

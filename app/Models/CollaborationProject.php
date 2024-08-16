<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationProject extends Model
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

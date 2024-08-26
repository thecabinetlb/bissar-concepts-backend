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
        'categry',
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

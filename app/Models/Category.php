<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
    ];
    public function portfolioProjects()
    {
        return $this->hasMany(PortfolioProject::class);
    }
    public function collaborationProjects()
    {
        return $this->hasMany(CollaborationProject::class);
    }
}

<?php

namespace App\Http\Controllers\API\V1;

namespace App\Http\Controllers;

use App\Models\StylesSection;
use Illuminate\Http\Request;

class StylesSectionController extends Controller
{
    public function index()
    {
        return StylesSection::all();
    }
    public function getFeatured()
    {
        $featuredStyles= StylesSection::featured()->get();
        return response()->json($featuredStyles);
    }
}

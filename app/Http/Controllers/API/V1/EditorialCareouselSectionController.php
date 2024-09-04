<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\EditorialCarouselSection;
use Illuminate\Http\Request;

class EditorialCareouselSectionController extends Controller
{
    public function index()
    {
        return EditorialCarouselSection::all();
    }
    public function getFeatured()
    {
        $featuredImages = EditorialCarouselSection::featured()->get();
        return response()->json($featuredImages);
    }
}

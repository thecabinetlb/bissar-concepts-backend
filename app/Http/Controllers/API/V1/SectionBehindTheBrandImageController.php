<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\SectionBehindTheBrandImage;
use Illuminate\Http\Request;

class SectionBehindTheBrandImageController extends Controller
{
    public function index()
    {
        return SectionBehindTheBrandImage::all();
    }
    public function getFeatured()
    {
        $featuredImage = SectionBehindTheBrandImage::featured()->get();
        return response()->json($featuredImage);
    }
}

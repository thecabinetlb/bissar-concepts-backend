<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\PortfolioBanner;
use Illuminate\Http\Request;

class PortfolioBannerController extends Controller
{
    public function index()
    {
        return PortfolioBanner::all();
    }
    public function getFeatured()
    {
        $featuredImage = PortfolioBanner::featured()->get();
        return response()->json($featuredImage);
    }
}

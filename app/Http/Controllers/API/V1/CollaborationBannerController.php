<?php

namespace App\Http\Controllers;

use App\Models\CollaborationBanner;
use App\Models\PortfolioBanner;
use Illuminate\Http\Request;

class CollaborationBannerController extends Controller
{
    public function index()
    {
        return CollaborationBanner::all();
    }
    public function getFeatured()
    {
        $featuredImage = CollaborationBanner::featured()->get();
        return response()->json($featuredImage);
    }
}

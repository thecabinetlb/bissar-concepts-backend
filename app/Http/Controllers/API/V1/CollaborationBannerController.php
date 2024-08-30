<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\CollaborationBanner;
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

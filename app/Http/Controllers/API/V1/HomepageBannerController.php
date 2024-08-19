<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\HomepageBanner;
use Illuminate\Http\Request;

class HomepageBannerController extends Controller
{
    public function index()
    {
        return HomepageBanner::all();
    }
    public function getFeatured()
    {
        $featuredImage = HomepageBanner::featured()->get();
        return response()->json($featuredImage);
    }
}

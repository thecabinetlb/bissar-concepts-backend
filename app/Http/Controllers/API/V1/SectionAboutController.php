<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\SectionAbout;
use Illuminate\Http\Request;

class SectionAboutController extends Controller
{
    public function index()
    {
        return SectionAbout::all();
    }
    public function getFeatured()
    {
        $featuredAbout = SectionAbout::featured()->get();
        return response()->json($featuredAbout);
    }
}

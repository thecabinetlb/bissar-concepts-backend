<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\SectionBehindTheBrandAccordion;
use Illuminate\Http\Request;

class SectionBehindTheBrandAccordionController extends Controller
{
    public function index()
    {
        return SectionBehindTheBrandAccordion::all();
    }
    public function getFeatured()
    {
        $featuredAccordionTopic= SectionBehindTheBrandAccordion::featured()->get();
        return response()->json($featuredAccordionTopic);
    }
}

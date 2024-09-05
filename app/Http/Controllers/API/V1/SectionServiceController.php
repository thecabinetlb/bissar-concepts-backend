<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\SectionService;
use Illuminate\Http\Request;

class SectionServiceController extends Controller
{
    public function index()
    {
        return SectionService::all();
    }
    public function getFeatured()
    {
        $featuredServices= SectionService::featured()->get();
        return response()->json($featuredServices);
    }}

<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\SectionStyles;
use Illuminate\Http\Request;

class SectionStylesController extends Controller
{
    public function index()
    {
        return SectionStyles::all();
    }
    public function getFeatured()
    {
        $featuredStyles= SectionStyles::featured()->get();
        return response()->json($featuredStyles);
    }}

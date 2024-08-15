<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\PortfolioProject;
use App\Models\Type;
use Illuminate\Http\Request;

class PortfolioProjectController extends Controller
{
    public function index()
    {
        return PortfolioProject::all();
    }

    public function getBySlug($slug)
    {
        $project = PortfolioProject::where('slug', $slug)->get();
        return response()->json($project);
    }

    public function getByType(Type $type)
    {
        $projects = $type->portfolioProjects()->get();
        return response()->json($projects);    
    }
}

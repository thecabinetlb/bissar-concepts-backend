<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\CollaborationProject;
use App\Models\Type;
use Illuminate\Http\Request;

class CollaborationProjectController extends Controller
{
    public function index()
    {
        return CollaborationProject::all();
    }

    public function getBySlug($slug)
    {
        $project = CollaborationProject::where('slug', $slug)->get();
        return response()->json($project);
    }

    public function getByType(Type $type)
    {
        $projects = $type->collaborationProjects()->get();
        return response()->json($projects);    
    }
}

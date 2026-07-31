<?php

namespace App\Http\Controllers;

use App\Data\ProjectsData;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = ProjectsData::getAll();
        return view('pages.projects', compact('projects'));
    }

    public function show(string $slug)
    {
        $project = ProjectsData::getBySlug($slug);

        if (!$project) {
            abort(404);
        }

        $allProjects = ProjectsData::getAll();
        $relatedProjects = array_values(array_filter($allProjects, fn($p) => $p['slug'] !== $slug));
        
        // Take 3 related projects
        $relatedProjects = array_slice($relatedProjects, 0, 3);

        return view('pages.project-detail', compact('project', 'relatedProjects'));
    }
}

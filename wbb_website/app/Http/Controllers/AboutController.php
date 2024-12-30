<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\AboutFunction;
use App\Models\AboutVisionMission;
use App\Models\BoardMember;
use App\Models\Stakeholder;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Retrieve data from all tables
        $aboutPage = AboutPage::first(); // About Page content
        $aboutFunctions = AboutFunction::all(); // About Functions content
        $aboutVisionMission = AboutVisionMission::first(); // Vision and Mission content
        $boardMembers = BoardMember::all(); // Board Members data
        $stakeholders = Stakeholder::all(); // Stakeholders data

        // Pass data to the view
        return view('about', compact(
            'aboutPage',
            'aboutFunctions',
            'aboutVisionMission',
            'boardMembers',
            'stakeholders'
        ));
    }
}

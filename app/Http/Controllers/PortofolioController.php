<?php

namespace App\Http\Controllers;

use app\Http\Controllers\Controller;

class PortofolioController extends Controller
{
    public function index()
    {
        $skills = [
            'Sharpshooting',
            'Tracking',
            'Horseback Combat',
            'Survival',
            'Negotiation',
        ];

        $mission = [
            ['title' => 'Rescue John Marston', 'year' => 1899],
            ['title' => 'Rob a Train', 'year' => 1900],
            ['title' => 'Defend the Camp', 'year' => 1901],
            ['title' => 'Final Showdown', 'year' => 1907],
        ];

        return view('portofolio.index', compact('skills', 'mission'));
    }
}
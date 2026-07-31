<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $timeline = [
            [
                'year' => '2024 - PRESENT',
                'role' => 'Senior Freelance Video Editor & Finishing Colorist',
                'company' => 'Self-Employed / Global Creative Studios',
                'description' => 'Editing high-budget commercial campaigns, music videos, and film trailers for clients including Porsche, A24, Sony Music, and Red Bull.'
            ],
            [
                'year' => '2021 - 2024',
                'role' => 'Lead Video Editor & Motion Designer',
                'company' => 'Aether Creative Agency, Los Angeles',
                'description' => 'Led a post-production team of 6 editors, compositors, and sound engineers for international luxury brand campaigns and digital broadcasts.'
            ],
            [
                'year' => '2019 - 2021',
                'role' => 'Assistant Editor & Junior Colorist',
                'company' => 'Cinematic Post House, New York',
                'description' => 'Managed multi-camera proxy creation, dialogue cleanup in iZotope RX, assembly edits, and color grading conform in DaVinci Resolve.'
            ],
            [
                'year' => '2015 - 2019',
                'role' => 'B.F.A. in Film & Electronic Arts',
                'company' => 'School of Visual Arts',
                'description' => 'Focused on film editing theory, non-linear storytelling, acoustic sound design, and color space management.'
            ]
        ];

        $suiteSpecs = [
            ['category' => 'Primary NLE', 'spec' => 'DaVinci Resolve Studio 19 & Adobe Premiere Pro 2026'],
            ['category' => 'Color Grading Monitor', 'spec' => 'Flanders Scientific XMP310 4K HDR Reference Master Monitor'],
            ['category' => 'Workstation', 'spec' => 'Apple Mac Studio M3 Ultra (192GB Unified Memory, 8TB NVMe)'],
            ['category' => 'Audio Monitoring', 'spec' => 'Genelec 8341A SAM Studio Monitors + iZotope RX 11 Advanced'],
            ['category' => 'Storage Array', 'spec' => '128TB OWC Jellyfish SAN (10GbE Fiber Confinement Direct Link)']
        ];

        return view('pages.about', compact('timeline', 'suiteSpecs'));
    }
}

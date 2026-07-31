<?php

namespace App\Http\Controllers;

use App\Data\ProjectsData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = ProjectsData::getAll();
        $featuredProjects = ProjectsData::getFeatured();
        
        $skills = [
            [
                'name' => 'Adobe Premiere Pro',
                'category' => 'NLE Editing & Assembly',
                'level' => 98,
                'icon' => 'video',
                'description' => 'Mastery in multi-cam editing, speed ramping, optical flow timing, and heavy timeline organization.'
            ],
            [
                'name' => 'DaVinci Resolve Studio',
                'category' => 'Color Grading & Finishing',
                'level' => 95,
                'icon' => 'disc',
                'description' => 'Advanced 3D LUT creation, node-based color pipelines, HDR grading, and Fusion FX integration.'
            ],
            [
                'name' => 'Adobe After Effects',
                'category' => 'Motion & Compositing',
                'level' => 92,
                'icon' => 'sparkles',
                'description' => 'Complex title sequences, 3D camera tracking, particle systems, optical flares, and datamoshing.'
            ],
            [
                'name' => 'Adobe Photoshop',
                'category' => 'Asset & Matte Creation',
                'level' => 90,
                'icon' => 'image',
                'description' => 'High-resolution thumbnail design, matte paintings, frame retouching, and texture extraction.'
            ],
            [
                'name' => 'Color Grading (3D LUTs & Scopes)',
                'category' => 'Visual Finishing',
                'level' => 96,
                'icon' => 'sun',
                'description' => 'Precise skin tone preservation, vectorscope analysis, film stock emulation, and shot matching.'
            ],
            [
                'name' => 'Sound Design & Foley',
                'category' => 'Audio Post-Production',
                'level' => 90,
                'icon' => 'volume-2',
                'description' => 'Custom sound effect layering, sub-bass impact placement, iZotope dialogue cleanup, and stereo imaging.'
            ],
            [
                'name' => 'Motion Graphics',
                'category' => 'Visual Aesthetics',
                'level' => 94,
                'icon' => 'layers',
                'description' => 'Lower thirds, animated kinetic typography, HUD interface overlays, and glitch transitions.'
            ],
            [
                'name' => 'Cinematic Storytelling',
                'category' => 'Narrative Structure',
                'level' => 99,
                'icon' => 'film',
                'description' => 'Rhythmic pacing, invisible cuts, emotional beat mapping, and narrative arc construction.'
            ]
        ];

        $services = [
            [
                'number' => '01',
                'title' => 'Commercial & Brand Editing',
                'description' => 'High-energy, punchy commercial cuts tailored for TV, streaming, and digital campaigns that command immediate attention.',
                'tags' => ['Pacing', 'Speed Ramping', 'Brand Storytelling', 'Color Grading']
            ],
            [
                'number' => '02',
                'title' => 'Narrative & Short Film Editing',
                'description' => 'Subtle, emotional assembly and pacing for feature films and festival shorts focused on character subtext.',
                'tags' => ['Emotional Rhythm', 'Match Cutting', 'Sound Integration', 'Film Look']
            ],
            [
                'number' => '03',
                'title' => 'Music Video Post-Production',
                'description' => 'Visually arresting music video cuts with rhythmic sync, flash transitions, light leaks, and anamorphic aesthetics.',
                'tags' => ['Beat Sync', 'Creative Effects', 'VFX Integration', 'Stylized Color']
            ],
            [
                'number' => '04',
                'title' => 'Color Grading & Finishing',
                'description' => 'Professional DaVinci Resolve color finishing to elevate flat LOG footage into cinematic, rich 4K masters.',
                'tags' => ['Color Scopes', 'Film Stock Emulation', 'Shot Matching', 'HDR']
            ],
            [
                'number' => '05',
                'title' => 'Motion Graphics & Title Design',
                'description' => 'Custom 2D/3D title sequences, HUD graphics, animated logos, and lower thirds that elevate production value.',
                'tags' => ['After Effects', '3D Titles', 'Glitch FX', 'Kinetic Typography']
            ],
            [
                'number' => '06',
                'title' => 'Documentary & Corporate Cinema',
                'description' => 'Synthesizing hours of interview audio and B-roll into crisp, engaging narrative stories for global brands.',
                'tags' => ['Interview Cutdowns', 'B-Roll Sync', 'Archival Restoration', 'Foley']
            ]
        ];

        $testimonials = [
            [
                'quote' => 'Ravi transformed our raw footage into an absolute masterpiece. His sense of rhythm and timing is unmatched in the industry.',
                'author' => 'Marcus Vance',
                'title' => 'Executive Creative Director, Porsche Motorsport',
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop',
                'project_ref' => 'Apex Horizon Commercial'
            ],
            [
                'quote' => 'Working with Ravi on our Sundance entry was effortless. He understands sound design and character emotion at a deep cinematic level.',
                'author' => 'Elena Rostova',
                'title' => 'Film Director & Writer',
                'avatar' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=200&auto=format&fit=crop',
                'project_ref' => 'Echoes of Silence Short Film'
            ],
            [
                'quote' => 'The title sequence and VFX work delivered for our game exceeded all expectations. Fast turnaround, flawless communication.',
                'author' => 'David Sterling',
                'title' => 'VP of Brand Marketing, Sony Interactive',
                'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=200&auto=format&fit=crop',
                'project_ref' => 'Cyberpunk 2099 Title Reel'
            ]
        ];

        return view('pages.home', compact('projects', 'featuredProjects', 'skills', 'services', 'testimonials'));
    }
}

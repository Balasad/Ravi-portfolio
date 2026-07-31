<?php

namespace App\Data;

class ProjectsData
{
    public static function getAll(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'DIRECTOR\'S CUT — FINAL MASTER',
                'slug' => 'final-master-edit',
                'subtitle' => 'Flagship Commercial & Narrative Edit',
                'category' => 'Commercial',
                'client' => 'Featured Client Cut',
                'role' => 'Lead Video Editor & Colorist',
                'duration' => '02:15',
                'timecode' => '01:00:04:12',
                'fps' => '24.00 FPS',
                'aspect_ratio' => '16:9 4K DCI',
                'resolution' => '4K Ultra HD',
                'year' => '2026',
                'software' => ['Adobe Premiere Pro', 'DaVinci Resolve Studio', 'After Effects'],
                'short_description' => 'Flagship commercial cut driven by kinetic rhythm, optical flow frame blending, precision audio cuts, and cinematic color finishing.',
                'full_description' => 'This flagship project showcases master-level editorial pacing, seamless speed ramping, and pristine 4K color grading.',
                'process_highlights' => [
                    [
                        'title' => 'Pacing & Timeline Trimming',
                        'detail' => 'Synthesized raw camera takes into a fluid, high-engagement visual narrative.'
                    ],
                    [
                        'title' => 'Motion Graphics & Sound Design',
                        'detail' => 'Integrated kinetic lower thirds, optical flares, and layered audio transients.'
                    ]
                ],
                'challenges' => 'Balancing erratic raw track footage while preserving a hyper-cohesive, sleek visual pace.',
                'outcome' => 'Featured as the centerpiece showreel edit.',
                'video_file' => '/videos/final.mov',
                'thumbnail' => 'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?q=80&w=1600&auto=format&fit=crop',
                'cutjamm_url' => 'https://cutjamm.com/project/67f29186475181da19ec16e6',
                'color_grading' => [
                    'raw_log' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1200&auto=format&fit=crop&sat=-100&con=30',
                    'graded' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1200&auto=format&fit=crop'
                ],
                'featured' => true
            ],
            [
                'id' => 2,
                'title' => 'PODCAST REEL — TALK SHOW EDIT',
                'slug' => 'podcast-reel-edit',
                'subtitle' => 'Multi-Camera Podcast & Talk Show Edit',
                'category' => 'Short Film',
                'client' => 'Podcast Studio Select',
                'role' => 'Senior Editor & Sound Engineer',
                'duration' => '03:40',
                'timecode' => '01:12:30:00',
                'fps' => '24.00 FPS',
                'aspect_ratio' => '16:9 4K',
                'resolution' => '4K DCI',
                'year' => '2026',
                'software' => ['Adobe Premiere Pro', 'iZotope RX', 'DaVinci Resolve'],
                'short_description' => 'Multi-cam podcast & talk show edit featuring speaker tracking, dialogue spectral repair, animated captions, and lower thirds.',
                'full_description' => 'A professionally edited podcast sequence focusing on clear dialogue cuts, multi-camera angle switching, and sound enhancements.',
                'process_highlights' => [
                    [
                        'title' => 'Multi-Cam Speaker Sync',
                        'detail' => 'Seamless audio-driven camera switching between host and guest.'
                    ],
                    [
                        'title' => 'Audio Spectral Cleanup',
                        'detail' => 'Cleaned background noise using iZotope RX for radio-ready vocal clarity.'
                    ]
                ],
                'challenges' => 'Maintaining high listener engagement over long dialogue conversations.',
                'outcome' => 'High retention rating across digital talk show platforms.',
                'video_file' => '/videos/podcast-reel.mov',
                'thumbnail' => 'https://images.unsplash.com/photo-1478760329108-5c3ed9d495a0?q=80&w=1600&auto=format&fit=crop',
                'cutjamm_url' => 'https://cutjamm.com/project/67f29186475181da19ec16e6',
                'color_grading' => [
                    'raw_log' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=1200&auto=format&fit=crop&sat=-100&con=20',
                    'graded' => 'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=1200&auto=format&fit=crop'
                ],
                'featured' => true
            ],
            [
                'id' => 3,
                'title' => 'REEL 4 — CINEMATIC MOTION & VFX',
                'slug' => 'reel-4-motion',
                'subtitle' => 'Stylized Motion Graphics & Cinematic Reel',
                'category' => 'VFX & Motion',
                'client' => 'Creative Studio',
                'role' => 'Motion Designer & Compositor',
                'duration' => '01:50',
                'timecode' => '01:24:00:18',
                'fps' => '60.00 FPS',
                'aspect_ratio' => '16:9 4K UHD',
                'resolution' => '4K Octane Render',
                'year' => '2026',
                'software' => ['After Effects', 'DaVinci Resolve', 'Cinema 4D'],
                'short_description' => 'High-energy motion reel featuring 3D particle compositing, glowing flares, chromatic aberration, and seamless speed ramping.',
                'full_description' => 'A dynamic visual showcase blending complex compositing layers, velocity editing, and customized optical effects.',
                'process_highlights' => [
                    [
                        'title' => 'Speed Ramping & Velocity Curves',
                        'detail' => 'Applied optical flow velocity shifts synced directly to musical beats.'
                    ]
                ],
                'challenges' => 'Synchronizing intricate visual effects layers with ultra-fast musical transients.',
                'outcome' => 'Selected as a featured motion graphics showcase piece.',
                'video_file' => '/videos/reel-4.mov',
                'thumbnail' => 'https://images.unsplash.com/photo-1508739773434-c26b3d09e071?q=80&w=1600&auto=format&fit=crop',
                'cutjamm_url' => 'https://cutjamm.com/project/67f29186475181da19ec16e6',
                'color_grading' => [
                    'raw_log' => 'https://images.unsplash.com/photo-1508739773434-c26b3d09e071?q=80&w=1200&auto=format&fit=crop&sat=-80',
                    'graded' => 'https://images.unsplash.com/photo-1508739773434-c26b3d09e071?q=80&w=1200&auto=format&fit=crop'
                ],
                'featured' => true
            ],
            [
                'id' => 4,
                'title' => 'SOCIAL MEDIA REEL — DYNAMIC SHORT FORM',
                'slug' => 'social-media-reel',
                'subtitle' => 'High-Engagement Short Form Content',
                'category' => 'Music Video',
                'client' => 'Digital Brand Campaign',
                'role' => 'Video Editor & Content Stylist',
                'duration' => '01:15',
                'timecode' => '01:38:12:04',
                'fps' => '24.00 FPS',
                'aspect_ratio' => '9:16 / 16:9 Cinema',
                'resolution' => '4K UHD',
                'year' => '2026',
                'software' => ['Adobe Premiere Pro', 'After Effects', 'Photoshop'],
                'short_description' => 'Fast-paced, high-retention video cut engineered with rapid visual hooks, whip-pan transitions, light leaks, and sound effects.',
                'full_description' => 'An ultra-engaging short-form video edit designed to capture audience attention within the first 3 seconds.',
                'process_highlights' => [
                    [
                        'title' => 'Hook Optimization & Fast Cuts',
                        'detail' => 'Designed rapid opening sequences paired with punchy audio sound design.'
                    ]
                ],
                'challenges' => 'Maximizing viewer retention rates through continuous visual stimulus.',
                'outcome' => 'Outstanding engagement metrics across digital channels.',
                'video_file' => '/videos/social-media-reel.mov',
                'thumbnail' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=1600&auto=format&fit=crop',
                'cutjamm_url' => 'https://cutjamm.com/project/67f29186475181da19ec16e6',
                'color_grading' => [
                    'raw_log' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=1200&auto=format&fit=crop&sat=-100',
                    'graded' => 'https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=1200&auto=format&fit=crop'
                ],
                'featured' => true
            ]
        ];
    }

    public static function getBySlug(string $slug): ?array
    {
        $projects = self::getAll();
        foreach ($projects as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }
        return null;
    }

    public static function getFeatured(): array
    {
        return array_filter(self::getAll(), fn($p) => $p['featured']);
    }
}

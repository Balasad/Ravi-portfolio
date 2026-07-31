@extends('layouts.app')

@section('title', 'SERVICES — Video Editing, Commercials, Music Videos & Motion Graphics')

@section('content')
<section class="py-24 bg-[#0B0B0B] border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-16 pb-6 border-b border-[#1F1F1F]">
            <div class="flex items-center space-x-2 font-mono text-xs text-[#00E5FF] mb-2">
                <span class="w-2 h-2 bg-[#00E5FF] rounded-full"></span>
                <span>POST-PRODUCTION CAPABILITIES</span>
            </div>
            <h1 class="font-bebas text-6xl sm:text-8xl tracking-wide text-white">EDITING & FINISHING SERVICES</h1>
            <p class="text-gray-400 font-inter text-sm max-w-2xl mt-2">
                From initial assembly cuts to 4K HDR master delivery, we handle every stage of post-production with cinematic precision.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $allServices = [
                    ['title' => 'Video Editing', 'desc' => 'Core timeline assembly, pacing, match-cutting, narrative sequencing, and seamless audio sync across all camera angles.', 'icon' => '01'],
                    ['title' => 'Commercial Editing', 'desc' => 'Fast-paced, high-impact commercial cutdowns (15s, 30s, 60s) optimized for broadcast television and digital social campaigns.', 'icon' => '02'],
                    ['title' => 'Music Videos', 'desc' => 'Stylized, beat-synced cuts featuring optical flares, light leaks, dynamic speed ramping, and anamorphic lens distortion.', 'icon' => '03'],
                    ['title' => 'Wedding Films', 'desc' => 'Cinematic wedding documentaries edited with emotional narrative arcs, speech sound design, and rich film color grading.', 'icon' => '04'],
                    ['title' => 'Corporate Videos', 'desc' => 'Sleek brand stories and executive interview assembly tailored for investor keynotes and global product launches.', 'icon' => '05'],
                    ['title' => 'Social Media Content', 'desc' => 'High-retention vertical (9:16) and square cuts engineered with fast hooks, dynamic kinetic captions, and sound effects.', 'icon' => '06'],
                    ['title' => 'YouTube Editing', 'desc' => 'Engaging long-form YouTube cuts designed for creator retention with custom lower thirds, B-roll overlays, and meme cuts.', 'icon' => '07'],
                    ['title' => 'Motion Graphics', 'desc' => 'Custom 2D/3D title sequences, lower thirds, HUD graphic overlays, datamoshing, and After Effects compositing.', 'icon' => '08'],
                ];
            @endphp

            @foreach($allServices as $serv)
                <div class="bg-[#141414] border border-[#222] p-8 rounded-sm hover:border-[#00E5FF] transition-all group">
                    <span class="font-bebas text-5xl text-[#00E5FF]/40 group-hover:text-[#00E5FF] transition-colors block mb-4">
                        {{ $serv['icon'] }}
                    </span>
                    <h3 class="font-bebas text-3xl tracking-wide text-white mb-3">{{ $serv['title'] }}</h3>
                    <p class="text-gray-400 font-inter text-xs leading-relaxed">{{ $serv['desc'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-20 p-10 bg-[#141414] border border-[#2B2B2B] rounded-sm text-center">
            <h3 class="font-bebas text-4xl text-white mb-2">READY TO INITIATE A PROJECT?</h3>
            <p class="text-gray-400 font-inter text-sm max-w-md mx-auto mb-6">
                Transmit your project specs, script, or footage links to get a custom timeline quote within 24 hours.
            </p>
            <a href="{{ route('contact') }}" class="inline-block px-8 py-4 bg-[#00E5FF] text-black font-bebas text-2xl tracking-wider rounded-xs hover:bg-[#33ebff] transition-all">
                START PROJECT BRIEF
            </a>
        </div>

    </div>
</section>
@endsection

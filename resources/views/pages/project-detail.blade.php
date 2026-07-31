@extends('layouts.app')

@section('title', $project['title'] . ' — Video Editing Case Study')

@section('content')
<!-- Project Hero Banner -->
<section class="relative min-h-[50vh] flex items-end pb-16 pt-24 bg-[#0D0D0D] border-b border-[#1C1C1C] overflow-hidden">
    <div class="absolute inset-0 z-0">
        <video autoplay loop muted playsinline class="w-full h-full object-cover filter brightness-40 contrast-125">
            <source src="{{ $project['video_file'] }}" type="video/mp4">
            <source src="{{ $project['video_file'] }}" type="video/quicktime">
        </video>
        <div class="absolute inset-0 bg-gradient-to-t from-[#0D0D0D] via-[#0D0D0D]/70 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <a href="{{ route('home') }}#projects-section" class="inline-flex items-center space-x-2 font-mono text-xs text-[#F5C442] mb-6 hover:underline">
            <span>← RETURN TO PROJECTS TRACK</span>
        </a>

        <div class="flex flex-wrap items-center gap-3 font-mono text-xs mb-4">
            <span class="px-3 py-1 bg-[#F5C442] text-black font-bold uppercase rounded-xs">
                {{ $project['category'] }}
            </span>
            <span class="px-3 py-1 bg-[#181818] border border-[#F5C442] text-[#F5C442] font-bold rounded-xs">
                CUT DURATION: {{ $project['duration'] }}
            </span>
            <span class="px-3 py-1 bg-[#181818] border border-gray-700 text-gray-300 rounded-xs">
                TIMECODE: {{ $project['timecode'] }}
            </span>
        </div>

        <h1 class="font-serif text-5xl sm:text-7xl md:text-8xl tracking-tight text-white leading-none font-bold">
            {{ $project['title'] }}
        </h1>
        <p class="font-mono text-sm sm:text-base text-gray-300 mt-2 max-w-2xl">
            {{ $project['subtitle'] }}
        </p>
    </div>
</section>

<!-- Embedded Video Player Section (Native 4K Video) -->
<section class="py-16 bg-[#0D0D0D] border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="bg-[#141414] border border-[#2A2A2A] rounded-sm overflow-hidden shadow-2xl">
            <div class="px-6 py-3 bg-[#0D0D0D] border-b border-[#222] flex items-center justify-between font-mono text-xs">
                <div class="flex items-center space-x-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-[#F5C442] animate-pulse"></span>
                    <span class="text-white font-bold">{{ $project['title'] }} — 4K CINEMA MASTER</span>
                </div>
                <div class="flex items-center space-x-4 text-gray-400">
                    <span>{{ $project['resolution'] }}</span>
                    <a href="{{ $project['cutjamm_url'] }}" target="_blank" class="text-[#F5C442] font-bold hover:underline">
                        CUTJAMM ↗
                    </a>
                </div>
            </div>

            <!-- Native Video Player -->
            <div class="relative aspect-video w-full bg-black">
                <video controls autoplay class="w-full h-full object-contain">
                    <source src="{{ $project['video_file'] }}" type="video/mp4">
                    <source src="{{ $project['video_file'] }}" type="video/quicktime">
                </video>
            </div>
        </div>

    </div>
</section>

<!-- Overview & Specs Metadata Grid -->
<section class="py-16 bg-[#0D0D0D] border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <div class="lg:col-span-4 bg-[#141414] border border-[#242424] p-8 rounded-sm space-y-6 font-mono text-xs">
                <h3 class="font-serif text-2xl font-bold tracking-wide text-[#F5C442] pb-3 border-b border-[#222]">PRODUCTION METADATA</h3>

                <div>
                    <div class="text-gray-500 uppercase text-[10px]">Client / Studio</div>
                    <div class="text-white font-bold text-sm mt-0.5">{{ $project['client'] }}</div>
                </div>

                <div>
                    <div class="text-gray-500 uppercase text-[10px]">Editorial Role</div>
                    <div class="text-[#F5C442] font-bold text-sm mt-0.5">{{ $project['role'] }}</div>
                </div>

                <div>
                    <div class="text-gray-500 uppercase text-[10px]">Aspect Ratio</div>
                    <div class="text-white text-sm mt-0.5">{{ $project['aspect_ratio'] }}</div>
                </div>

                <div>
                    <div class="text-gray-500 uppercase text-[10px]">Frame Rate</div>
                    <div class="text-white text-sm mt-0.5">{{ $project['fps'] }}</div>
                </div>

                <div>
                    <div class="text-gray-500 uppercase text-[10px]">Software Suite</div>
                    <div class="flex flex-wrap gap-1.5 mt-2">
                        @foreach($project['software'] as $soft)
                            <span class="px-2 py-1 bg-[#1F1F1F] border border-gray-800 text-gray-300 rounded-xs">
                                {{ $soft }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="lg:col-span-8 space-y-8">
                <div>
                    <h2 class="font-serif text-4xl font-bold tracking-wide text-white mb-4">PROJECT OVERVIEW</h2>
                    <p class="text-gray-300 font-inter text-base leading-relaxed">
                        {{ $project['full_description'] }}
                    </p>
                </div>

                <div>
                    <h3 class="font-serif text-3xl font-bold tracking-wide text-[#F5C442] mb-6">EDITING & POST-PRODUCTION PROCESS</h3>
                    
                    <div class="space-y-4">
                        @foreach($project['process_highlights'] as $highlight)
                            <div class="p-6 bg-[#141414] border border-[#222] rounded-xs space-y-2">
                                <div class="font-serif text-xl font-bold text-white tracking-wide flex items-center space-x-2">
                                    <span class="w-2 h-2 bg-[#F5C442] rounded-full"></span>
                                    <span>{{ $highlight['title'] }}</span>
                                </div>
                                <p class="text-gray-400 font-inter text-xs leading-relaxed">
                                    {{ $highlight['detail'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4 font-inter text-xs">
                    <div class="p-6 bg-[#141414] border border-[#242424] rounded-xs space-y-2">
                        <div class="font-mono text-xs text-[#F5C442] uppercase font-bold">KEY CHALLENGE</div>
                        <p class="text-gray-300 leading-relaxed">{{ $project['challenges'] }}</p>
                    </div>

                    <div class="p-6 bg-[#141414] border border-[#242424] rounded-xs space-y-2">
                        <div class="font-mono text-xs text-[#F5C442] uppercase font-bold">FINAL OUTCOME & IMPACT</div>
                        <p class="text-gray-300 leading-relaxed">{{ $project['outcome'] }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

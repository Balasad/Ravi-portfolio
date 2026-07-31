@extends('layouts.app')

@section('title', 'ALL PROJECTS — Video Editing Portfolio & Reel Showcase')

@section('content')
<section class="py-20 bg-[#0B0B0B] border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6 pb-6 border-b border-[#1F1F1F]">
            <div>
                <div class="flex items-center space-x-2 font-mono text-xs text-[#00E5FF] mb-2">
                    <span class="w-2 h-2 bg-[#00E5FF] rounded-full"></span>
                    <span>COMPLETE SEQUENCE REEL</span>
                </div>
                <h1 class="font-bebas text-6xl sm:text-8xl tracking-wide text-white">ALL PROJECTS</h1>
            </div>
            <span class="font-mono text-xs text-gray-500">6 FEATURED CASE STUDIES</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="group relative bg-[#181818] border border-[#262626] rounded-sm overflow-hidden hover:border-[#00E5FF] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(0,229,255,0.15)] flex flex-col">
                    <a href="{{ route('projects.show', $project['slug']) }}" class="relative aspect-[16/10] w-full overflow-hidden bg-black block">
                        <img src="{{ $project['thumbnail'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 filter brightness-95">

                        <div class="absolute top-3 left-3 right-3 flex items-center justify-between font-mono text-[10px] z-10">
                            <span class="px-2.5 py-1 bg-black/80 text-[#00E5FF] border border-[#00E5FF]/40 rounded-xs font-bold uppercase">
                                {{ $project['category'] }}
                            </span>
                            <span class="px-2 py-0.5 bg-black/80 text-[#FFC107] border border-[#FFC107]/40 rounded-xs font-bold">
                                {{ $project['duration'] }}
                            </span>
                        </div>

                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
                    </a>

                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <div class="font-mono text-[11px] text-gray-400 mb-1 flex items-center justify-between">
                                <span>CLIENT: {{ $project['client'] }}</span>
                                <span class="text-gray-500">{{ $project['year'] }}</span>
                            </div>
                            <h3 class="font-bebas text-2xl tracking-wide text-white group-hover:text-[#00E5FF] transition-colors leading-tight">
                                <a href="{{ route('projects.show', $project['slug']) }}">{{ $project['title'] }}</a>
                            </h3>
                            <p class="text-gray-400 font-inter text-xs mt-2 line-clamp-2 leading-relaxed">
                                {{ $project['short_description'] }}
                            </p>
                        </div>

                        <div class="pt-4 border-t border-[#222222] flex flex-wrap items-center gap-1.5 font-mono text-[10px]">
                            @foreach($project['software'] as $soft)
                                <span class="px-2 py-0.5 bg-[#121212] border border-[#2F2F2F] text-gray-300 rounded-xs">
                                    {{ $soft }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endsection

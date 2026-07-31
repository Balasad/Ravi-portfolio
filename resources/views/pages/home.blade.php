@extends('layouts.app')

@section('title', 'RAVINDRAN R — Professional Video Editor & Motion Graphics')

@section('content')
<!-- HERO SECTION: Clean Dark Studio Background -->
<section class="relative min-h-[88vh] flex flex-col justify-between overflow-hidden bg-[#0D0D0D] pt-24 pb-8">
    
    <!-- Dark Studio Vignette & Timeline Track Grid -->
    <div class="absolute inset-0 timeline-track-grid opacity-20 pointer-events-none"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-[#0D0D0D] via-transparent to-[#0D0D0D] pointer-events-none"></div>

    <!-- Empty Spacer for Centering -->
    <div></div>

    <!-- Main Hero Content (Centered) -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center my-auto">
        
        <!-- Tagline Over-title -->
        <div class="font-mono text-xs text-[#F5C442] tracking-[0.35em] uppercase font-semibold mb-4" data-aos="fade-down">
            MASTERING THE NARRATIVE
        </div>

        <!-- Main Headline in Balanced Serif Size -->
        <h1 class="hero-title-reveal font-serif text-3xl sm:text-4xl md:text-5xl lg:text-[3.25rem] font-semibold leading-[1.2] text-white tracking-tight max-w-4xl">
            Professional Video Editor <span class="font-light text-[#F5C442]/70">|</span><br>
            Motion Graphics <span class="font-light text-[#F5C442]/70">|</span><br>
            Storytelling Through Editing
        </h1>

        <!-- Action CTAs -->
        <div class="mt-6 sm:mt-8 flex flex-wrap items-center justify-center gap-4 font-inter" data-aos="fade-up" data-aos-delay="200">
            <!-- Primary Golden Button -->
            <button @click="$store.timeline.openShowreel('https://cutjamm.com/project/67f29186475181da19ec16e6')" class="px-7 py-3 bg-[#F5C442] text-black font-semibold text-sm rounded-xs hover:bg-[#e5b738] transition-all transform hover:scale-[1.03] shadow-[0_0_20px_rgba(245,196,66,0.3)] flex items-center space-x-2">
                <span>▶ Watch Showreel</span>
            </button>

            <!-- Cutjamm Direct Link Button -->
            <a href="https://cutjamm.com/project/67f29186475181da19ec16e6" target="_blank" class="px-7 py-3 bg-[#171717] border border-[#F5C442]/50 text-[#F5C442] font-semibold text-sm rounded-xs hover:bg-[#F5C442] hover:text-black transition-all transform hover:scale-[1.03] flex items-center space-x-2">
                <span>View Cutjamm Project</span>
                <span>↗</span>
            </a>

            <!-- Secondary Outline Button -->
            <a href="#projects-section" class="px-7 py-3 bg-transparent border border-white/30 text-white font-medium text-sm rounded-xs hover:border-[#F5C442] hover:text-[#F5C442] transition-all transform hover:scale-[1.03]">
                <span>View Projects</span>
            </a>
        </div>

    </div>

    <!-- Bottom Timeline Scrubber Bar -->
    <div class="w-full max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
        <div class="w-full bg-[#1F1F1F] h-[3px] relative overflow-hidden rounded-full">
            <div id="global-playhead-progress" class="h-full bg-[#F5C442] w-[35%] shadow-[0_0_12px_#F5C442] relative">
                <div class="absolute right-0 top-[-6px] bottom-[-6px] w-[2px] bg-[#F5C442] shadow-[0_0_8px_#F5C442]"></div>
            </div>
        </div>
    </div>
</section>

<!-- SHOWREEL SECTION (CUTJAMM INTEGRATED PLAYER) -->
<section id="showreel-section" class="py-24 bg-[#0D0D0D] relative overflow-hidden border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-8 pb-4 border-b border-[#1F1F1F]">
            <div class="flex items-center space-x-3 font-mono text-xs">
                <span class="px-2.5 py-1 bg-[#F5C442] text-black font-bold rounded-xs">REEL 01</span>
                <h2 class="font-serif text-3xl font-bold tracking-wide text-white">RAVINDRAN R — MASTER SHOWREEL</h2>
            </div>
            <span class="font-mono text-xs text-gray-500">4K CINEMA MASTER // CUTJAMM PRO</span>
        </div>

        <!-- Large Video Player Frame -->
        <div class="relative group rounded-sm overflow-hidden border border-[#2A2A2A] bg-[#171717] shadow-2xl shadow-black" data-aos="zoom-in">
            <div class="px-4 py-2.5 bg-[#121212] border-b border-[#222] flex items-center justify-between font-mono text-xs text-gray-400">
                <div class="flex items-center space-x-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                    <span>DAVINCI RESOLVE STUDIO — 4K TIMELINE MASTER</span>
                </div>
                <div class="flex items-center space-x-4 text-[11px]">
                    <a href="https://cutjamm.com/project/67f29186475181da19ec16e6" target="_blank" class="text-[#F5C442] hover:underline font-bold">
                        OPEN ON CUTJAMM ↗
                    </a>
                </div>
            </div>

            <!-- Integrated Cutjamm Video Player -->
            <div class="relative aspect-video w-full overflow-hidden bg-black">
                <iframe src="https://cutjamm.com/project/67f29186475181da19ec16e6" 
                        class="w-full h-full border-0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
            </div>

            <!-- Bottom Direct Link Bar -->
            <div class="p-4 bg-[#121212] border-t border-[#222] flex flex-wrap items-center justify-between font-mono text-xs text-gray-300 gap-4">
                <div class="flex items-center space-x-2">
                    <span class="text-[#F5C442] font-bold">CUTJAMM PROJECT:</span>
                    <a href="https://cutjamm.com/project/67f29186475181da19ec16e6" target="_blank" class="text-white hover:text-[#F5C442] underline">
                        https://cutjamm.com/project/67f29186475181da19ec16e6
                    </a>
                </div>
                <div class="flex items-center space-x-3">
                    <button @click="$store.timeline.openShowreel('https://cutjamm.com/project/67f29186475181da19ec16e6')" class="px-4 py-1.5 bg-[#F5C442] text-black font-bold rounded-xs hover:bg-[#e5b738] transition-colors">
                        FULLSCREEN REEL ↗
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- PROJECTS GRID -->
<section id="projects-section" class="py-24 bg-[#0D0D0D] relative overflow-hidden border-b border-[#1C1C1C]" x-data="{ activeFilter: 'ALL' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6 pb-6 border-b border-[#1F1F1F]">
            <div>
                <div class="flex items-center space-x-2 font-mono text-xs text-[#F5C442] mb-2">
                    <span class="w-2 h-2 bg-[#F5C442] rounded-full"></span>
                    <span>FEATURED WORK ARCHIVE (4 EDITED REELS)</span>
                </div>
                <h2 class="font-serif text-4xl sm:text-6xl font-bold tracking-wide text-white">SELECTED WORK</h2>
            </div>

            <div class="flex flex-wrap items-center gap-2 font-mono text-xs">
                <template x-for="cat in ['ALL', 'Commercial', 'Short Film', 'VFX & Motion', 'Music Video']">
                    <button @click="activeFilter = cat" 
                            :class="activeFilter === cat ? 'bg-[#F5C442] text-black font-bold' : 'bg-[#171717] text-gray-400 border border-[#2B2B2B] hover:border-[#F5C442] hover:text-white'"
                            class="px-4 py-2 rounded-xs transition-colors uppercase">
                        <span x-text="cat"></span>
                    </button>
                </template>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($projects as $project)
                <div x-show="activeFilter === 'ALL' || activeFilter === '{{ $project['category'] }}'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="group relative bg-[#171717] border border-[#242424] rounded-sm overflow-hidden hover:border-[#F5C442] transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_10px_30px_rgba(245,196,66,0.15)] flex flex-col"
                     data-aos="fade-up">
                    
                    <!-- Card Video Thumbnail Preview -->
                    <div class="relative aspect-[16/10] w-full overflow-hidden bg-black block group">
                        <img src="{{ $project['thumbnail'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover filter brightness-75 group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>

                        <div class="absolute top-3 left-3 right-3 flex items-center justify-between font-mono text-[10px] z-10">
                            <span class="px-2.5 py-1 bg-black/80 text-[#F5C442] border border-[#F5C442]/40 rounded-xs font-bold uppercase">
                                {{ $project['category'] }}
                            </span>
                            <span class="px-2 py-0.5 bg-black/80 text-[#F5C442] border border-[#F5C442]/40 rounded-xs font-bold">
                                {{ $project['duration'] }}
                            </span>
                        </div>

                        <!-- Center Play Button (Launches Cutjamm Reel Modal) -->
                        <button @click="$store.timeline.openShowreel('{{ $project['cutjamm_url'] }}')" 
                                class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <div class="w-16 h-16 bg-[#F5C442] text-black rounded-full flex items-center justify-center shadow-xl font-bold text-xl pl-1 hover:bg-white transition-colors">
                                ▶
                            </div>
                        </button>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 flex-grow flex flex-col justify-between space-y-4">
                        <div>
                            <div class="font-mono text-[11px] text-gray-400 mb-1 flex items-center justify-between">
                                <span>CLIENT: {{ $project['client'] }}</span>
                                <span class="text-gray-500">{{ $project['year'] }}</span>
                            </div>
                            <h3 class="font-serif text-2xl font-bold text-white group-hover:text-[#F5C442] transition-colors leading-tight">
                                <a href="{{ route('projects.show', $project['slug']) }}">{{ $project['title'] }}</a>
                            </h3>
                            <p class="text-gray-400 font-inter text-xs mt-2 line-clamp-2 leading-relaxed">
                                {{ $project['short_description'] }}
                            </p>
                        </div>

                        <div class="pt-4 border-t border-[#222222] flex items-center justify-between font-mono text-[10px]">
                            <div class="flex flex-wrap gap-1.5">
                                @foreach($project['software'] as $soft)
                                    <span class="px-2 py-0.5 bg-[#121212] border border-[#2F2F2F] text-gray-300 rounded-xs">
                                        {{ $soft }}
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex items-center space-x-3">
                                <a href="{{ route('projects.show', $project['slug']) }}" class="text-[#F5C442] hover:underline font-bold">
                                    DETAILS →
                                </a>
                                <a href="{{ $project['cutjamm_url'] }}" target="_blank" class="text-gray-400 hover:text-white font-bold">
                                    CUTJAMM ↗
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- COLOR GRADING SUITE -->
<section class="py-24 bg-[#0D0D0D] relative overflow-hidden border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-12 text-center">
            <div class="inline-flex items-center space-x-2 font-mono text-xs text-[#F5C442] mb-2">
                <span class="w-2 h-2 bg-[#F5C442] rounded-full"></span>
                <span>COLOR GRADING & FINISHING SUITE</span>
            </div>
            <h2 class="font-serif text-4xl sm:text-6xl font-bold tracking-wide text-white">CAMERA RAW LOG vs GRADED 4K MASTER</h2>
        </div>

        <div x-data="{ sliderPos: 50 }" class="relative aspect-video max-w-5xl mx-auto rounded-sm overflow-hidden border border-[#2A2A2A] shadow-2xl select-none group">
            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1600&auto=format&fit=crop" 
                 alt="Graded Master" 
                 class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute top-4 left-4 bg-black/80 px-3 py-1 border border-[#F5C442] text-[#F5C442] font-mono text-xs font-bold rounded-xs">
                GRADED Rec.709 HDR MASTER
            </div>

            <div class="absolute inset-0 overflow-hidden" :style="'width: ' + sliderPos + '%'">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1600&auto=format&fit=crop" 
                     alt="RAW Camera LOG" 
                     class="absolute inset-0 w-full h-full object-cover filter brightness-75 contrast-50 grayscale-[40%]">
                <div class="absolute top-4 left-4 bg-black/80 px-3 py-1 border border-gray-600 text-gray-300 font-mono text-xs font-bold rounded-xs">
                    UNGRADED CAMERA RAW LOG
                </div>
            </div>

            <div class="absolute top-0 bottom-0 w-1 bg-[#F5C442] shadow-[0_0_15px_#F5C442] cursor-ew-resize z-30" 
                 :style="'left: ' + sliderPos + '%'">
                <div class="absolute top-1/2 -translate-y-1/2 -translate-x-1/2 w-10 h-10 bg-[#F5C442] text-black rounded-full flex items-center justify-center font-bold text-xs shadow-lg">
                    ↔
                </div>
            </div>

            <input type="range" min="0" max="100" x-model="sliderPos" class="absolute inset-0 w-full h-full opacity-0 cursor-ew-resize z-40">
        </div>

    </div>
</section>

<!-- SKILLS SECTION -->
<section id="skills-section" class="py-24 bg-[#0D0D0D] relative overflow-hidden border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 pb-6 border-b border-[#1F1F1F]">
            <div>
                <div class="flex items-center space-x-2 font-mono text-xs text-[#F5C442] mb-2">
                    <span class="w-2 h-2 bg-[#F5C442] rounded-full"></span>
                    <span>TECHNICAL PROFICIENCY</span>
                </div>
                <h2 class="font-serif text-4xl sm:text-6xl font-bold tracking-wide text-white">SKILLS & SUITE RACK</h2>
            </div>
            <span class="font-mono text-xs text-gray-500">10+ YEARS POST-PRODUCTION EXPERTISE</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($skills as $skill)
                <div class="bg-[#171717] border border-[#242424] p-6 rounded-sm hover:border-[#F5C442] transition-all hover:-translate-y-1 group" data-aos="fade-up">
                    <div class="flex items-center justify-between mb-4">
                        <span class="font-mono text-[10px] text-[#F5C442] uppercase tracking-wider">{{ $skill['category'] }}</span>
                        <span class="font-mono text-xs font-bold text-[#F5C442]">{{ $skill['level'] }}%</span>
                    </div>
                    
                    <h3 class="font-serif text-2xl font-bold text-white group-hover:text-[#F5C442] transition-colors">
                        {{ $skill['name'] }}
                    </h3>
                    
                    <p class="text-gray-400 font-inter text-xs mt-2 leading-relaxed">
                        {{ $skill['description'] }}
                    </p>

                    <div class="mt-6 w-full bg-[#111] h-1.5 rounded-full overflow-hidden border border-gray-800">
                        <div class="bg-[#F5C442] h-full rounded-full transition-all duration-1000" style="width: {{ $skill['level'] }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- PROCESS / SERVICES SECTION -->
<section id="process-section" class="py-24 bg-[#0D0D0D] relative overflow-hidden border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-16 pb-6 border-b border-[#1F1F1F]">
            <div class="flex items-center space-x-2 font-mono text-xs text-[#F5C442] mb-2">
                <span class="w-2 h-2 bg-[#F5C442] rounded-full"></span>
                <span>EDITORIAL PROCESS & SERVICES</span>
            </div>
            <h2 class="font-serif text-4xl sm:text-6xl font-bold tracking-wide text-white">WORKFLOW & CAPABILITIES</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="bg-[#141414] border border-[#222222] p-8 rounded-sm hover:border-[#F5C442] transition-all group" data-aos="fade-up">
                    <span class="font-serif text-4xl font-bold text-[#F5C442]/50 group-hover:text-[#F5C442] transition-colors block mb-4">
                        {{ $service['number'] }}
                    </span>
                    <h3 class="font-serif text-2xl font-bold text-white mb-3">{{ $service['title'] }}</h3>
                    <p class="text-gray-400 font-inter text-xs leading-relaxed mb-6">{{ $service['description'] }}</p>
                    
                    <div class="flex flex-wrap gap-1.5 font-mono text-[10px]">
                        @foreach($service['tags'] as $tag)
                            <span class="px-2.5 py-1 bg-[#1F1F1F] text-gray-300 rounded-xs border border-gray-800">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-24 bg-[#0D0D0D] relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <div class="lg:col-span-5 space-y-6" data-aos="fade-right">
                <div class="flex items-center space-x-2 font-mono text-xs text-[#F5C442]">
                    <span class="w-2 h-2 bg-[#F5C442] rounded-full animate-ping"></span>
                    <span>INITIATE PROJECT TIMELINE</span>
                </div>

                <h2 class="font-serif text-5xl sm:text-7xl font-bold tracking-wide text-white leading-tight">
                    LET’S CREATE SOMETHING UNFORGETTABLE.
                </h2>

                <p class="text-gray-400 font-inter text-sm leading-relaxed">
                    Have a commercial campaign, music video, or narrative film in pre-production or post-production? Send your project specs.
                </p>

                <div class="space-y-4 font-mono text-xs pt-4">
                    <div class="p-4 bg-[#141414] border border-[#222] rounded-xs flex items-center space-x-4">
                        <div class="w-10 h-10 bg-[#F5C442]/10 border border-[#F5C442] text-[#F5C442] rounded-xs flex items-center justify-center font-bold">@</div>
                        <div>
                            <div class="text-gray-500 text-[10px]">DIRECT EMAIL</div>
                            <a href="mailto:ravirv3882@gmail.com" class="text-white text-sm hover:text-[#F5C442] transition-colors font-bold">ravirv3882@gmail.com</a>
                        </div>
                    </div>

                    <div class="p-4 bg-[#141414] border border-[#222] rounded-xs flex items-center space-x-4">
                        <div class="w-10 h-10 bg-[#FFC107]/10 border border-[#FFC107] text-[#FFC107] rounded-xs flex items-center justify-center font-bold">TEL</div>
                        <div>
                            <div class="text-gray-500 text-[10px]">DIRECT PHONE</div>
                            <a href="tel:+918220134740" class="text-white text-sm hover:text-[#FFC107] transition-colors font-bold">+91 8220134740</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 bg-[#141414] border border-[#262626] p-8 sm:p-10 rounded-sm" data-aos="fade-left">
                <form x-data="{ submitted: false, loading: false }" 
                      @submit.prevent="loading = true; setTimeout(() => { loading = false; submitted = true; }, 1000)" 
                      class="space-y-6">
                    
                    <div x-show="submitted" class="p-6 bg-[#F5C442]/10 border border-[#F5C442] rounded-xs font-mono text-xs text-[#F5C442] space-y-2">
                        <div class="font-bold text-sm">✔ INTAKE BRIEF TRANSMITTED</div>
                        <div>Playhead marker recorded. Ravindran R will respond within 24 hours.</div>
                    </div>

                    <div x-show="!submitted" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 font-inter text-sm">
                            <div>
                                <label class="block font-mono text-xs text-gray-400 mb-2 uppercase">Your Name *</label>
                                <input type="text" required placeholder="e.g. Christopher Nolan" class="w-full bg-[#0D0D0D] border border-[#2A2A2A] focus:border-[#F5C442] px-4 py-3 text-white rounded-xs outline-none transition-colors">
                            </div>
                            <div>
                                <label class="block font-mono text-xs text-gray-400 mb-2 uppercase">Email Address *</label>
                                <input type="email" required placeholder="e.g. director@studio.com" class="w-full bg-[#0D0D0D] border border-[#2A2A2A] focus:border-[#F5C442] px-4 py-3 text-white rounded-xs outline-none transition-colors">
                            </div>
                        </div>

                        <div>
                            <label class="block font-mono text-xs text-gray-400 mb-2 uppercase">Project Scope & Links</label>
                            <textarea rows="4" required placeholder="Paste links to script, storyboards, or Cutjamm drive..." class="w-full bg-[#0D0D0D] border border-[#2A2A2A] focus:border-[#F5C442] p-4 text-white rounded-xs outline-none transition-colors"></textarea>
                        </div>

                        <button type="submit" 
                                :disabled="loading"
                                class="w-full py-4 bg-[#F5C442] text-black font-semibold text-lg tracking-wider rounded-xs hover:bg-[#e5b738] transition-all">
                            <span x-show="!loading">TRANSMIT BRIEF</span>
                            <span x-show="loading" class="font-mono text-sm">TRANSMITTING...</span>
                        </button>
                    </div>

                </form>
            </div>

        </div>

    </div>
</section>
@endsection

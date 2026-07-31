@extends('layouts.app')

@section('title', 'ABOUT — RAVINDRAN R | Video Editing & Suite Specs')

@section('content')
<!-- About Hero & Bio -->
<section class="py-24 bg-[#0D0D0D] border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-20">
            <!-- Portrait -->
            <div class="lg:col-span-5">
                <div class="relative border-2 border-[#F5C442] rounded-sm overflow-hidden p-2 bg-[#171717] shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1000&auto=format&fit=crop" 
                         alt="Ravindran R Video Editor" 
                         class="w-full h-auto object-cover rounded-xs filter grayscale contrast-125 hover:grayscale-0 transition-all duration-700">
                    
                    <div class="absolute bottom-4 left-4 right-4 bg-black/90 p-4 border border-[#2B2B2B] font-mono text-xs">
                        <div class="text-[#F5C442] font-bold text-sm">RAVINDRAN R</div>
                        <div class="text-gray-400">Senior Video Editor & Motion Artist</div>
                        <div class="text-[#FFC107] text-[10px] mt-1">AVAILABLE WORLDWIDE FOR COMMISSIONS</div>
                    </div>
                </div>
            </div>

            <!-- Bio Story -->
            <div class="lg:col-span-7 space-y-6">
                <div class="flex items-center space-x-2 font-mono text-xs text-[#F5C442]">
                    <span class="w-2 h-2 bg-[#F5C442] rounded-full"></span>
                    <span>CREATIVE BIOGRAPHY</span>
                </div>

                <h1 class="font-serif text-6xl sm:text-8xl tracking-wide text-white leading-none font-bold">
                    EDITING IS VISUAL MUSIC.
                </h1>

                <p class="text-gray-300 font-inter text-base leading-relaxed">
                    I am <strong>Ravindran R</strong>, a professional Video Editor, Motion Graphics Artist, and Visual Storyteller with years of experience crafting high-impact commercial cuts, short films, talk shows, and high-energy music videos.
                </p>

                <p class="text-gray-400 font-inter text-sm leading-relaxed">
                    My editorial approach bridges precise rhythmic pacing with deep color space mastery and atmospheric sound design. Every frame is treated as a narrative building block designed to provoke emotional resonance.
                </p>

                <!-- Key Metrics -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-4 font-mono text-xs">
                    <div class="p-4 bg-[#141414] border border-[#242424] rounded-xs">
                        <div class="font-serif text-4xl text-[#F5C442] font-bold">10+</div>
                        <div class="text-gray-400 text-[10px]">YEARS EXP.</div>
                    </div>
                    <div class="p-4 bg-[#141414] border border-[#242424] rounded-xs">
                        <div class="font-serif text-4xl text-[#FFC107] font-bold">120+</div>
                        <div class="text-gray-400 text-[10px]">PROJECT CUTS</div>
                    </div>
                    <div class="p-4 bg-[#141414] border border-[#242424] rounded-xs">
                        <div class="font-serif text-4xl text-white font-bold">45M+</div>
                        <div class="text-gray-400 text-[10px]">REEL VIEWS</div>
                    </div>
                    <div class="p-4 bg-[#141414] border border-[#242424] rounded-xs">
                        <div class="font-serif text-4xl text-[#F5C442] font-bold">4k</div>
                        <div class="text-gray-400 text-[10px]">HDR READY</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Career Timeline Track -->
        <div class="mb-20">
            <div class="mb-10 pb-4 border-b border-[#1F1F1F]">
                <div class="flex items-center space-x-2 font-mono text-xs text-[#F5C442] mb-2">
                    <span class="w-2 h-2 bg-[#F5C442] rounded-full"></span>
                    <span>SEQUENCE CHRONOLOGY</span>
                </div>
                <h2 class="font-serif text-5xl font-bold tracking-wide text-white">CAREER TIMELINE</h2>
            </div>

            <div class="space-y-6">
                @foreach($timeline as $item)
                    <div class="p-8 bg-[#141414] border border-[#222] rounded-sm hover:border-[#F5C442] transition-all flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div class="md:w-1/4">
                            <span class="px-3 py-1 bg-[#1F1F1F] border border-[#F5C442]/40 text-[#F5C442] font-mono text-xs font-bold rounded-xs">
                                {{ $item['year'] }}
                            </span>
                        </div>
                        <div class="md:w-3/4 space-y-1">
                            <h3 class="font-serif text-2xl font-bold text-white tracking-wide">{{ $item['role'] }}</h3>
                            <div class="font-mono text-xs text-[#FFC107]">{{ $item['company'] }}</div>
                            <p class="text-gray-400 font-inter text-xs pt-2 leading-relaxed">{{ $item['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Studio Suite Gear Specs -->
        <div>
            <div class="mb-10 pb-4 border-b border-[#1F1F1F]">
                <div class="flex items-center space-x-2 font-mono text-xs text-[#FFC107] mb-2">
                    <span class="w-2 h-2 bg-[#FFC107] rounded-full"></span>
                    <span>HARDWARE & MONITORING SUITE</span>
                </div>
                <h2 class="font-serif text-5xl font-bold tracking-wide text-white">EDITING SUITE SPECS</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 font-mono text-xs">
                @foreach($suiteSpecs as $spec)
                    <div class="p-5 bg-[#141414] border border-[#242424] rounded-xs flex items-center justify-between">
                        <span class="text-gray-500 uppercase">{{ $spec['category'] }}</span>
                        <span class="text-[#F5C442] font-bold text-right">{{ $spec['spec'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
@endsection

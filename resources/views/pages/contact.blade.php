@extends('layouts.app')

@section('title', 'CONTACT — RAVINDRAN R | Project Brief Submission')

@section('content')
<section class="py-24 bg-[#0D0D0D] border-b border-[#1C1C1C]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Left Contact Info Stack -->
            <div class="lg:col-span-5 space-y-6">
                <div class="flex items-center space-x-2 font-mono text-xs text-[#F5C442]">
                    <span class="w-2 h-2 bg-[#F5C442] rounded-full animate-ping"></span>
                    <span>STUDIO CONTACT DISPATCH — RAVINDRAN R</span>
                </div>

                <h1 class="font-serif text-6xl sm:text-8xl font-bold tracking-wide text-white leading-none">
                    GET IN TOUCH.
                </h1>

                <p class="text-gray-400 font-inter text-sm leading-relaxed">
                    Ready to elevate your commercial campaign, music video, talk show, or narrative film? Reach out directly to Ravindran R with script briefs, delivery deadlines, or camera specs.
                </p>

                <!-- Direct Channels -->
                <div class="space-y-4 font-mono text-xs pt-4">
                    <div class="p-5 bg-[#141414] border border-[#222] rounded-xs flex items-center space-x-4">
                        <div class="w-10 h-10 bg-[#F5C442]/10 border border-[#F5C442] text-[#F5C442] rounded-xs flex items-center justify-center font-bold">@</div>
                        <div>
                            <div class="text-gray-500 text-[10px]">EMAIL ADDRESS</div>
                            <a href="mailto:ravirv3882@gmail.com" class="text-white text-base hover:text-[#F5C442] transition-colors font-bold">ravirv3882@gmail.com</a>
                        </div>
                    </div>

                    <div class="p-5 bg-[#141414] border border-[#222] rounded-xs flex items-center space-x-4">
                        <div class="w-10 h-10 bg-[#FFC107]/10 border border-[#FFC107] text-[#FFC107] rounded-xs flex items-center justify-center font-bold">TEL</div>
                        <div>
                            <div class="text-gray-500 text-[10px]">STUDIO PHONE</div>
                            <a href="tel:+918220134740" class="text-white text-base hover:text-[#FFC107] transition-colors font-bold">+91 8220134740</a>
                        </div>
                    </div>
                </div>

                <!-- Platform Handles -->
                <div class="pt-6">
                    <div class="font-mono text-xs text-gray-500 uppercase mb-3">SOCIAL & SHOWCASE PLATFORMS</div>
                    <div class="grid grid-cols-2 gap-3 font-mono text-xs">
                        <a href="https://instagram.com" target="_blank" class="p-3 bg-[#141414] border border-[#242424] text-gray-300 hover:border-[#F5C442] hover:text-[#F5C442] transition-colors flex items-center justify-between">
                            <span>INSTAGRAM</span>
                            <span class="text-[10px] text-gray-500">↗</span>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="p-3 bg-[#141414] border border-[#242424] text-gray-300 hover:border-[#F5C442] hover:text-[#F5C442] transition-colors flex items-center justify-between">
                            <span>LINKEDIN</span>
                            <span class="text-[10px] text-gray-500">↗</span>
                        </a>
                        <a href="https://youtube.com" target="_blank" class="p-3 bg-[#141414] border border-[#242424] text-gray-300 hover:border-[#F5C442] hover:text-[#F5C442] transition-colors flex items-center justify-between">
                            <span>YOUTUBE</span>
                            <span class="text-[10px] text-gray-500">↗</span>
                        </a>
                        <a href="https://cutjamm.com/project/67f29186475181da19ec16e6" target="_blank" class="p-3 bg-[#141414] border border-[#242424] text-gray-300 hover:border-[#F5C442] hover:text-[#F5C442] transition-colors flex items-center justify-between">
                            <span>CUTJAMM PRO</span>
                            <span class="text-[10px] text-gray-500">↗</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Interactive Brief Form -->
            <div class="lg:col-span-7 bg-[#141414] border border-[#262626] p-8 sm:p-10 rounded-sm">
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

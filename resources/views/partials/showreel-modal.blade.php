<div x-data 
     x-show="$store.timeline.showreelModalOpen" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 scale-95"
     x-transition:enter-end="opacity-100 scale-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 scale-100"
     x-transition:leave-end="opacity-0 scale-95"
     class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 md:p-10 bg-black/95 backdrop-blur-2xl"
     style="display: none;">
    
    <!-- Modal Frame Container -->
    <div class="relative w-full max-w-6xl bg-[#141414] border border-[#F5C442]/40 rounded-sm overflow-hidden shadow-2xl flex flex-col"
         @click.away="$store.timeline.closeShowreel()">
        
        <!-- Header Bar -->
        <div class="px-6 py-3.5 bg-[#0D0D0D] border-b border-[#222222] flex items-center justify-between font-mono text-xs">
            <div class="flex items-center space-x-3">
                <span class="w-3 h-3 rounded-full bg-[#F5C442] shadow-[0_0_8px_#F5C442]"></span>
                <span class="text-white font-bold tracking-wider">FEATURED REEL — MUSIC VIDEO EDIT [OFFICIAL WORK]</span>
            </div>
            
            <div class="flex items-center space-x-4">
                <a href="https://cutjamm.com/project/67f29186475181da19ec16e6" target="_blank" class="px-3 py-1 bg-[#F5C442] text-black font-bold rounded-xs hover:bg-[#e5b738] transition-colors flex items-center space-x-1">
                    <span>CUTJAMM REEL</span>
                    <span>↗</span>
                </a>
                <button @click="$store.timeline.closeShowreel()" class="text-gray-400 hover:text-white transition-colors p-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- HTML5 Video Player Wrapper (NO AUTOPLAY) -->
        <div class="relative w-full aspect-video bg-black flex items-center justify-center overflow-hidden">
            <video controls preload="metadata" class="w-full h-full object-contain">
                <source src="/videos/final.mov" type="video/mp4">
                <source src="/videos/final.mov" type="video/quicktime">
                Your browser does not support playing this video format.
            </video>
        </div>

        <!-- Transport & Scrubbing Footer Bar -->
        <div class="px-6 py-4 bg-[#0D0D0D] border-t border-[#222222] flex flex-wrap items-center justify-between gap-4 font-mono text-xs text-gray-300">
            <div class="flex items-center space-x-4">
                <span class="text-[#F5C442] font-bold">REEL PLAYER</span>
                <span class="text-gray-500">|</span>
                <a href="https://cutjamm.com/project/67f29186475181da19ec16e6" target="_blank" class="text-gray-300 hover:text-[#F5C442] underline">
                    Cutjamm Project #67f29186475181da19ec16e6
                </a>
            </div>
            
            <div class="flex items-center space-x-3">
                <span class="px-2 py-1 bg-[#1F1F1F] border border-gray-700 text-gray-300 text-[10px] rounded-xs">PRESS ESC TO CLOSE</span>
            </div>
        </div>
    </div>
</div>

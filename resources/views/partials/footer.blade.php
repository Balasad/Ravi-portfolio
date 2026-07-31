<footer class="bg-[#0D0D0D] border-t border-[#1F1F1F] py-16 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Timeline End Marker Bar -->
        <div class="w-full flex items-center justify-between font-mono text-[11px] text-gray-500 mb-12 pb-6 border-b border-[#1A1A1A]">
            <div class="flex items-center space-x-3">
                <span class="w-2 h-2 rounded-full bg-[#F5C442]"></span>
                <span class="tracking-widest text-[#F5C442] uppercase font-semibold">OUT-POINT MARKER: 01:00:00:00</span>
            </div>
            <div>
                <span class="tracking-widest uppercase">END OF TIMELINE -- RENDER COMPLETE</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            
            <!-- Col 1: Identity -->
            <div class="md:col-span-2 space-y-4">
                <div class="flex items-center space-x-3">
                    <span class="font-serif text-3xl font-extrabold text-[#F5C442] tracking-wider uppercase">
                        RAVINDRAN R
                    </span>
                    <span class="font-mono text-xs text-gray-400 font-bold border-l border-[#333] pl-3 uppercase">
                        VIDEO EDITOR
                    </span>
                </div>
                <p class="text-gray-400 font-inter text-sm max-w-md leading-relaxed">
                    Crafting cinematic narrative motion, rhythmic commercial edits, and high-end color grading for global brands, record labels, and film studios worldwide.
                </p>
                <div class="font-mono text-xs text-[#F5C442] flex items-center space-x-2 pt-2">
                    <span class="w-2 h-2 bg-[#F5C442] rounded-full animate-ping"></span>
                    <span>STUDIO STATUS: ACCEPTING COMMISSIONS</span>
                </div>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="space-y-3 font-inter text-sm">
                <h4 class="font-mono text-xs text-gray-500 uppercase tracking-wider mb-4">NAVIGATION TRACK</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}#showreel-section" class="text-gray-400 hover:text-[#F5C442] transition-colors">Showreel Showcase</a></li>
                    <li><a href="{{ route('projects.index') }}" class="text-gray-400 hover:text-[#F5C442] transition-colors">Selected Projects</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-[#F5C442] transition-colors">About & Suite Specs</a></li>
                    <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-[#F5C442] transition-colors">Post-Production Workflow</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-[#F5C442] transition-colors">Project Intake Brief</a></li>
                </ul>
            </div>

            <!-- Col 3: Social & Platforms -->
            <div class="space-y-3 font-inter text-sm">
                <h4 class="font-mono text-xs text-gray-500 uppercase tracking-wider mb-4">DIRECT CHANNELS</h4>
                <ul class="space-y-2 font-mono text-xs">
                    <li><a href="mailto:ravirv3882@gmail.com" class="text-gray-300 hover:text-[#F5C442] transition-colors font-bold">ravirv3882@gmail.com</a></li>
                    <li><a href="tel:+918220134740" class="text-gray-300 hover:text-[#F5C442] transition-colors font-bold">+91 8220134740</a></li>
                    <li><a href="https://instagram.com" target="_blank" class="text-gray-400 hover:text-[#F5C442] transition-colors flex items-center space-x-2"><span>INSTAGRAM</span><span class="text-[10px] text-gray-600">↗</span></a></li>
                    <li><a href="https://linkedin.com" target="_blank" class="text-gray-400 hover:text-[#F5C442] transition-colors flex items-center space-x-2"><span>LINKEDIN</span><span class="text-[10px] text-gray-600">↗</span></a></li>
                    <li><a href="https://youtube.com" target="_blank" class="text-gray-400 hover:text-[#F5C442] transition-colors flex items-center space-x-2"><span>YOUTUBE SHOWCASE</span><span class="text-[10px] text-gray-600">↗</span></a></li>
                    <li><a href="https://cutjamm.com/project/67f29186475181da19ec16e6" target="_blank" class="text-gray-400 hover:text-[#F5C442] transition-colors flex items-center space-x-2"><span>CUTJAMM PRO</span><span class="text-[10px] text-gray-600">↗</span></a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="mt-16 pt-8 border-t border-[#181818] flex flex-col sm:flex-row items-center justify-between text-xs text-gray-500 font-mono gap-4">
            <div>
                © {{ date('Y') }} RAVINDRAN R. ALL RIGHTS RESERVED.
            </div>
            <div class="flex items-center space-x-6">
                <span>BUILT WITH LARAVEL 13 & TAILWIND</span>
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="hover:text-[#F5C442] transition-colors flex items-center space-x-1">
                    <span>TOP</span>
                    <span>↑</span>
                </button>
            </div>
        </div>
    </div>
</footer>

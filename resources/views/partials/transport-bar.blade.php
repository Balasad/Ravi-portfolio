<header x-data class="fixed top-0 left-0 right-0 z-50 bg-[#0D0D0D]/95 backdrop-blur-lg border-b border-[#1A1A1A]">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        
        <!-- Left: Brand Logo (RAVINDRAN R) -->
        <div class="flex items-center space-x-4">
            <a href="{{ route('home') }}" class="group flex items-center space-x-3">
                <span class="font-serif text-2xl sm:text-3xl font-extrabold tracking-wider text-[#F5C442] uppercase group-hover:text-white transition-colors">
                    RAVINDRAN R
                </span>
            </a>
        </div>

        <!-- Center: Navigation Track -->
        <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-gray-300">
            <a href="{{ route('home') }}#showreel-section" class="hover:text-white transition-colors py-2 relative text-white border-b-2 border-[#F5C442]">
                Showreel
            </a>
            <a href="{{ route('home') }}#projects-section" class="hover:text-white transition-colors py-2">
                Projects
            </a>
            <a href="{{ route('home') }}#skills-section" class="hover:text-white transition-colors py-2">
                Skills
            </a>
            <a href="{{ route('home') }}#process-section" class="hover:text-white transition-colors py-2">
                Process
            </a>
            <a href="{{ route('contact') }}" class="hover:text-white transition-colors py-2">
                Contact
            </a>
        </nav>

        <!-- Right: Hire Me Action Button -->
        <div class="flex items-center space-x-4">
            <a href="{{ route('contact') }}" class="px-6 py-2.5 bg-[#F5C442] text-black font-semibold text-sm rounded-xs hover:bg-[#e5b738] transition-all transform hover:scale-[1.03] shadow-[0_0_15px_rgba(245,196,66,0.3)]">
                Hire Me
            </a>
        </div>

    </div>
</header>

<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Best Practices -->
    <title>@yield('title', 'DIRECTOR\'S CUT — RAVINDRAN R | Senior Video Editor & Motion Artist')</title>
    <meta name="description" content="@yield('meta_description', 'High-end cinematic video editor, motion graphics artist, and visual storyteller specializing in commercial campaigns, narrative films, music videos, and 4K color grading.')">
    <meta name="keywords" content="Ravindran R, Video Editor, Motion Graphics Artist, Visual Storyteller, Colorist, DaVinci Resolve, Premiere Pro, Commercial Editor, Cinema">
    <meta name="author" content="Ravindran R">
    
    <!-- Open Graph / Social Media Meta -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'DIRECTOR\'S CUT — RAVINDRAN R | Senior Video Editor')">
    <meta property="og:description" content="Cinematic portfolio showcasing commercial campaigns, narrative shorts, 4K color grading, and high-energy music videos by Ravindran R.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?q=80&w=1200&auto=format&fit=crop">
    
    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'DIRECTOR\'S CUT — RAVINDRAN R')">
    <meta name="twitter:description" content="Cinematic portfolio showcasing high-end commercial, narrative, and motion graphics editing.">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect width='100' height='100' fill='%230D0D0D'/><text y='70' x='15' font-size='65' fill='%23F5C442' font-family='serif' font-weight='bold'>RR</text></svg>">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0D0D0D] text-white font-inter antialiased selection:bg-[#F5C442] selection:text-black min-h-screen flex flex-col film-grain">
    
    <!-- Top Fixed Studio Transport Bar -->
    @include('partials.transport-bar')

    <!-- Main Content Area -->
    <main class="flex-grow pt-16">
        @yield('content')
    </main>

    <!-- Global Fullscreen 4K Showreel Modal -->
    @include('partials.showreel-modal')

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>

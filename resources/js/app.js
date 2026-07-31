import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Register Plugins
gsap.registerPlugin(ScrollTrigger);
Alpine.plugin(intersect);

window.Alpine = Alpine;
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

// Global Timeline Store for Alpine
Alpine.store('timeline', {
    timecode: '00:00:00:00',
    fps: '24.00 FPS',
    activeSection: 'HERO',
    showreelModalOpen: false,
    showreelVideoUrl: 'https://player.vimeo.com/video/352243405?autoplay=1&title=0&byline=0&portrait=0',
    isMuted: true,
    shortcutModalOpen: false,

    openShowreel(videoUrl = null) {
        if (videoUrl) {
            this.showreelVideoUrl = videoUrl;
        }
        this.showreelModalOpen = true;
        document.body.style.overflow = 'hidden';
    },

    closeShowreel() {
        this.showreelModalOpen = false;
        document.body.style.overflow = 'auto';
    },

    toggleAudio() {
        this.isMuted = !this.isMuted;
    }
});

Alpine.start();

// Initialize AOS
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50
    });

    // Timecode calculation based on window scroll progress
    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
        const scrollPercent = maxScroll > 0 ? scrollTop / maxScroll : 0;

        // Convert 0-100% into HH:MM:SS:FF timecode (1 hour timeline max: 01:00:00:00)
        const totalFrames = Math.floor(scrollPercent * 86400); // 1 hour at 24fps
        const hours = String(Math.floor(totalFrames / (24 * 3600))).padStart(2, '0');
        const minutes = String(Math.floor((totalFrames % (24 * 3600)) / (24 * 60))).padStart(2, '0');
        const seconds = String(Math.floor((totalFrames % (24 * 60)) / 24)).padStart(2, '0');
        const frames = String(totalFrames % 24).padStart(2, '0');

        Alpine.store('timeline').timecode = `${hours}:${minutes}:${seconds}:${frames}`;
    });

    // Keyboard Transport Controls (Space for reel modal, K for shortcuts)
    window.addEventListener('keydown', (e) => {
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') return;

        if (e.code === 'Space') {
            e.preventDefault();
            const store = Alpine.store('timeline');
            if (store.showreelModalOpen) {
                store.closeShowreel();
            } else {
                store.openShowreel();
            }
        }
    });

    // GSAP Timeline Playhead Scrub Bar Animation
    const playheadScrubber = document.querySelector('#global-playhead-progress');
    if (playheadScrubber) {
        gsap.to(playheadScrubber, {
            width: '100%',
            ease: 'none',
            scrollTrigger: {
                trigger: document.body,
                start: 'top top',
                end: 'bottom bottom',
                scrub: 0.3
            }
        });
    }

    // GSAP Hero Text Stagger Reveal
    const heroTitle = document.querySelector('.hero-title-reveal');
    if (heroTitle) {
        gsap.from(heroTitle, {
            y: 60,
            opacity: 0,
            duration: 1.2,
            ease: 'power4.out',
            delay: 0.2
        });
    }
});

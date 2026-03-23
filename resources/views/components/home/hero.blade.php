 <!-- Cinematic Hero Section -->
 <section class="relative h-screen flex items-center justify-center overflow-hidden bg-black">
     <div class="absolute inset-0 z-0">
         <img alt="Luxury resort cinematic view"
             class="w-full h-full object-cover scale-105 animate-[subtle-zoom_20s_infinite_alternate]"
             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiZNG_1brDtu3GMIj625b16yik7hyH_O2BJGcM3L0CFPRZhi-cVR_rLBkZnfYLRYVAI4v_OuhWk4F8FYzwqjmGeRcpRuf1txnFU3D2cWEIwMpssEKx30kGc9E8Jmk2PKkC7o7KHIzmT2gHLfr8wuyFefpyrQw3Cgz3_ePcIrJu3tsm5tYl5M84dI-wOURUJG17RaAOGXnf9ZIfeYZY5ON19K7q7wKzXlDDpwVM6dEnw67639SGpqTMIzdbGQNvDKO_hD8tVCcON-M" />
         <div class="absolute inset-0 bg-black/30 hero-vignette"></div>
     </div>
     <style>
         @keyframes subtle-zoom {
             from {
                 transform: scale(1);
             }

             to {
                 transform: scale(1.1);
             }
         }
     </style>
     <div class="relative z-10 text-center px-6 max-w-5xl">
         <div class="overflow-hidden mb-4">
             <span class="inline-block text-white/70 font-label tracking-[0.5em] uppercase text-xs text-reveal"
                 style="animation-delay: 0.2s;">Private Luxury Reimagined</span>
         </div>
         <div class="overflow-hidden pt-3 md:pt-4 mb-12">
             <h1 class="font-headline text-6xl md:text-[120px] text-white leading-[1.05] md:leading-[1] text-reveal italic"
                 style="animation-delay: 0.4s;">The Art of Being</h1>
         </div>
         <div class="flex flex-col md:flex-row items-center justify-center gap-12 text-reveal"
             style="animation-delay: 0.6s;">
             <button class="group flex items-center gap-4 text-white font-label text-xs tracking-[0.3em] uppercase">
                 <span class="w-12 h-[1px] bg-white/40 group-hover:w-20 transition-all duration-500"></span>
                 Explore Suites
             </button>
             <a class="group flex flex-col items-center gap-4" href="#film-section">
                 <div
                     class="w-16 h-16 rounded-full border border-white/40 flex items-center justify-center play-button-pulse group-hover:bg-white group-hover:border-white transition-all duration-500">
                     <span
                         class="material-symbols-outlined text-white group-hover:text-primary transition-colors">play_arrow</span>
                 </div>
                 <span
                     class="text-white/60 font-label text-[10px] tracking-[0.2em] uppercase group-hover:text-white transition-colors">Watch
                     Film</span>
             </a>
         </div>
     </div>
     <div class="absolute bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center gap-4 opacity-40">
         <div class="w-[1px] h-16 bg-gradient-to-b from-white to-transparent"></div>
     </div>
 </section>

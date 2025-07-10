<div class="relative w-full h-screen overflow-hidden bg-black" id="carousel">
    {{-- Background with animated gradient --}}
    <div class="absolute inset-0 bg-gradient-to-br from-purple-600 via-blue-600 to-cyan-500 opacity-90 transition-all duration-1000" id="background-gradient">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
    </div>

    {{-- Tech grid pattern overlay --}}
    <div class="absolute inset-0 opacity-10">
        <div class="grid grid-cols-12 grid-rows-8 h-full w-full">
            @for ($i = 0; $i < 96; $i++)
                <div class="border border-white border-opacity-20 animate-pulse" style="animation-delay: {{ $i * 0.1 }}s"></div>
            @endfor
        </div>
    </div>

    {{-- Floating particles --}}
    <div class="absolute inset-0">
        @for ($i = 0; $i < 20; $i++)
            <div class="absolute w-2 h-2 bg-white rounded-full opacity-30 animate-pulse"
                 style="left: {{ rand(0, 100) }}%; top: {{ rand(0, 100) }}%; animation-delay: {{ rand(0, 3) }}s; animation-duration: {{ 3 + rand(0, 2) }}s"></div>
        @endfor
    </div>

    {{-- Main content --}}
    <div class="relative z-10 h-full flex items-center">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                {{-- Left side - Content --}}
                <div class="text-white space-y-8 animate-fade-in" id="slide-content">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="p-3 bg-white bg-opacity-10 backdrop-blur-lg rounded-xl border border-white border-opacity-20">
                                <svg class="h-8 w-8 text-white" id="slide-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <!-- Brain icon -->
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <span class="text-lg font-medium text-white text-opacity-80 tracking-wide" id="slide-subtitle">
                                Machine Learning & IA
                            </span>
                        </div>
                        
                        <h1 class="text-4xl lg:text-6xl xl:text-7xl font-bold leading-tight bg-gradient-to-r from-white to-white to-opacity-70 bg-clip-text text-transparent" id="slide-title">
                            Transforme Dados em Decisões Inteligentes
                        </h1>
                    </div>

                    <p class="text-xl lg:text-2xl text-white text-opacity-90 leading-relaxed max-w-2xl" id="slide-description">
                        Revolucione seu negócio com algoritmos que aprendem, predizem e otimizam. Nossa plataforma fornece insights com Inteligência Artificial que impulsionam seu crescimento.
                    </p>

                    {{-- Services list --}}
                    <div class="space-y-3" id="slide-services">
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                            <span class="text-white text-opacity-90 text-lg">Análise Preditiva</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                            <span class="text-white text-opacity-90 text-lg">Automação Inteligente</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                            <span class="text-white text-opacity-90 text-lg">Processamento de Linguagem Natural</span>
                        </div>
                    </div>

                    {{-- CTA Button --}}
                    <div class="pt-4">
                        <button class="group bg-white text-black px-8 py-4 rounded-xl font-bold text-lg hover:bg-white hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center space-x-3" id="slide-cta">
                            <span>Descubra o Poder da IA</span>
                            <svg class="h-5 w-5 group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Right side - Visual element --}}
                <div class="hidden lg:flex justify-center items-center">
                    <div class="relative">
                        {{-- Central glow --}}
                        <div class="absolute inset-0 bg-white bg-opacity-20 rounded-full blur-3xl scale-150 animate-pulse"></div>
                        
                        {{-- Main icon container --}}
                        <div class="relative w-64 h-64 bg-white bg-opacity-10 backdrop-blur-lg rounded-full border border-white border-opacity-30 flex items-center justify-center">
                            <svg class="h-32 w-32 text-white animate-pulse" id="main-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <!-- Brain icon -->
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>

                        {{-- Orbiting elements --}}
                        <div class="absolute w-16 h-16 bg-white bg-opacity-10 backdrop-blur-lg rounded-full border border-white border-opacity-20 flex items-center justify-center animate-spin" style="top: 10%; left: 50%; transform: translate(-50%, -50%); animation-duration: 10s;">
                            <svg class="h-8 w-8 text-white text-opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        
                        <div class="absolute w-16 h-16 bg-white bg-opacity-10 backdrop-blur-lg rounded-full border border-white border-opacity-20 flex items-center justify-center animate-spin" style="top: 50%; left: 90%; transform: translate(-50%, -50%); animation-duration: 12s; animation-direction: reverse;">
                            <svg class="h-8 w-8 text-white text-opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                            </svg>
                        </div>
                        
                        <div class="absolute w-16 h-16 bg-white bg-opacity-10 backdrop-blur-lg rounded-full border border-white border-opacity-20 flex items-center justify-center animate-spin" style="top: 90%; left: 50%; transform: translate(-50%, -50%); animation-duration: 14s;">
                            <svg class="h-8 w-8 text-white text-opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        
                        <div class="absolute w-16 h-16 bg-white bg-opacity-10 backdrop-blur-lg rounded-full border border-white border-opacity-20 flex items-center justify-center animate-spin" style="top: 50%; left: 10%; transform: translate(-50%, -50%); animation-duration: 16s; animation-direction: reverse;">
                            <svg class="h-8 w-8 text-white text-opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Navigation arrows --}}
    <button onclick="previousSlide()" class="absolute left-6 top-1/2 transform -translate-y-1/2 z-20 p-3 bg-white bg-opacity-10 backdrop-blur-lg rounded-full border border-white border-opacity-20 text-white hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
        <svg class="h-6 w-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>

    <button onclick="nextSlide()" class="absolute right-6 top-1/2 transform -translate-y-1/2 z-20 p-3 bg-white bg-opacity-10 backdrop-blur-lg rounded-full border border-white border-opacity-20 text-white hover:bg-white hover:bg-opacity-20 transition-all duration-300 group">
        <svg class="h-6 w-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>

    {{-- Slide indicators --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 flex space-x-3" id="slide-indicators">
        <button onclick="goToSlide(0)" class="w-3 h-3 rounded-full border-2 border-white transition-all duration-300 bg-white scale-125 slide-indicator active"></button>
        <button onclick="goToSlide(1)" class="w-3 h-3 rounded-full border-2 border-white transition-all duration-300 bg-transparent hover:bg-white hover:bg-opacity-50 slide-indicator"></button>
        <button onclick="goToSlide(2)" class="w-3 h-3 rounded-full border-2 border-white transition-all duration-300 bg-transparent hover:bg-white hover:bg-opacity-50 slide-indicator"></button>
        <button onclick="goToSlide(3)" class="w-3 h-3 rounded-full border-2 border-white transition-all duration-300 bg-transparent hover:bg-white hover:bg-opacity-50 slide-indicator"></button>
    </div>

    {{-- Progress bar --}}
    <div class="absolute bottom-0 left-0 w-full h-1 bg-white bg-opacity-20">
        <div class="h-full bg-white transition-all duration-500" id="progress-bar" style="width: 25%"></div>
    </div>
</div>

<style>
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in {
        animation: fade-in 0.8s ease-out;
    }
    
    .slide-indicator.active {
        background-color: white !important;
        transform: scale(1.25) !important;
    }
</style>

<script>
    let currentSlide = 0;
    let isAutoPlaying = true;
    let autoPlayInterval;

    const slides = [
        {
            title: "Transforme Dados em Decisões Inteligentes",
            subtitle: "Machine Learning & IA",
            description: "Revolucione seu negócio com algoritmos que aprendem, predizem e otimizam. Nossa plataforma fornece insights com Inteligência Artificial que impulsionam seu crescimento.",
            gradient: "from-purple-600 via-blue-600 to-cyan-500",
            services: ["Análise Preditiva", "Automação Inteligente", "Processamento de Linguagem Natural"],
            cta: "Descubra o Poder da IA",
            icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>`
        },
        {
            title: "Soluções Web que Funcionam de verdade!",
            subtitle: "Desenvolvimento de Sistemas Avançado",
            description: "Criamos experiências digitais que não apenas impressionam, mas geram resultados reais. Cada linha de código é pensada para maximizar seu Retorno sobre o Investimento.",
            gradient: "from-emerald-500 via-teal-500 to-blue-500",
            services: ["Plataformas E-commerce", "Sistemas Corporativos", "Progressive Web Apps"],
            cta: "Acelere Sua Presença Digital",
            icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>`
        },
        {
            title: "Big Data que Impulsiona Resultados",
            subtitle: "Análise de Dados Estratégica",
            description: "Transformamos seus dados em fontes de lucro para seu negócio. Descubra padrões ocultos que seus concorrentes ainda não viram.",
            gradient: "from-orange-500 via-red-500 to-pink-500",
            services: ["Data Warehousing", "Business Intelligence", "Analytics em Tempo Real"],
            cta: "Monetize Seus Dados",
            icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>`
        },
        {
            title: "Automação que Multiplica Produtividade",
            subtitle: "Bots & Automação Inteligente",
            description: "Liberte sua equipe das tarefas repetitivas. Criamos agentes de IA que trabalham 24/7 para que você foque no que realmente importa: Alavancar seu crescimento!",
            gradient: "from-indigo-600 via-purple-600 to-pink-500",
            services: ["Chatbots Inteligentes", "RPA (Automação de Processos)", "Integração de Sistemas"],
            cta: "Automatize Agora",
            icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>`
        }
    ];

    function updateSlide() {
        const slide = slides[currentSlide];
        
        // Update background gradient
        document.getElementById('background-gradient').className = `absolute inset-0 bg-gradient-to-br ${slide.gradient} opacity-90 transition-all duration-1000`;
        
        // Update content
        document.getElementById('slide-title').textContent = slide.title;
        document.getElementById('slide-subtitle').textContent = slide.subtitle;
        document.getElementById('slide-description').textContent = slide.description;
        
        // Update services
        const servicesContainer = document.getElementById('slide-services');
        servicesContainer.innerHTML = '';
        slide.services.forEach(service => {
            const serviceElement = document.createElement('div');
            serviceElement.className = 'flex items-center space-x-3';
            serviceElement.innerHTML = `
                <div class="w-2 h-2 bg-white rounded-full"></div>
                <span class="text-white text-opacity-90 text-lg">${service}</span>
            `;
            servicesContainer.appendChild(serviceElement);
        });
        
        // Update CTA
        document.getElementById('slide-cta').querySelector('span').textContent = slide.cta;
        
        // Update icons
        document.getElementById('slide-icon').innerHTML = slide.icon;
        document.getElementById('main-icon').innerHTML = slide.icon;
        
        // Update indicators
        document.querySelectorAll('.slide-indicator').forEach((indicator, index) => {
            if (index === currentSlide) {
                indicator.classList.add('active');
                indicator.classList.remove('bg-transparent');
                indicator.classList.add('bg-white', 'scale-125');
            } else {
                indicator.classList.remove('active');
                indicator.classList.add('bg-transparent');
                indicator.classList.remove('bg-white', 'scale-125');
            }
        });
        
        // Update progress bar
        document.getElementById('progress-bar').style.width = `${((currentSlide + 1) / slides.length) * 100}%`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        updateSlide();
    }

    function previousSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        updateSlide();
    }

    function goToSlide(index) {
        currentSlide = index;
        updateSlide();
        stopAutoPlay();
        setTimeout(() => startAutoPlay(), 15000);
    }

    function startAutoPlay() {
        if (isAutoPlaying) {
            autoPlayInterval = setInterval(nextSlide, 15000);
        }
    }

    function stopAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
        }
    }

    // Initialize carousel
    document.addEventListener('DOMContentLoaded', function() {
        updateSlide();
        startAutoPlay();
        
        // Pause autoplay on hover
        document.getElementById('carousel').addEventListener('mouseenter', stopAutoPlay);
        document.getElementById('carousel').addEventListener('mouseleave', startAutoPlay);
    });
</script>
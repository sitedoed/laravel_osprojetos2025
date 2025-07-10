{{-- resources/views/components/hero-title.blade.php --}}
@props([
    'title' => 'Título Principal',
    'subtitle' => 'Subtítulo',
    'description' => 'Descrição do serviço ou produto.',
    'badgeText' => 'Inovação & Tecnologia',
    'badgeIcon' => 'sparkles'
])

<div class="text-center mb-16">
    {{-- Badge Component --}}
    <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-full text-blue-700 font-medium text-sm mb-6 hover:from-blue-100 hover:to-indigo-100 transition-all duration-300">
        {{-- Badge Icon --}}
        @if($badgeIcon === 'sparkles')
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
            </svg>
        @elseif($badgeIcon === 'brain')
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
        @elseif($badgeIcon === 'code')
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
            </svg>
        @elseif($badgeIcon === 'database')
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
            </svg>
        @elseif($badgeIcon === 'bot')
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
            </svg>
        @elseif($badgeIcon === 'trending')
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
            </svg>
        @elseif($badgeIcon === 'zap')
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
        @elseif($badgeIcon === 'check')
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        @else
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
            </svg>
        @endif
        <span>{{ $badgeText }}</span>
    </div>

    {{-- Main Title --}}
    <h1 class="text-5xl lg:text-7xl font-bold mb-6 mt-6 bg-gradient-to-r from-slate-700 via-blue-700 to-indigo-700 bg-clip-text text-transparent leading-tight">
        {{ $title }}
        <br />
        <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
            {{ $subtitle }}
        </span>
    </h1>

    {{-- Description --}}
    <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
        {{ $description }}
    </p>
</div>

{{-- Animated elements for enhanced visual appeal --}}
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    @keyframes pulse-glow {
        0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
        50% { box-shadow: 0 0 30px rgba(59, 130, 246, 0.5); }
    }
    
    .hero-title h1 {
        animation: float 6s ease-in-out infinite;
    }
    
    .hero-badge {
        animation: pulse-glow 3s ease-in-out infinite;
    }
</style>

<script>
    // Add some interactivity
    document.addEventListener('DOMContentLoaded', function() {
        // Add floating animation class
        const heroTitle = document.querySelector('.text-5xl');
        if (heroTitle) {
            heroTitle.closest('div').classList.add('hero-title');
        }
        
        // Add glow effect to badge
        const badge = document.querySelector('.inline-flex');
        if (badge) {
            badge.classList.add('hero-badge');
        }
    });
</script>
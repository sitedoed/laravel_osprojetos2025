{{-- resources/views/components/contact-form.blade.php --}}
@props([
    'title' => 'Ponha em prática seus projetos!',
    'subtitle' => 'Estamos aqui para te ajudar a torná-los realidade!',
    'action' => null,
    'method' => 'POST'
])

@php
    $contactInfo = [
        [
            'icon' => 'mail',
            'title' => 'Email',
            'content' => 'dev@osprojetos.com.br',
            'subContent' => '',
            'color' => 'from-blue-500 to-cyan-500'
        ],
        [
            'icon' => 'map-pin',
            'title' => 'Localização',
            'content' => 'São Paulo, SP',
            'subContent' => 'Atendimento remoto',
            'color' => 'from-purple-500 to-pink-500'
        ],
        [
            'icon' => 'clock',
            'title' => 'Horário',
            'content' => '9h às 18h',
            'subContent' => 'Segunda à Sexta',
            'color' => 'from-orange-500 to-red-500'
        ]
    ];

    $socialLinks = [
        ['icon' => 'linkedin', 'href' => '#', 'label' => 'LinkedIn'],
        ['icon' => 'github', 'href' => '#', 'label' => 'GitHub'],
        ['icon' => 'twitter', 'href' => '#', 'label' => 'Twitter'],
        ['icon' => 'globe', 'href' => '#', 'label' => 'Website']
    ];

    $services = [
        'Desenvolvimento Web',
        'Machine Learning & IA',
        'Análise de Dados',
        'Automação de Processos',
        'Consultoria Tech',
        'Outro'
    ];

    $formData = [
        'name' => old('name', ''),
        'email' => old('email', ''),
        'company' => old('company', ''),
        'phone' => old('phone', ''),
        'service' => old('service', ''),
        'message' => old('message', '')
    ];

    $isSubmitted = session()->has('success');
    $actionUrl = $action ?? route('contact.store');
@endphp

<div id="contato" class="max-w-7xl mx-auto py-16 lg:py-24 px-4 lg:px-8">
    {{-- Título da seção --}}
    <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-50 to-purple-50 rounded-full border border-blue-100 mb-6">
            <x-icon name="sparkles" class="w-4 h-4 text-blue-500" />
            <span class="text-sm font-semibold text-blue-600 uppercase tracking-wider">
                Entre em Contato
            </span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-slate-800 mb-4">
            Ponha <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">{{ $title }}</span>
        </h1>
        <p class="text-xl text-slate-600 max-w-3xl mx-auto">
            {{ $subtitle }}
        </p>
    </div>

    {{-- Conteúdo Principal --}}
    <div 
        id="contato-content"
        class="transition-all duration-1000 ease-out opacity-0 translate-y-8"
        x-data="{ isVisible: false }"
        x-intersect="isVisible = true"
        :class="{ 'opacity-100 translate-y-0': isVisible }"
    >
        <div class="grid lg:grid-cols-5 gap-12">
            {{-- Informações de Contato - 2/5 --}}
            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white/70 backdrop-blur-xl border border-slate-200/50 rounded-3xl p-8 shadow-xl">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">
                        Informações de Contato
                    </h2>
                    
                    <div class="space-y-6">
                        @foreach($contactInfo as $info)
                            <div class="flex items-start gap-4">
                                <div class="p-3 rounded-2xl bg-gradient-to-r {{ $info['color'] }} shadow-lg flex-shrink-0">
                                    <x-icon name="{{ $info['icon'] }}" class="w-5 h-5 text-white" />
                                </div>
                                <div>
                                    <h3 class="font-semibold text-slate-800">{{ $info['title'] }}</h3>
                                    <p class="text-slate-600 font-medium">{{ $info['content'] }}</p>
                                    @if($info['subContent'])
                                        <p class="text-sm text-slate-500">{{ $info['subContent'] }}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Redes Sociais --}}
                    <div class="hidden mt-8 pt-6 border-t border-slate-100">
                        <h3 class="font-semibold text-slate-800 mb-4">Nos siga</h3>
                        <div class="flex gap-3">
                            @foreach($socialLinks as $social)
                                <a
                                    href="{{ $social['href'] }}"
                                    class="p-3 bg-slate-100 hover:bg-gradient-to-r hover:from-blue-500 hover:to-purple-500 rounded-xl transition-all duration-300 group"
                                    aria-label="{{ $social['label'] }}"
                                >
                                    <x-icon name="{{ $social['icon'] }}" class="w-5 h-5 text-slate-600 group-hover:text-white transition-colors" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Formulário - 3/5 --}}
            <div class="lg:col-span-3">
                <div class="bg-white/70 backdrop-blur-xl border border-slate-200/50 rounded-3xl p-8 shadow-xl">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">
                        Envie sua Mensagem
                    </h2>

                    @if($isSubmitted)
                        <div class="text-center py-12" id="success-message">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <x-icon name="check-circle" class="w-8 h-8 text-green-600" />
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Mensagem Enviada!</h3>
                            <p class="text-slate-600">
                                {{ session('success', 'Obrigado pelo contato. Retornaremos em breve!') }}
                            </p>
                        </div>
                    @else
                        <form 
                            action="{{ $actionUrl }}" 
                            method="{{ $method }}" 
                            id="contact-form"
                            class="space-y-6"
                            x-data="contactForm()"
                            @submit="handleSubmit"
                        >
                            @csrf
                            
                            {{-- Nome e Email --}}
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">
                                        Nome *
                                    </label>
                                    <div class="relative">
                                        <x-icon name="user" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" />
                                        <input
                                            type="text"
                                            name="name"
                                            value="{{ $formData['name'] }}"
                                            required
                                            class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50 @error('name') border-red-500 @enderror"
                                            placeholder="Seu nome"
                                        />
                                    </div>
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">
                                        Email *
                                    </label>
                                    <div class="relative">
                                        <x-icon name="mail" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" />
                                        <input
                                            type="email"
                                            name="email"
                                            value="{{ $formData['email'] }}"
                                            required
                                            class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50 @error('email') border-red-500 @enderror"
                                            placeholder="seu@email.com"
                                        />
                                    </div>
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Empresa e Telefone --}}
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">
                                        Empresa
                                    </label>
                                    <div class="relative">
                                        <x-icon name="building" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" />
                                        <input
                                            type="text"
                                            name="company"
                                            value="{{ $formData['company'] }}"
                                            class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50 @error('company') border-red-500 @enderror"
                                            placeholder="Nome da empresa"
                                        />
                                    </div>
                                    @error('company')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">
                                        Telefone
                                    </label>
                                    <div class="relative">
                                        <x-icon name="phone" class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" />
                                        <input
                                            type="tel"
                                            name="phone"
                                            value="{{ $formData['phone'] }}"
                                            class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50 @error('phone') border-red-500 @enderror"
                                            placeholder="(11) 99999-9999"
                                            x-mask="(99) 99999-9999"
                                        />
                                    </div>
                                    @error('phone')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Serviço --}}
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Serviço de Interesse
                                </label>
                                <select
                                    name="service"
                                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50 @error('service') border-red-500 @enderror"
                                >
                                    <option value="">Selecione um serviço</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service }}" {{ $formData['service'] == $service ? 'selected' : '' }}>
                                            {{ $service }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('service')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Mensagem --}}
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Mensagem *
                                </label>
                                <div class="relative">
                                    <x-icon name="message-square" class="absolute left-3 top-3 w-5 h-5 text-slate-400" />
                                    <textarea
                                        name="message"
                                        required
                                        rows="4"
                                        class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50 resize-none @error('message') border-red-500 @enderror"
                                        placeholder="Conte-nos sobre seu projeto e como podemos ajudar..."
                                    >{{ $formData['message'] }}</textarea>
                                </div>
                                @error('message')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Botão Submit --}}
                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium py-4 px-6 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-[1.02] disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none flex items-center justify-center gap-2"
                                :disabled="isSubmitting"
                            >
                                <template x-if="isSubmitting">
                                    <div>
                                        <div class="w-5 h-5 border-2 border-white/30 border-t-white rounded-full animate-spin"></div>
                                        <span>Enviando...</span>
                                    </div>
                                </template>
                                <template x-if="!isSubmitting">
                                    <div class="flex items-center gap-2">
                                        <x-icon name="send" class="w-5 h-5" />
                                        <span>Enviar Mensagem</span>
                                    </div>
                                </template>
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .bg-clip-text {
        -webkit-background-clip: text;
        background-clip: text;
    }
    
    .backdrop-blur-xl {
        backdrop-filter: blur(24px);
    }
</style>
@endpush

@push('scripts')
<script>
    function contactForm() {
        return {
            isSubmitting: false,
            
            handleSubmit(event) {
                this.isSubmitting = true;
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Intersection Observer para animações
        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            },
            {
                threshold: 0.1,
                rootMargin: '50px'
            }
        );

        const element = document.getElementById('contato-content');
        if (element) {
            observer.observe(element);
        }

        // Auto-hide success message
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(() => {
                successMessage.style.transition = 'opacity 0.5s ease-out';
                successMessage.style.opacity = '0';
                setTimeout(() => {
                    successMessage.remove();
                }, 500);
            }, 3000);
        }
    });
</script>
@endpush
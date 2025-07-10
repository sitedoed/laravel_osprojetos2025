@extends('layouts.frontend')

@section('title', 'Contato')

@section('content')
<div id="contato" class="max-w-7xl mx-auto py-16 lg:py-24 px-4 lg:px-8">
    <!-- Título da seção -->
    <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-50 to-purple-50 rounded-full border border-blue-100 mb-6">
            <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            <span class="text-sm font-semibold text-blue-600 uppercase tracking-wider">
                Entre em Contato
            </span>
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-slate-800 mb-4">
            Ponha em prática seus projetos! <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">em prática seus projetos!</span>
        </h1>
        <p class="text-xl text-slate-600 max-w-3xl mx-auto">
            Estamos aqui para te ajudar a torná-los realidade!
        </p>
    </div>

    <!-- Conteúdo Principal -->
    <div id="contato-content" class="transition-all duration-1000 ease-out opacity-100 translate-y-0">
        <div class="grid lg:grid-cols-5 gap-12">
            <!-- Informações de Contato - 2/5 -->
            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white/70 backdrop-blur-xl border border-slate-200/50 rounded-3xl p-8 shadow-xl">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">
                        Informações de Contato
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Email -->
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 shadow-lg flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-800">Email</h3>
                                <p class="text-slate-600 font-medium">dev@osprojetos.com.br</p>
                            </div>
                        </div>
                        
                        <!-- Localização -->
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-2xl bg-gradient-to-r from-purple-500 to-pink-500 shadow-lg flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-800">Localização</h3>
                                <p class="text-slate-600 font-medium">São Paulo, SP</p>
                                <p class="text-sm text-slate-500">Atendimento remoto</p>
                            </div>
                        </div>
                        
                        <!-- Horário -->
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-2xl bg-gradient-to-r from-orange-500 to-red-500 shadow-lg flex-shrink-0">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-800">Horário</h3>
                                <p class="text-slate-600 font-medium">9h às 18h</p>
                                <p class="text-sm text-slate-500">Segunda à Sexta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulário - 3/5 -->
            <div class="lg:col-span-3">
                <div class="bg-white/70 backdrop-blur-xl border border-slate-200/50 rounded-3xl p-8 shadow-xl">
                    <h2 class="text-2xl font-bold text-slate-800 mb-6">
                        Envie sua Mensagem
                    </h2>

                    @if(session('success'))
                        <div class="text-center py-12">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Mensagem Enviada!</h3>
                            <p class="text-slate-600">
                                Obrigado pelo contato. Retornaremos em breve!
                            </p>
                        </div>
                    @else
                        <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
                            @csrf
                            
                            <!-- Nome e Email -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">
                                        Nome *
                                    </label>
                                    <div class="relative">
                                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <input
                                            type="text"
                                            name="name"
                                            required
                                            class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50"
                                            placeholder="Seu nome"
                                            value="{{ old('name') }}"
                                        />
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">
                                        Email *
                                    </label>
                                    <div class="relative">
                                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <input
                                            type="email"
                                            name="email"
                                            required
                                            class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50"
                                            placeholder="seu@email.com"
                                            value="{{ old('email') }}"
                                        />
                                    </div>
                                </div>
                            </div>

                            <!-- Empresa e Telefone -->
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">
                                        Empresa
                                    </label>
                                    <div class="relative">
                                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        <input
                                            type="text"
                                            name="company"
                                            class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50"
                                            placeholder="Nome da empresa"
                                            value="{{ old('company') }}"
                                        />
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2">
                                        Telefone
                                    </label>
                                    <div class="relative">
                                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                        <input
                                            type="tel"
                                            name="phone"
                                            class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50"
                                            placeholder="(11) 99999-9999"
                                            value="{{ old('phone') }}"
                                        />
                                    </div>
                                </div>
                            </div>

                            <!-- Serviço -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Serviço de Interesse
                                </label>
                                <select
                                    name="service"
                                    class="w-full px-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50"
                                >
                                    <option value="">Selecione um serviço</option>
                                    <option value="Desenvolvimento Web" {{ old('service') == 'Desenvolvimento Web' ? 'selected' : '' }}>Desenvolvimento Web</option>
                                    <option value="Machine Learning & IA" {{ old('service') == 'Machine Learning & IA' ? 'selected' : '' }}>Machine Learning & IA</option>
                                    <option value="Análise de Dados" {{ old('service') == 'Análise de Dados' ? 'selected' : '' }}>Análise de Dados</option>
                                    <option value="Automação de Processos" {{ old('service') == 'Automação de Processos' ? 'selected' : '' }}>Automação de Processos</option>
                                    <option value="Consultoria Tech" {{ old('service') == 'Consultoria Tech' ? 'selected' : '' }}>Consultoria Tech</option>
                                    <option value="Outro" {{ old('service') == 'Outro' ? 'selected' : '' }}>Outro</option>
                                </select>
                            </div>

                            <!-- Mensagem -->
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">
                                    Mensagem *
                                </label>
                                <div class="relative">
                                    <svg class="absolute left-3 top-3 w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                    </svg>
                                    <textarea
                                        name="message"
                                        required
                                        rows="4"
                                        class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white/50 resize-none"
                                        placeholder="Conte-nos sobre seu projeto e como podemos ajudar..."
                                    >{{ old('message') }}</textarea>
                                </div>
                            </div>

                            <!-- Botão Submit -->
                            <button
                                type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white font-medium py-4 px-6 rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-[1.02] flex items-center justify-center gap-2"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                Enviar Mensagem
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
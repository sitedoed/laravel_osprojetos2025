<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - OsProjetos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    @include('layouts.partials.nav')
    
    <main class="py-4">
        @yield('content')
    </main>
    
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
</body>
</html>
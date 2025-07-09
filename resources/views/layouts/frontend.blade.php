<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
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
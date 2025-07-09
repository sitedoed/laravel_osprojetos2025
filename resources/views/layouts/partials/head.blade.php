<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', config('app.name'))</title>

<!-- Favicon -->
<link rel="icon" href="{{ asset('favicon.ico') }}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- CSS -->
@vite(['resources/css/app.css'])
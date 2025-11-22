{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard HOSTVPS - Pengguna')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'main-dark': '#1A2138',
                        'card-dark': '#26304D',
                        'accent-purple': '#8E67F6',
                        'accent-orange': '#FF8A00',
                        'accent-yellow': '#FFC700',
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    boxShadow: {
                        'neon-purple': '0 0 10px rgba(142,103,246,0.7),0 0 20px rgba(142,103,246,0.5)',
                        'sm-neon': '0 0 5px rgba(142,103,246,0.5)',
                        'neon-orange': '0 0 10px rgba(255,138,0,0.7)',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #1A2138;
            background-image: linear-gradient(to right, rgba(142,103,246,0.1) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(142,103,246,0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            font-family: 'Inter', sans-serif;
        }
        .sidebar-active {
            background-color: #37476B;
            border-right: 4px solid #8E67F6;
            color: white;
            box-shadow: 0 0 10px rgba(142,103,246,0.3);
        }
        .dashboard-card {
            background-color: #26304D;
            border: 1px solid rgba(142,103,246,0.2);
            transition: all 0.3s ease;
        }
        .dashboard-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(142,103,246,0.2);
        }
    </style>
</head>
<body class="text-white min-h-screen flex">

    @include('layouts.sidebar-user') <!-- Sidebar -->

    <div class="flex-1 ml-64 p-6 md:p-10">
        @include('layouts.header') <!-- Header/top nav -->

        @yield('content') <!-- Isi dashboard -->
    </div>

</body>
</html>
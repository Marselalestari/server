{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard HOSTVPS - Admin')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- FontAwesome -->
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

    @include('layouts.sidebar-admin') 
    {{-- Sidebar Admin --}}

    {{-- <div class="flex-1 ml-64 p-6 md:p-10">

        @yield('content')
        {{-- Konten dashboard --}}
        
    {{-- </div>

</body>
</html> --}} 

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard HOSTVPS - Admin')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- FontAwesome -->
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

    @include('layouts.sidebar-admin') 
    {{-- Sidebar Admin --}}

    <div class="flex-1 ml-64 p-6 md:p-10">

        @yield('content')
        {{-- Konten dashboard --}}
        
    </div>

</body>
</html>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Portal User VPS</title>

    <script src="https://cdn.tailwindcss.com"></script>

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
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        'neon-purple': '0 0 10px rgba(142, 103, 246, 0.7)',
                        'neon-orange': '0 0 10px rgba(255, 138, 0, 0.7)',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #1A2138;
            background-image:
                linear-gradient(to right, rgba(142, 103, 246, 0.1) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(142, 103, 246, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            font-family: 'Inter', sans-serif;
        }
        .sidebar-active {
            background-color: #37476B;
            border-right: 4px solid #8E67F6;
            color: white;
        }
        .dashboard-card {
            background-color: #26304D;
            border: 1px solid rgba(142, 103, 246, 0.2);
            transition: .3s;
        }
        .dashboard-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(142, 103, 246, 0.2);
        }
    </style>
</head>

<body class="text-white min-h-screen flex">

    <div class="w-64 flex flex-col card-dark min-h-screen py-6 px-4 fixed top-0 left-0">

        <div class="flex items-center space-x-2 mb-10 px-2">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none">
                <path d="M7.75 3L16.25 21M18.5 6L21 8.5L18.5 11M3 6L5.5 8.5L3 11"
                      stroke="#8E67F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-2xl font-bold">PORTAL USER</span> 
        </div>

        <nav class="flex-grow space-y-2 mb-12">

            <a href="{{ route('user.dashboard') }}" 
               class="flex items-center px-4 py-3 rounded-lg text-sm font-medium 
               {{ request()->routeIs('user.dashboard') ? 'sidebar-active' : 'hover:bg-card-dark/50' }}">
                 <i class="fas fa-th-large mr-3"></i> Dashboard
            </a>

            <a href="{{ route('user.request.create') }}" 
               class="flex items-center px-4 py-3 rounded-lg text-sm font-medium 
               {{ request()->routeIs('user.request.create') ? 'sidebar-active' : 'hover:bg-card-dark/50' }}">
                <i class="fas fa-plus-circle mr-3"></i> Ajukan Request VPS
            </a>
            
            <a href="{{ route('user.request.index') }}" 
               class="flex items-center px-4 py-3 rounded-lg text-sm font-medium 
               {{ request()->routeIs('user.request.index') ? 'sidebar-active' : 'hover:bg-card-dark/50' }}">
                <i class="fas fa-history mr-3"></i> Riwayat Request
            </a>

            <a href="{{ route('user.vps.index') }}" 
               class="flex items-center px-4 py-3 rounded-lg text-sm font-medium 
               {{ request()->routeIs('user.vps.index') ? 'sidebar-active' : 'hover:bg-card-dark/50' }}">
                <i class="fas fa-server mr-3"></i> VPS Saya
            </a>

        </nav>

        <div class="space-y-2 border-t border-card-dark/50 pt-6 mt-6">
            <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-card-dark/50">
                <i class="fas fa-user-circle mr-3"></i> Profil Saya
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full flex items-center px-4 py-3 rounded-lg hover:bg-card-dark/50 text-left">
                    <i class="fas fa-sign-out-alt mr-3"></i> Logout
                </button>
            </form>
        </div>
    </div>
    <div class="flex-1 ml-64 p-6 md:p-10">
        @yield('content')
    </div>
    </body>
</html>
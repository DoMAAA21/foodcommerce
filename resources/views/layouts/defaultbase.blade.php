<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name', 'Food Commerce'))</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-900">Logo</a>
                    </div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="{{ url('/') }}" class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                            <a href="{{ url('/about') }}" class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">About</a>
                            <a href="{{ url('/contact') }}" class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Authentication Links -->
                    @guest
                        <a href="{{ route('login') }}" class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                        <a href="{{ route('register') }}" class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                    @else
                        <span class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                           class="text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    @endguest
                </div> --}}
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ url('/') }}" class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="{{ url('/about') }}" class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="{{ url('/contact') }}" class="text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>
    <main class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>
</body>
</html>


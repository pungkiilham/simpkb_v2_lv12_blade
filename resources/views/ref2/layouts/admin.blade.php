<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SIMPKB Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside id="sidebar" 
            class="fixed inset-y-0 left-0 bg-gray-800 w-64 transform transition-transform duration-300 ease-in-out z-50 lg:translate-x-0">
            <div class="flex flex-col h-full">
                <!-- Logo/Brand -->
                <div class="flex items-center justify-between px-4 py-6 border-b border-gray-700">
                    <div class="flex items-center">
                        <span class="text-white text-2xl font-bold">SIMPKB</span>
                    </div>
                    <button class="text-gray-300 hover:text-white lg:hidden" id="closeSidebar">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-2 py-4 space-y-2 overflow-y-auto">
                    @include('admin.layouts.sidebar-sections')
                </nav>

                <!-- User Profile Section -->
                <div class="p-4 border-t border-gray-700">
                    <a href="{{ route('admin.profile') }}" class="flex items-center text-gray-300 hover:text-white">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin&background=random" alt="Admin">
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium">Admin User</p>
                            <p class="text-xs text-gray-400">View Profile</p>
                        </div>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Overlay -->
        <div id="sidebarOverlay" 
            class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden transition-opacity duration-300 lg:hidden"
            onclick="toggleSidebar()">
        </div>

        <!-- Main Content -->
        <div class="flex-1 lg:ml-64">
            <!-- Header -->
            <header class="bg-white shadow-sm sticky top-0 z-30">
                <div class="flex items-center justify-between px-4 py-4">
                    <button class="text-gray-600 hover:text-gray-900" onclick="toggleSidebar()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                    <h1 class="text-xl font-semibold text-gray-800">@yield('header')</h1>
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-600 hover:text-gray-900">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            if (window.innerWidth < 1024) { // lg breakpoint
                if (sidebar.classList.contains('-translate-x-full')) {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');
                } else {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                }
            }
        }

        // Initialize sidebar state for mobile
        function initializeSidebar() {
            if (window.innerWidth < 1024) {
                document.getElementById('sidebar').classList.add('-translate-x-full');
                document.getElementById('sidebarOverlay').classList.add('hidden');
            }
        }

        // Run on page load
        initializeSidebar();

        // Run on window resize
        window.addEventListener('resize', initializeSidebar);

        // Close sidebar button
        document.getElementById('closeSidebar').addEventListener('click', toggleSidebar);
    </script>
</body>
</html>

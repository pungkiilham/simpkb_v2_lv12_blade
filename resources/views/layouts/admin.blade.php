@include('layouts.head')

<body class="bg-[#FAFAFA]">
    @stack('scripts')

    <div class="min-h-screen flex overflow-x-hidden">
        <!-- Sidebar -->
        <!-- Fixed: Removed static lg:translate-x-0 which was overriding the toggle -->
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 bg-[#181947] w-[280px] lg:w-64 transform transition-transform duration-300 ease-in-out z-50 -translate-x-full lg:translate-x-0">
            <div class="flex flex-col h-full">
                <!-- Logo/Brand -->
                <div class="flex items-center justify-between px-6 py-6 border-b border-white/10">
                    <div class="flex items-center gap-3">
                        <div class="bg-white p-1.5 rounded-lg shadow-sm">
                            <img src="{{ asset('assets/logodishub.png') }}" class="h-8 w-auto" alt="Logo Dishub">
                        </div>
                        <div class="leading-tight">
                            <h1 class="text-white text-sm font-bold tracking-tight">SIM PKB</h1>
                            <h1 class="text-white text-xs font-semibold opacity-90">Kota Batu</h1>
                            <p class="text-[10px] text-white/50 mt-0.5 font-medium">Versi 2.1</p>
                        </div>
                    </div>
                    <!-- Close button for mobile -->
                    <button class="text-white/70 hover:text-white lg:hidden transition-colors"
                        onclick="toggleSidebar()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-3 py-4 overflow-y-auto scrollbar-thin scrollbar-thumb-white/10">
                    @include('layouts.sidebar')
                </nav>
            </div>
        </aside>

        <!-- Overlay for mobile -->
        <div id="sidebarOverlay"
            class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 lg:hidden hidden transition-opacity duration-300"
            onclick="toggleSidebar()"></div>

        <!-- Main Content Wrapper -->
        <div class="flex-1 flex flex-col min-w-0 transition-all duration-300 ease-in-out lg:ml-64" id="mainContent">
            <!-- Header -->
            <header class="bg-white/80 backdrop-blur-md sticky top-0 z-30 border-b border-gray-200">
                <div class="flex items-center justify-between px-4 py-2.5 md:px-6">
                    <div class="flex items-center gap-4">
                        <!-- Toggle Button (Unified) -->
                        <button
                            class="lg:hidden text-gray-500 hover:text-indigo-600 hover:bg-gray-100 p-2 rounded-lg transition-all"
                            onclick="toggleSidebar()">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>

                        <!-- Search Global -->
                        <form method="GET" action="{{ url()->current() }}" class="relative group hidden sm:block">
                            @foreach (request()->except('search', 'page') as $key => $value)
                                <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                            @endforeach
                            <span
                                class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-indigo-500 transition-colors">
                                <svg class="h-4 w-4 md:h-5 md:w-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                            <input type="text" name="search" placeholder="Cari Nama, Nopol..."
                                value="{{ request('search') }}"
                                class="w-48 md:w-80 pl-10 pr-4 py-2 text-sm bg-gray-50 rounded-xl border border-gray-200 focus:bg-white focus:outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all">
                        </form>
                    </div>

                    <div class="flex items-center gap-4">
                        <!-- User Info Display -->
                        <div class="flex items-center gap-3 pl-4 border-l border-gray-200">
                            <div class="md:block text-right">
                                <p class="text-sm font-bold text-gray-800 leading-none">
                                    {{ Auth::user()->name ?? 'Nama User' }}
                                </p>
                                <p class="text-[10px] text-indigo-600 font-black uppercase tracking-widest mt-1">
                                    {{ Auth::user()->role ?? 'Role' }}
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-1">
                            <a href="#" title="Pengaturan"
                                class="p-2 text-gray-400 hover:text-indigo-600 hover:bg-indigo-50 rounded-lg transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>

                            <form method="POST" action="#" class="inline">
                                @csrf
                                <button type="submit"
                                    class="flex items-center gap-2 px-3 py-2 text-sm font-bold text-red-600 hover:bg-red-50 rounded-lg transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <span class="hidden lg:block">Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="p-4 md:p-6 lg:p-8">
                <div class="max-w-full mx-auto">
                    <div
                        class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden min-h-[calc(100vh-160px)]">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Track state for large screens
        let isSidebarHiddenLarge = false;

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const overlay = document.getElementById('sidebarOverlay');
            const isLargeScreen = window.innerWidth >= 1024;

            if (isLargeScreen) {
                isSidebarHiddenLarge = !isSidebarHiddenLarge;
                if (isSidebarHiddenLarge) {
                    sidebar.classList.add('lg:-translate-x-full');
                    mainContent.classList.remove('lg:ml-64');
                } else {
                    sidebar.classList.remove('lg:-translate-x-full');
                    mainContent.classList.add('lg:ml-64');
                }
            } else {
                // Mobile Logic
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');

                if (!sidebar.classList.contains('-translate-x-full')) {
                    document.body.style.overflow = 'hidden';
                } else {
                    document.body.style.overflow = '';
                }
            }
        }

        // Ensure sidebar resets correctly on window resize
        function handleResize() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            const overlay = document.getElementById('sidebarOverlay');

            if (window.innerWidth >= 1024) {
                overlay.classList.add('hidden');
                document.body.style.overflow = '';

                // Restore the state chosen by the user on desktop
                if (isSidebarHiddenLarge) {
                    sidebar.classList.add('lg:-translate-x-full');
                    mainContent.classList.remove('lg:ml-64');
                } else {
                    sidebar.classList.remove('lg:-translate-x-full', '-translate-x-full');
                    mainContent.classList.add('lg:ml-64');
                }
            } else {
                // Mobile default: always hidden until toggled
                sidebar.classList.add('-translate-x-full');
                mainContent.classList.remove('lg:ml-64');
            }
        }

        window.addEventListener('resize', handleResize);
        window.addEventListener('load', handleResize);
    </script>
</body>

</html>

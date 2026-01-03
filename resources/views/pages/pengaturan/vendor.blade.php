{{-- @extends('layouts.admin')

@section('content')
    <div class="p-4 sm:p-6">
        <!-- Header Section -->
        <div class="bg-white rounded-xl shadow-lg p-3 md:p-4 mb-4">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-4">
                <div class="flex items-center">
                    <div class="p-1.5 bg-gradient-to-r from-indigo-600 to-blue-500 rounded-lg mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 md:w-6 md:h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>

                    </div>
                    <h1 class="text-xl md:text-2xl font-bold text-gray-800">Vendor Setting</h1>
                </div>
            </div>
        </div>

        <!-- Parameter setting khusus -->
        <div class="bg-white rounded-lg shadow overflow-hidden gap-6">
            <!-- API NO Rangka -->
            <section class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <div>
                        <h2 class="font-bold text-gray-800">Integrasi API Via No. Rangka</h2>
                        <span class="px-2 py-1 text-xs font-bold bg-green-100 text-green-700 rounded-full">Terhubung</span>
                    </div>
                    <button
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all shadow-sm">
                        Simpan
                    </button>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Base URL Sinkronisasi</label>
                            <input type="text"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Username / Email</label>
                            <div class="relative">
                                <input type="text"
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                            <div class="relative">
                                <input type="password"
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                                <button
                                    class="absolute right-3 top-1/2 -translate-y-1/2 text-blue-600 font-bold text-xs hover:underline">LIHAT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- API SRUT -->
            <section class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <div>
                        <h2 class="font-bold text-gray-800">Integrasi API Via No. SRUT</h2>
                        <span class="px-2 py-1 text-xs font-bold bg-green-100 text-green-700 rounded-full">Terhubung</span>
                    </div>
                    <button
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all shadow-sm">
                        Simpan
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Base URL Sinkronisasi</label>
                            <input type="text"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">API Token</label>
                            <div class="relative">
                                <input type="text"
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- API Database Lokal x kementrian sync -->
            <section class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <div>
                        <h2 class="font-bold text-gray-800">Sync DB Lokal x Kementrian</h2>
                        <span class="px-2 py-1 text-xs font-bold bg-green-100 text-green-700 rounded-full">Terhubung</span>
                    </div>
                    <button
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all shadow-sm">
                        Simpan
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Base URL Sinkronisasi</label>
                            <input type="text"
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">API Token</label>
                            <div class="relative">
                                <input type="text"
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </div>
    </div>
@endsection --}}


@extends('layouts.admin')

@section('content')
    <div class="p-4 sm:p-6 space-y-6 max-w-7xl mx-auto">
        <!-- Header Section -->
        <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-white rounded-2xl shadow-sm border border-gray-100 p-5">
            <div class="flex items-center gap-4">
                <div class="p-3 bg-gradient-to-br from-indigo-600 to-blue-500 rounded-xl shadow-md shadow-blue-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12a7.5 7.5 0 0 0 15 0m-15 0a7.5 7.5 0 1 1 15 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077 1.41-.513m14.095-5.13 1.41-.513M5.106 17.785l1.15-.964m11.49-9.642 1.149-.964M7.501 19.795l.75-1.3m7.5-12.99.75-1.3m-6.063 16.658.26-1.477m2.605-14.772.26-1.477m-1.524 17.116h0" />
                    </svg>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 leading-tight">Vendor Settings</h1>
                    <p class="text-sm text-gray-500">Manage API integrations and manual database synchronization</p>
                </div>
            </div>
            <div class="flex gap-2">
                <button
                    class="px-4 py-2 text-sm font-semibold text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition-all">Refresh
                    Status</button>
            </div>
        </div>

        <!-- MAIN CONFIGURATION GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- API Via No. Rangka -->
            <section class="bg-white rounded-2xl shadow-sm border border-gray-200 flex flex-col">
                <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <h2 class="font-bold text-gray-800">API No. Rangka</h2>
                        <span
                            class="px-2 py-0.5 text-[10px] font-bold bg-green-100 text-green-700 rounded-full uppercase tracking-wider">Connected</span>
                    </div>
                    <button class="text-sm font-bold text-blue-600 hover:text-blue-700">Simpan</button>
                </div>
                <div class="p-6 space-y-4 flex-1">
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Base URL</label>
                        <input type="text"
                            class="w-full px-4 py-2 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                            value="https://api.example.com/vin">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Username</label>
                            <input type="text"
                                class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Password</label>
                            <input type="password"
                                class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                        </div>
                    </div>
                </div>
            </section>

            <!-- API Via No. SRUT -->
            <section class="bg-white rounded-2xl shadow-sm border border-gray-200 flex flex-col">
                <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <h2 class="font-bold text-gray-800">API No. SRUT</h2>
                        <span
                            class="px-2 py-0.5 text-[10px] font-bold bg-green-100 text-green-700 rounded-full uppercase tracking-wider">Connected</span>
                    </div>
                    <button class="text-sm font-bold text-blue-600 hover:text-blue-700">Simpan</button>
                </div>
                <div class="p-6 space-y-4 flex-1">
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Base URL</label>
                        <input type="text"
                            class="w-full px-4 py-2 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                            value="https://api.example.com/srut">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">API Token</label>
                        <input type="text"
                            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all"
                            placeholder="Bearer eyJhbGciOiJIUzI1NiI...">
                    </div>
                </div>
            </section>

            <!-- Sync DB Lokal x Kementrian -->
            <section class="bg-white rounded-2xl shadow-sm border border-gray-200 lg:col-span-2">
                <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <h2 class="font-bold text-gray-800">Sync Master Data Settings</h2>
                        <span
                            class="px-2 py-0.5 text-[10px] font-bold bg-blue-100 text-blue-700 rounded-full uppercase tracking-wider">Internal
                            Service</span>
                    </div>
                    <button class="text-sm font-bold text-blue-600 hover:text-blue-700">Simpan</button>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Internal Endpoint</label>
                        <input type="text"
                            class="w-full px-4 py-2 rounded-xl border border-gray-200 bg-gray-50 text-gray-600 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 uppercase mb-1">Secret Key</label>
                        <input type="password"
                            class="w-full px-4 py-2 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                    </div>
                </div>
            </section>
        </div>

        <!-- MANUAL SYNC DASHBOARD (10 Table Triggers) -->
        <section class="bg-white rounded-2xl shadow-lg border border-indigo-100 overflow-hidden">
            <div class="bg-indigo-50 px-6 py-4 border-b border-indigo-100">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="font-bold text-indigo-900">Manual Synchronization Dashboard</h2>
                        <p class="text-xs text-indigo-600">Trigger manual data updates for specific tables from Ministry
                            Servers</p>
                    </div>
                    <div class="text-right">
                        <span class="text-[10px] font-bold text-indigo-400 block uppercase">Last Global Sync</span>
                        <span class="text-xs font-semibold text-indigo-900">2023-12-21 14:20</span>
                    </div>
                </div>
            </div>

            <div class="p-6 grid grid-cols-2 md:grid-cols-5 gap-4">
                @php
                    $syncTables = [
                        ['id' => 'm_brand', 'name' => 'Brand'],
                        ['id' => 'm_type', 'name' => 'Type'],
                        ['id' => 'm_variant', 'name' => 'Variant'],
                        ['id' => 'm_color', 'name' => 'Color'],
                        ['id' => 'm_fuel', 'name' => 'Fuel Type'],
                        ['id' => 'm_dealer', 'name' => 'Dealer List'],
                        ['id' => 'm_area', 'name' => 'Regional'],
                        ['id' => 'm_document', 'name' => 'Doc Type'],
                        ['id' => 'm_category', 'name' => 'Category'],
                        ['id' => 'm_specs', 'name' => 'Tech Specs'],
                    ];
                @endphp

                @foreach ($syncTables as $table)
                    <button
                        class="group relative flex flex-col items-center justify-center p-4 bg-white border border-gray-100 rounded-xl hover:border-blue-500 hover:shadow-md transition-all">
                        <div class="mb-2 p-2 bg-gray-50 rounded-lg group-hover:bg-blue-50 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 text-gray-400 group-hover:text-blue-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </div>
                        <span class="text-xs font-bold text-gray-700 mb-1">{{ $table['name'] }}</span>
                        <span class="text-[9px] text-gray-400 uppercase tracking-tighter">Sync Table</span>

                        <!-- Simple Status Indicator Overlay (Hidden by default, show on loading) -->
                        <div
                            class="absolute inset-0 bg-white/80 backdrop-blur-[1px] hidden items-center justify-center rounded-xl animate-pulse">
                            <span class="text-[10px] font-black text-blue-600">SYNCING...</span>
                        </div>
                    </button>
                @endforeach
            </div>

            <div class="px-6 py-3 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                <p class="text-[10px] text-gray-500 italic font-medium">Note: Manual sync may take several minutes depending
                    on data volume.</p>
                <button
                    class="flex items-center gap-1.5 px-3 py-1.5 bg-indigo-600 text-white text-xs font-bold rounded-lg hover:bg-indigo-700 shadow-sm transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3.5 h-3.5">
                        <path fill-rule="evenodd"
                            d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-5.038a7 7 0 0 0-11.712 3.138.75.75 0 0 0 1.449.39 5.5 5.5 0 0 1 9.201-2.466l.312.311h-2.433a.75.75 0 0 0 0 1.5H16.01a.75.75 0 0 0 .75-.75V2.839a.75.75 0 0 0-1.5 0v2.43l-.31-.31Z"
                            clip-rule="evenodd" />
                    </svg>
                    Sync All Tables
                </button>
            </div>
        </section>
    </div>
@endsection

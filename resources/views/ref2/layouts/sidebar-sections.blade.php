<!-- Dashboard -->
<a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white' : '' }}">
    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
    </svg>
    <span>Dashboard</span>
</a>

<!-- Antrian -->
<div class="space-y-1">
    <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Antrian</p>
    <a href="{{ route('admin.antrian.cetak') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.antrian.cetak') ? 'bg-gray-700 text-white' : '' }}">
        <span>Cetak</span>
    </a>
    <a href="{{ route('admin.antrian.display') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.antrian.display') ? 'bg-gray-700 text-white' : '' }}">
        <span>Display</span>
    </a>
    <a href="{{ route('admin.antrian.panggil') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.antrian.panggil') ? 'bg-gray-700 text-white' : '' }}">
        <span>Panggil</span>
    </a>
    <a href="{{ route('admin.antrian.proses') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.antrian.proses') ? 'bg-gray-700 text-white' : '' }}">
        <span>Proses</span>
    </a>
</div>

<!-- Database Kendaraan -->
<a href="{{ route('admin.kendaraan.index') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.kendaraan.*') ? 'bg-gray-700 text-white' : '' }}">
    <span>Database Kendaraan</span>
</a>

<!-- Pendaftaran -->
<div class="space-y-1">
    <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Pendaftaran</p>
    <a href="{{ route('admin.pendaftaran.list') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.pendaftaran.list') ? 'bg-gray-700 text-white' : '' }}">
        <span>List Kendaraan Terdaftar</span>
    </a>
    <a href="{{ route('admin.pendaftaran.create') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.pendaftaran.create') ? 'bg-gray-700 text-white' : '' }}">
        <span>Pendaftaran Kendaraan</span>
    </a>
</div>

<!-- Pengujian -->
<div class="space-y-1">
    <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Pengujian</p>
    <a href="{{ route('admin.pengujian.list') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.pengujian.list') ? 'bg-gray-700 text-white' : '' }}">
        <span>List Kendaraan Siap Uji</span>
    </a>
    <a href="{{ route('admin.pengujian.uji') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.pengujian.uji') ? 'bg-gray-700 text-white' : '' }}">
        <span>Pengujian</span>
    </a>
    <a href="{{ route('admin.pengujian.riwayat') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.pengujian.riwayat') ? 'bg-gray-700 text-white' : '' }}">
        <span>Riwayat</span>
    </a>
</div>

<!-- Numpang Uji -->
<div class="space-y-1">
    <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Numpang Uji</p>
    <a href="{{ route('admin.numpang-uji.keluar') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.numpang-uji.keluar') ? 'bg-gray-700 text-white' : '' }}">
        <span>Keluar</span>
    </a>
    <a href="{{ route('admin.numpang-uji.masuk') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.numpang-uji.masuk') ? 'bg-gray-700 text-white' : '' }}">
        <span>Masuk</span>
    </a>
    <a href="{{ route('admin.numpang-uji.riwayat') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.numpang-uji.riwayat') ? 'bg-gray-700 text-white' : '' }}">
        <span>Riwayat</span>
    </a>
</div>

<!-- Mutasi -->
<div class="space-y-1">
    <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Mutasi</p>
    <a href="{{ route('admin.mutasi.keluar') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.mutasi.keluar') ? 'bg-gray-700 text-white' : '' }}">
        <span>Keluar</span>
    </a>
    <a href="{{ route('admin.mutasi.masuk') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.mutasi.masuk') ? 'bg-gray-700 text-white' : '' }}">
        <span>Masuk</span>
    </a>
    <a href="{{ route('admin.mutasi.riwayat') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.mutasi.riwayat') ? 'bg-gray-700 text-white' : '' }}">
        <span>Riwayat</span>
    </a>
</div>

<!-- WA Blast -->
<div class="space-y-1">
    <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">WA Blast</p>
    <a href="{{ route('admin.wa.target') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.wa.target') ? 'bg-gray-700 text-white' : '' }}">
        <span>Target</span>
    </a>
    <a href="{{ route('admin.wa.settings') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.wa.settings') ? 'bg-gray-700 text-white' : '' }}">
        <span>Setting</span>
    </a>
    <a href="{{ route('admin.wa.laporan') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.wa.laporan') ? 'bg-gray-700 text-white' : '' }}">
        <span>Laporan WA Blast</span>
    </a>
</div>

<!-- Laporan Pelayanan -->
<a href="{{ route('admin.laporan') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.laporan') ? 'bg-gray-700 text-white' : '' }}">
    <span>Laporan Pelayanan</span>
</a>

<!-- Log Aktivitas -->
<a href="{{ route('admin.log') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.log') ? 'bg-gray-700 text-white' : '' }}">
    <span>Log Aktivitas</span>
</a>

<!-- Management User -->
<div class="space-y-1">
    <p class="px-4 pt-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Management User</p>
    <a href="{{ route('admin.users.index') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.users.index') ? 'bg-gray-700 text-white' : '' }}">
        <span>List Users</span>
    </a>
    <a href="{{ route('admin.users.create') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-lg {{ request()->routeIs('admin.users.create') ? 'bg-gray-700 text-white' : '' }}">
        <span>Tambah User</span>
    </a>
</div>

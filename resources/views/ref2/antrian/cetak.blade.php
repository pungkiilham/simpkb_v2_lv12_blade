@extends('admin.layouts.admin')

@section('title', 'Cetak Antrian')
@section('header', 'Cetak Antrian')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Loket 1 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="text-center space-y-6">
                <h2 class="text-2xl font-bold text-gray-800">Loket 1</h2>
                <div class="text-6xl font-bold text-blue-600">A-001</div>
                <p class="text-gray-600">{{ date('d F Y') }}</p>
                <div class="space-y-4">
                    <button class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Cetak Nomor Antrian
                    </button>
                    <button class="w-full px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                        Reset Nomor
                    </button>
                </div>
            </div>
        </div>

        <!-- Loket 2 -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="text-center space-y-6">
                <h2 class="text-2xl font-bold text-gray-800">Loket 2</h2>
                <div class="text-6xl font-bold text-blue-600">B-001</div>
                <p class="text-gray-600">{{ date('d F Y') }}</p>
                <div class="space-y-4">
                    <button class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Cetak Nomor Antrian
                    </button>
                    <button class="w-full px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50">
                        Reset Nomor
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
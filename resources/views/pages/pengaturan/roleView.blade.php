@extends('layouts.admin')

@section('content')
<div class="p-4 sm:p-6">
    <div class="mb-6">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-800">View Role</h2>
            <a href="#" class="inline-flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-lg text-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Roles
            </a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-6">
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <h3 class="text-lg font-medium text-gray-900">Role Details</h3>
                    <div class="mt-4 space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Role Name</label>
                            {{-- <div class="mt-1 p-2 bg-gray-50 rounded-md">{{ $role->name }}</div> --}}
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Description</label>
                            {{-- <div class="mt-1 p-2 bg-gray-50 rounded-md">{{ $role->description }}</div> --}}
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Permissions</label>
                            <div class="mt-2 space-y-2">
                                {{-- @foreach($role->permissions as $permission)
                                <div class="flex items-center">
                                    <span class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">{{ $permission }}</span>
                                </div>
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

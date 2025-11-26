@extends('layouts.app-admin')

@section('title', 'Kelola Request VPS')
@section('subtitle', 'Manajemen request VPS')

@section('content')

@if(session('success'))
    <div class="p-4 mb-6 rounded-xl" style="background-color:#e0d4ff; color:#4b0082;">
        {{ session('success') }}
    </div>
@endif

<div class="bg-[#1F2847] p-6 rounded-2xl shadow-lg border border-[#2B3454]">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-white">Daftar Request VPS</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-[#27304A] text-gray-300">
                <tr>
                    <th class="py-3 px-4">#</th>
                    <th class="py-3 px-4">User</th>
                    <th class="py-3 px-4">Server</th>
                    <th class="py-3 px-4">CPU</th>
                    <th class="py-3 px-4">RAM</th>
                    <th class="py-3 px-4">Storage</th>
                    <th class="py-3 px-4">OS</th>
                    <th class="py-3 px-4">Lokasi</th>
                    <th class="py-3 px-4">Status</th>
                </tr>
            </thead>
            <tbody class="text-gray-200">
                @forelse($requests as $request)
                    <tr class="border-b border-[#2F3958] hover:bg-[#2A3352] transition">
                        <td class="py-3 px-4">{{ $loop->iteration }}</td>
                        <td class="py-3 px-4">{{ $request->user->name ?? '-' }}</td>
                        <td class="py-3 px-4">{{ $request->server_name }}</td>
                        <td class="py-3 px-4">{{ $request->cpu }}</td>
                        <td class="py-3 px-4">{{ $request->ram }}</td>
                        <td class="py-3 px-4">{{ $request->storage }}</td>
                        <td class="py-3 px-4">{{ $request->os }}</td>
                        <td class="py-3 px-4">{{ $request->lokasi }}</td>
                        <td class="py-3 px-4 capitalize">{{ $request->status }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center py-6 text-gray-400">
                            Belum ada request VPS.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection

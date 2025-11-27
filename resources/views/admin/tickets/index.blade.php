@extends('layouts.app-admin')

@section('title', 'Customer Support')
@section('subtitle', 'Manajemen ticket pelanggan')

@section('content')

{{-- ALERT SUKSES --}}
@if(session('success'))
    <div class="p-4 mb-6 rounded-xl" style="background-color:#e0d4ff; color:#4b0082;">
        {{ session('success') }}
    </div>
@endif

<div class="bg-[#1F2847] p-6 rounded-2xl shadow-lg border border-[#2B3454]">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold text-white">Daftar Ticket Support</h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-[#27304A] text-gray-300">
                <tr>
                    <th class="py-3 px-4">#</th>
                    <th class="py-3 px-4">User</th>
                    <th class="py-3 px-4">Judul</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Tanggal</th>
                </tr>
            </thead>

            <tbody class="text-gray-200">
                @forelse($tickets as $ticket)
                    <tr class="border-b border-[#2F3958] hover:bg-[#2A3352] transition">
                        <td class="py-3 px-4">{{ $loop->iteration }}</td>
                        <td class="py-3 px-4">{{ $ticket->user->name }}</td>
                        <td class="py-3 px-4">{{ $ticket->title }}</td>
                        <td class="py-3 px-4 capitalize">{{ $ticket->status }}</td>
                        <td class="py-3 px-4">{{ $ticket->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-6 text-gray-400">
                            Belum ada ticket support.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection

{{-- @extends('layouts.user')

@section('content')
<div class="p-6">

    <h2 class="text-2xl font-bold mb-4">Daftar VPS Saya</h2>

    <table class="w-full text-left border border-gray-700 bg-[#181818] rounded-lg">
        <thead class="bg-[#222]">
            <tr>
                <th class="p-3">Nama VPS</th>
                <th class="p-3">IP Address</th>
                <th class="p-3">Status</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($vps as $item)
            <tr class="border-t border-gray-700">
                <td class="p-3">{{ $item->nama_vps }}</td>
                <td class="p-3">{{ $item->ip_address }}</td>
                <td class="p-3">
                    <span class="px-2 py-1 rounded bg-green-600 text-white text-xs">
                        {{ $item->status }}
                    </span>
                </td>
                <td class="p-3">
                    <a href="{{ route('vps.edit', $item->id) }}" class="text-blue-400">Edit</a>

                    <form action="{{ route('vps.destroy', $item->id) }}" method="POST"
                          class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus VPS ini?')" 
                                class="text-red-400 ml-2">
                            Delete
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection --}}


@extends('layouts.app-admin')

@section('content')
<h1 class="text-3xl font-bold">VPS</h1>
<p>Ini halaman VPS.</p>
@endsection

@extends('layouts.app-admin')

@section('title', 'Edit Pengguna')

@section('content')

<h1 class="text-2xl font-bold mb-6">Edit Pengguna</h1>

<form action="{{ route('admin.users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block text-sm font-medium">Nama</label>
        <input type="text" name="name" value="{{ $user->name }}" 
               class="w-full px-4 py-2 rounded bg-card-dark border border-gray-700 text-white">
    </div>

    <div class="mb-4">
        <label class="block text-sm font-medium">Email</label>
        <input type="email" name="email" value="{{ $user->email }}"
               class="w-full px-4 py-2 rounded bg-card-dark border border-gray-700 text-white">
    </div>

    <div class="mb-4">
        <label class="block text-sm font-medium">Role</label>
        <select name="role" class="w-full px-4 py-2 rounded bg-card-dark border border-gray-700 text-white">
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
        </select>
    </div>

    <button type="submit" class="px-5 py-3 bg-accent-purple rounded text-white">
        Update Pengguna
    </button>

</form>

@endsection

@extends('layouts.app-admin')

@section('title', 'Tambah Pengguna')

@section('content')

<h1 class="text-2xl font-bold text-white mb-6">Tambah Pengguna</h1>

<form method="POST" action="{{ route('admin.users.store') }}">
    @csrf

    <label class="text-white">Nama</label>
    <input name="name" class="w-full p-2 rounded bg-gray-800 text-white mb-3">

    <label class="text-white">Email</label>
    <input name="email" class="w-full p-2 rounded bg-gray-800 text-white mb-3">

    <label class="text-white">Password</label>
    <input type="password" name="password" class="w-full p-2 rounded bg-gray-800 text-white mb-3">

    <label class="text-white">Role</label>
    <select name="role" class="w-full p-2 rounded bg-gray-800 text-white mb-3">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>

    <button class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
</form>

@endsection

@extends('layouts.mainAdmin')

@section('MainAdmin')
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
    <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Tambah Admin</h2>
    
    <form action="{{ route('admin.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Username</label>
            <input type="text" name="username" id="username" class="block w-full px-3 py-2 mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan username" required>
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
            <input type="password" name="password" id="password" class="block w-full px-3 py-2 mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan password" required>
        </div>

        <div>
            <label for="role" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Role</label>
            <select name="role" id="role" class="block w-full px-3 py-2 mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="">Pilih Role</option>
                <option value="admin">Admin</option>
                <option value="superadmin">Superadmin</option>
            </select>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                <i class="fas fa-save mr-2"></i> Simpan
            </button>
        </div>
    </form>
</div>
@endsection

@extends('layouts.mainPelatih')

@section('MainPelatih')

<form action="{{ route('PengelolaanKursus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
        <label for="judul" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Judul Kursus</label>
        <input type="text" name="judul" id="judul" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-5">
        <label for="deskripsi" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea>
    </div>
    <div class="flex gap-3 mb-5">
        <div class="w-1/2">
            <label for="tingkat_kesulitan" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Tingkat Kesulitan</label>
            <select name="tingkat_kesulitan" id="tingkat_kesulitan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="-">Pilih Tingkat Kesulitan</option>
                <option value="Pemula">Pemula</option>
                <option value="Menengah">Menengah</option>
                <option value="Lanjutan">Lanjutan</option>
            </select>
        </div>
        <div class="w-1/2">
            <div class="mb-5">
                <label for="harga" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Harga</label>
                <input type="number" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
        </div>
    </div>
    <div class="flex gap-3 mb-5">
        <div class="w-1/2">
            <label for="jadwal" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Jadwal Kursus</label>
            <input type="date" name="jadwal" id="jadwal" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="w-1/2">
            <label for="status" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Status</label>
            <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>
    </div>
    <div class="flex gap-3 mb-5">
        <div class="w-1/2">
            <label for="tgl_mulai" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Tanggal Mulai</label>
            <input type="date" name="tgl_mulai" id="tgl_mulai" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="w-1/2">
            <label for="tgl_selesai" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Tanggal Selesai</label>
            <input type="date" name="tgl_selesai" id="tgl_selesai" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
    </div>
    <div class="flex gap-3 mb-5">
        <div class="w-1/2">
            <label for="kapasitas" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Kapasitas</label>
            <input type="number" name="kapasitas" id="kapasitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="w-1/2">
            <label for="foto_kursus" class="block mb-2 text-xl font-bold text-gray-900 dark:text-white">Upload Foto Kursus</label>
            <input type="file" name="foto_kursus" id="foto_kursus" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" accept=".jpg,.jpeg,.png,.gif">
        </div>
    </div>
    <button type="submit" class="px-3 py-2 text-sm w-30 font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <i class="fas fa-paper-plane mr-2"></i>SUBMIT
    </button>
</form>

@endsection
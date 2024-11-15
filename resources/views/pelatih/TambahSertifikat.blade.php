@extends('layouts.mainPelatih')

@section('MainPelatih')

<div class="flex items-start space-x-4">
    <div class="flex-grow">
        <form action="{{ route('sertifikat.store') }}" method="POST" class="mt-5 w-full" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="kursus_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kursus untuk Sertifikat</label>
                <select id="kursus_id" name="kursus_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>Pilih Kursus</option>
                    @foreach($kursus as $kursusItem)
                    <option value="{{ $kursusItem->kursus_id }}">{{ $kursusItem->judul }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="file_sertifikat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Sertifikat (PDF)</label>
                <input type="file" name="file_sertifikat" id="file_sertifikat" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" accept="application/pdf" required>
            </div>

            <div class="mb-4">
                <label for="nomor_sertifikat" class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Sertifikat</label>
                <input type="text" name="nomor_sertifikat" id="nomor_sertifikat" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
            </div>

            <div class="mb-4">
                <label for="tanggal_terbit" class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Terbit</label>
                <input type="date" name="tanggal_terbit" id="tanggal_terbit" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
            </div>
            <div>
                <button type="submit" class="mt-4 inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                    Kirim Sertifikat
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
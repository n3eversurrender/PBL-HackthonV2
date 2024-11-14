@extends('layouts.mainPelatih')

@section('MainPelatih')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
        <div>
            <a href="/TambahSertifikat" class="flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                <i class="fas fa-plus mr-2"></i>
                Tambah Sertifikat
            </a>
        </div>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Data">
        </div>
    </div>
    <table id="kursus-table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Sertifikat Id</th>
                <th scope="col" class="px-6 py-3">File Sertifikat</th>
                <th scope="col" class="px-6 py-3">Nama Kursus</th>
                <th scope="col" class="px-6 py-3">Nomor Sertifikat</th>
                <th scope="col" class="px-6 py-3">Tanggal Terbit</th>
                <th scope="col" class="px-6 py-3 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sertifikat as $srtf)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">{{ $srtf->sertifikat_id }}</td>
                <td class="px-6 py-4">{{ $srtf->file_sertifikat }}</td>
                <td class="px-6 py-4">{{ $srtf->nama_kursus }}</td>
                <td class="px-6 py-4">{{ $srtf->nomor_sertifikat }}</td>
                <td class="px-6 py-4">{{ $srtf->tanggal_terbit }}</td>
                <td class="px-3 py-3">
                    <button type="button" data-modal-target="my_modal_edit_#" data-modal-toggle="my_modal_edit_#" class="font-medium text-blue-600 dark:text-blue-500 hover:text-blue-700 dark:hover:text-blue-400 my-1 mr-2">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <button type="button" data-modal-target="my_modal_delete_#" data-modal-toggle="my_modal_delete_#" class="font-medium text-red-600 dark:text-red-500 hover:text-red-700 dark:hover:text-red-400">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="flex justify-center items-center mt-5">
    <ul class="inline-flex -space-x-px text-sm">
        <!-- Previous Page Link -->
        <li>
            <a href="{{ $sertifikat->previousPageUrl() }}" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Sebelumnya
            </a>
        </li>
        <!-- Next Page Link -->
        <li>
            <a href="{{ $sertifikat->nextPageUrl() }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Berikutnya
            </a>
        </li>
    </ul>
</div>

<!-- Display Pagination Info -->
<div class="mt-4 mb-5 text-center text-sm text-gray-600 dark:text-gray-400">
    Menampilkan {{ $sertifikat->firstItem() }} sampai {{ $sertifikat->lastItem() }} dari {{ $sertifikat->total() }} entri
</div>
@endsection


<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('table-search-users').addEventListener('input', function() {
            var searchTerm = this.value.toLowerCase(); // Ambil istilah pencarian dan konversi ke lowercase
            var rows = document.querySelectorAll('#kursus-table tbody tr'); // Ambil semua baris tabel

            rows.forEach(function(row) {
                // Cek apakah ada nilai dalam setiap sel di baris yang sesuai dengan istilah pencarian
                var isMatch = Array.from(row.cells).some(function(cell) {
                    return cell.textContent.toLowerCase().includes(searchTerm);
                });

                if (isMatch) {
                    row.style.display = ''; // Tampilkan baris jika cocok
                } else {
                    row.style.display = 'none'; // Sembunyikan baris jika tidak cocok
                }
            });
        });
    });
</script>
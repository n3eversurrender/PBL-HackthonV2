@extends('layouts.mainAdmin')

@section('MainAdmin')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex items-center justify-end flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="text" id="table-search-trainers" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Data">
        </div>
    </div>
    <table id="pelatih-table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">No</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                <th scope="col" class="px-6 py-3">No Telepon</th>
                <th scope="col" class="px-6 py-3">Alamat</th>
                <th scope="col" class="px-6 py-3">Peran</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelatihList as $index => $pelatih)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-3 py-3 text-center">{{ $pelatihList->firstItem() + $loop->iteration - 1 }}</td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <img class="w-10 h-10 rounded-full" src="{{ asset($pelatih->foto_profil ?? 'image/9203764.png') }}" alt="{{ $pelatih->nama }}">
                        <div class="ps-3">
                            <div class="text-base font-semibold">{{ $pelatih->nama }}</div>
                            <div class="font-normal text-gray-500">{{ $pelatih->email }}</div>
                        </div>
                    </div>
                </td>
                <td class="px-6 py-4">{{ $pelatih->jenis_kelamin }}</td>
                <td class="px-6 py-4">{{ $pelatih->no_telepon }}</td>
                <td class="px-6 py-4">{{ $pelatih->alamat }}</td>
                <td class="px-6 py-4">{{ $pelatih->peran }}</td>
                <td class="px-6 py-4">
                    <!-- Tombol Hapus -->
                    <button type="button" data-modal-target="my_modal_delete_{{ $pelatih->pengguna_id }}" data-modal-toggle="my_modal_delete_{{ $pelatih->pengguna_id }}" class="font-medium text-red-600 dark:text-red-500 hover:text-red-700 dark:hover:text-red-400">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                </td>
            </tr>

            <!-- Modal Hapus Pelatih -->
            <div id="my_modal_delete_{{ $pelatih->pengguna_id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <form action="{{ route('Pelatih.destroy', $pelatih->pengguna_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Anda Yakin Ingin Menghapus Pelatih Ini?</h3>
                                <button type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Yakin
                                </button>
                                <button type="button" data-modal-hide="my_modal_delete_{{ $pelatih->pengguna_id }}" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Tidak Yakin
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="flex justify-center items-center mt-5">
        <ul class="inline-flex -space-x-px text-sm">
            <!-- Previous Button -->
            <li>
                <a href="{{ $pelatihList->previousPageUrl() }}" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Sebelumnya
                </a>
            </li>

            <!-- Next Button -->
            <li>
                <a href="{{ $pelatihList->nextPageUrl() }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Berikutnya
                </a>
            </li>
        </ul>
    </div>

    <!-- Menampilkan informasi data -->
    <div class="mt-4 mb-5 text-center text-sm text-gray-600 dark:text-gray-400">
        Menampilkan {{ $pelatihList->firstItem() }} sampai {{ $pelatihList->lastItem() }} dari {{ $pelatihList->total() }} entri
    </div>

    <script>
        document.getElementById('table-search-trainers').addEventListener('input', function() {
            var searchTerm = this.value.toLowerCase(); // Ambil nilai pencarian dan konversi ke lowercase
            var rows = document.querySelectorAll('#pelatih-table tbody tr'); // Menggunakan ID kursus-table

            rows.forEach(function(row) {
                var name = row.cells[1].textContent.toLowerCase(); // Ambil Nama Pelatih (kolom 2)
                var gender = row.cells[2].textContent.toLowerCase(); // Ambil Jenis Kelamin (kolom 3)
                var phone = row.cells[3].textContent.toLowerCase(); // Ambil No Telepon (kolom 4)
                var address = row.cells[4].textContent.toLowerCase(); // Ambil Alamat (kolom 5)
                var role = row.cells[5].textContent.toLowerCase(); // Ambil Peran (kolom 6)

                // Periksa apakah ada kecocokan dengan kata pencarian
                if (name.includes(searchTerm) || gender.includes(searchTerm) || phone.includes(searchTerm) || address.includes(searchTerm) || role.includes(searchTerm)) {
                    row.style.display = ''; // Tampilkan baris jika cocok
                } else {
                    row.style.display = 'none'; // Sembunyikan baris jika tidak cocok
                }
            });
        });
    </script>


    @endsection
@extends('layouts.main')

@section('Main')

<section class="flex mx-4 sm:mx-12 mt-4">
    <aside class="h-auto min-h-screen">
        <div class="h-full py-4 w-28 sm:w-64 bg-white">
            <h1 class=" font-bold text-lg sm:text-3xl py-1 sm:py-3">Kursus</h1>
            <p class=" font-bold text-sm sm:text-xl mb-2 sm:py-2">Semua Kursus</p>
            <ul class="space-y-2  font-medium">
                <!-- Kategori-->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-xs sm:text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-category" data-collapse-toggle="dropdown-category">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kategori</span>
                        <svg class="w-2 h-2 sm:w-3 sm:h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                        </svg>
                    </button>
                    <hr>
                    <form method="GET" action="{{ route('daftarKursus') }}" id="kursusForm">
                        <ul id="dropdown-category" class="hidden px-4 space-y-2">
                            <li>
                                <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg group">
                                    <input id="default-radio-1" type="radio" value="" name="kategori_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="this.form.submit()">
                                    <label for="default-radio-1" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Semua Kursus</label>
                                </div>
                            </li>
                            <!-- Loop untuk menampilkan kategori dari database -->
                            @foreach($kategori as $kat)
                            <li>
                                <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg group">
                                    <input id="kategori-radio-{{ $kat->kategori_id }}" type="radio" value="{{ $kat->kategori_id }}" name="kategori_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onchange="this.form.submit()">
                                    <label for="kategori-radio-{{ $kat->kategori_id }}" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">{{ $kat->nama_kategori }}</label>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </form>
                </li>

                <!-- Level -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-xs sm:text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-level" data-collapse-toggle="dropdown-level">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Level</span>
                        <svg class="w-2 h-2 sm:w-3 sm:h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                        </svg>
                    </button>
                    <hr>
                    <form method="GET" action="{{ route('daftarKursus') }}" id="kursusForm">
                        <ul id="dropdown-level" class="hidden px-4 space-y-2">
                            @foreach($uniqueTingkatKesulitan as $tingkat)
                            <li>
                                <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg group">
                                    <input id="tingkat-radio-{{ $tingkat->tingkat_kesulitan }}" type="radio"
                                        value="{{ $tingkat->tingkat_kesulitan }}"
                                        name="tingkat_kesulitan"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        onchange="this.form.submit()"
                                        {{ request('tingkat_kesulitan') == $tingkat->tingkat_kesulitan ? 'checked' : '' }}>
                                    <label for="tingkat-radio-{{ $tingkat->tingkat_kesulitan }}" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">
                                        {{ $tingkat->tingkat_kesulitan }}
                                    </label>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                    </form>
                </li>
            </ul>
        </div>
    </aside>
    <!-- sidebar end -->

    <!-- Kursus start -->
    <section class="bg-white mt-8">
        <div class="mx-auto px-2 sm:px-4 2xl:px-0">
            <!-- Heading & Filters -->
            <div class="mb-4 justify-end space-y-4 space-x-3 sm:flex sm:space-y-0 ">
                <!-- Modal toggle -->
                <button data-modal-target="select-modal" data-modal-toggle="select-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs sm:text-sm px-5 py-2 sm:py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Tanya Saya ?
                </button>

                <!-- Main modal -->
                <div id="select-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Open positions
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="select-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <p class="text-gray-500 dark:text-gray-400 mb-4">Select your desired position:</p>
                                <ul class="space-y-4 mb-4">
                                    <li>
                                        <input type="radio" id="job-1" name="job" value="job-1" class="hidden peer" required />
                                        <label for="job-1" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">UI/UX Engineer</div>
                                                <div class="w-full text-gray-500 dark:text-gray-400">Flowbite</div>
                                            </div>
                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="job-2" name="job" value="job-2" class="hidden peer">
                                        <label for="job-2" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">React Developer</div>
                                                <div class="w-full text-gray-500 dark:text-gray-400">Alphabet</div>
                                            </div>
                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="radio" id="job-3" name="job" value="job-3" class="hidden peer">
                                        <label for="job-3" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                            <div class="block">
                                                <div class="w-full text-lg font-semibold">Full Stack Engineer</div>
                                                <div class="w-full text-gray-500 dark:text-gray-400">Apple</div>
                                            </div>
                                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                            </svg>
                                        </label>
                                    </li>
                                </ul>
                                <button class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Next step
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards Start -->
            <div class="mb-4 grid gap-2 lg:gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3">
                @foreach ($kursus as $item)
                <div class="rounded-lg border border-gray-200 bg-white p-2 lg:p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="object-cover aspect-video">
                        <img class="w-full h-full rounded-lg object-cover"
                            src="{{ $item->foto_kursus ? asset('storage/' . $item->foto_kursus) : asset('image/Thumnnail.jpg') }}"
                            alt="{{ $item->judul }}" />
                    </div>
                    <div class="cursor-default">
                        <h1 class="text-base sm:text-xl font-bold leading-tight text-gray-900 my-2">{{ $item->judul }}</h1>
                        <div class="space-y-2"> <!-- Pembungkus utama untuk semua item -->
                            <!-- Pelatih -->
                            <div class="flex space-x-2">
                                <strong class="text-xs text-gray-900">Pelatih:</strong>
                                <p class="text-xs text-gray-900">
                                    {{ $item->pengguna ? $item->pengguna->nama : 'Nama Tidak Ditemukan' }}
                                </p>
                            </div>

                            <!-- Rating -->
                            <div class="flex space-x-2">
                                <strong class="text-xs text-gray-900">Rating:</strong>
                                <p class="text-xs">{{ $item->rating }}</p>
                            </div>

                            <!-- Jadwal -->
                            <div class="flex space-x-2">
                                <strong class="text-xs text-gray-900">Jadwal:</strong>
                                <p class="text-xs">
                                    {{ \Carbon\Carbon::parse($item->tgl_mulai)->format('d M Y') }}
                                    <strong>s/d</strong>
                                    {{ \Carbon\Carbon::parse($item->tgl_selesai)->format('d M Y') }}
                                </p>
                            </div>

                            <!-- Kapasitas -->
                            <div class="flex space-x-2">
                                <strong class="text-xs text-gray-900">Kapasitas:</strong>
                                <p class="text-xs">{{ $item->kapasitas }}</p>
                            </div>

                            <!-- Level -->
                            <div class="flex space-x-2">
                                <strong class="text-xs text-gray-900">Level:</strong>
                                <p class="text-xs
                                    @if($item->tingkat_kesulitan == 'Pemula') text-green-500
                                    @elseif($item->tingkat_kesulitan == 'Menengah') text-yellow-500
                                    @elseif($item->tingkat_kesulitan == 'Lanjutan') text-red-500
                                    @else text-gray-500
                                    @endif">
                                    {{ $item->tingkat_kesulitan }}
                                </p>
                            </div>

                            <!-- Lokasi -->
                            <div class="flex space-x-2">
                                <strong class="text-xs text-gray-900">Lokasi:</strong>
                                <p class="text-xs text-gray-900">{{ $item->lokasi }}</p>
                            </div>

                            <!-- Harga -->
                            <div class="flex space-x-2 mb-4"> <!-- Menambahkan margin bottom disini -->
                                <strong class="text-xl text-gray-900">Harga:</strong>
                                <p class="text-xl font-bold text-gray-900">Rp.{{ number_format($item->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>

                        <!-- Tombol Lihat Detail -->
                        <div class="flex justify-end mt-5">
                            <a href="/CoursePage/{{ $item->kursus_id }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="flex justify-center items-center mt-5">
                <ul class="inline-flex -space-x-px text-sm">
                    <!-- Tombol Previous -->
                    @if($kursus->onFirstPage())
                    <li>
                        <span class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-s-lg cursor-not-allowed">
                            Sebelumnya
                        </span>
                    </li>
                    @else
                    <li>
                        <a href="{{ $kursus->previousPageUrl() }}" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            Sebelumnya
                        </a>
                    </li>
                    @endif

                    <!-- Tombol Next -->
                    @if($kursus->hasMorePages())
                    <li>
                        <a href="{{ $kursus->nextPageUrl() }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            Berikutnya
                        </a>
                    </li>
                    @else
                    <li>
                        <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-e-lg cursor-not-allowed">
                            Berikutnya
                        </span>
                    </li>
                    @endif
                </ul>
            </div>

            <!-- Menampilkan informasi data -->
            <div class="mt-4 mb-5 text-center text-sm text-gray-600 dark:text-gray-400">
                Menampilkan {{ $kursus->firstItem() }} sampai {{ $kursus->lastItem() }} dari {{ $kursus->total() }} entri
            </div>

    </section>

    @endsection
@extends('layouts.mainPeserta')

@section('MainPeserta')

<!-- content start -->
<main>
    <h2 class="text-2xl font-bold py-2 text-slate-950">Kursus Saya</h2>

    <div class="sm:ms-7 mt-2">
        <!-- kursus 1 -->
        <div class="w-full bg-slate-50 border border-gray-300 rounded-xl shadow-md overflow-hidden my-2">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48 border-r border-Border" src="{{ asset('image/12.webp') }}" alt="Gambar">
                </div>
                <div class="p-8">
                    <h3 class="tracking-wide text-xl font-bold text-slate-800 h-7 overflow-hidden">Welding Beginner</h3>
                    <div class="mt-2 sm:flex items-center sm:justify-between">
                        <p class="text-TeksSecond sm:w-2/3 text-sm mb-5 sm:mb-0 h-20 overflow-hidden">Ini adalah deskripsi dari card. Deskripsi ini bisa diperpanjang sesuai dengan kebutuhan konten yang ingin ditampilkan.</p>
                        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white bg-ButtonBase hover:bg-HoverGlow focus:ring-4 focus:outline-none focus:ring-HoverGlow rounded-lg text-center transition duration-700 mb-7 sm:mb-0">
                            Continue Learning
                        </button>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 mt-4 border border-Border">
                        <div class="bg-ButtonBase text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- kursus 2 -->
        <div class="w-full bg-slate-50 border border-gray-300 rounded-xl shadow-md overflow-hidden my-2">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48 border-r border-Border" src="{{ asset('image/12.webp') }}" alt="Gambar">
                </div>
                <div class="p-8">
                    <h3 class="tracking-wide text-xl font-bold text-slate-800 h-7 overflow-hidden">Welding Beginner</h3>
                    <div class="mt-2 sm:flex items-center sm:justify-between">
                        <p class="text-TeksSecond sm:w-2/3 text-sm mb-5 sm:mb-0 h-20 overflow-hidden">Ini adalah deskripsi dari card. Deskripsi ini bisa diperpanjang sesuai dengan kebutuhan konten yang ingin ditampilkan.</p>
                        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white bg-ButtonBase hover:bg-HoverGlow focus:ring-4 focus:outline-none focus:ring-HoverGlow rounded-lg text-center transition duration-700 mb-7 sm:mb-0">
                            Continue Learning
                        </button>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 mt-4 border border-Border">
                        <div class="bg-ButtonBase text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kursus 3 -->
        <div class="w-full bg-slate-50 border border-gray-300 rounded-xl shadow-md overflow-hidden my-2">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48 border-r border-Border" src="{{ asset('image/12.webp') }}" alt="Gambar">
                </div>
                <div class="p-8">
                    <h3 class="tracking-wide text-xl font-bold text-slate-800 h-7 overflow-hidden">Welding Beginner</h3>
                    <div class="mt-2 sm:flex items-center sm:justify-between">
                        <p class="text-TeksSecond sm:w-2/3 text-sm mb-5 sm:mb-0 h-20 overflow-hidden">Ini adalah deskripsi dari card. Deskripsi ini bisa diperpanjang sesuai dengan kebutuhan konten yang ingin ditampilkan.</p>
                        <button type="button" class="px-5 py-2.5 text-sm font-medium text-white bg-ButtonBase hover:bg-HoverGlow focus:ring-4 focus:outline-none focus:ring-HoverGlow rounded-lg text-center transition duration-700 mb-7 sm:mb-0">
                            Continue Learning
                        </button>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700 mt-4 border border-Border">
                        <div class="bg-ButtonBase text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%"> 45%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- content end -->

@endsection
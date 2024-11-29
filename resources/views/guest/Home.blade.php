@extends('layouts.main')

@section('Main')

<!-- Javascript home -->
@vite(['resources/js/home.js'])

<section>
    <!-- Row 1: Satu kolom -->
    <div class="sm:my-5 my-3">
        <div class="bg-gwhite text-center p-6">
            <button type="button" class="px-5 py-2.5 text-sm sm:text-lg font-medium text-white bg-[#0D92F4] rounded-lg">Temukan Apa yang Kami Sediakan</button>
            <div class="px-2">
                <h2 class="mt-5 mb-2 font-bold text-xl sm:text-3xl text-slate-950">Platform Lengkap untuk Penguasaan Pengelasan dan Fabrikasi</h2>
                <p class="text-xs sm:text-sm sm:px-5 text-slate-800">
                    Bergabunglah dengan platform utama kami yang menghubungkan Anda dengan mentor berperingkat teratas di bidang pengelasan dan fabrikasi. Lacak kemajuan Anda secara real-time dan terima wawasan yang dipersonalisasi yang disesuaikan dengan kebutuhan pembelajaran Anda. Dengan teknologi AI yang canggih, platform kami menawarkan rekomendasi khusus untuk membantu Anda mempertajam keterampilan Anda secara efektif. Baik Anda seorang pemula atau ingin meningkatkan keahlian Anda, Anda akan mendapatkan manfaat dari pelatihan terstruktur dan umpan balik yang berharga untuk unggul dalam industri fabrikasi. Semua ini dapat diakses dalam satu platform ramah pengguna yang dirancang untuk kesuksesan Anda.
                </p>
            </div>
        </div>
    </div>

    <!-- Row 2: Empat kolom -->
    <div class="sm:grid sm:grid-cols-4 sm:px-4">
        <!-- Peningkatan Keterampilan -->
        <div class="bg-white text-center px-8 py-6 sm:p-3 lg:p-6">
            <div class="relative inline-flex mb-3 items-center justify-center w-12 h-12 bg-[#0D92F4] rounded-lg cursor-pointer">
                <i class="fas fa-envelope text-white text-2xl"></i>
            </div>
            <h3 class=" text-xl lg:text-2xl py-2 sm:h-20 font-semibold text-slate-950">Peningkatan Keterampilan</h3>
            <p class="text-xs sm:text-sm text-slate-800">Buka potensi Anda dengan pembelajaran langsung dan bimbingan ahli untuk terus meningkatkan keahlian Anda</p>
        </div>

        <!-- Melacak Kemajuan -->
        <div class="bg-white text-center px-8 py-6 sm:p-3 lg:p-6">
            <div class=" relative inline-flex mb-3 items-center justify-center w-12 h-12 bg-[#0D92F4] rounded-lg cursor-pointer">
                <i class="fa-solid fa-chart-line text-white text-2xl"></i>
            </div>
            <h3 class="text-xl lg:text-2xl py-2 sm:h-20 font-semibold text-slate-950">Melacak Kemajuan Anda</h3>
            <p class="text-xs sm:text-sm text-slate-800">Pantau pencapaian Anda secara real-time dengan alat intuitif kami yang membantu Anda tetap mencapai tujuan Anda</p>
        </div>

        <!-- Mentor dengan nilai tertinggi -->
        <div class="bg-white text-center px-8 py-6 sm:p-3 lg:p-6">
            <div class=" relative inline-flex mb-3 items-center justify-center w-12 h-12 bg-[#0D92F4] rounded-lg cursor-pointer">
                <i class="fa-solid fa-user-tie text-white text-2xl"></i>
            </div>
            <h3 class="text-xl lg:text-2xl py-2 sm:h-20 font-semibold text-slate-950">Mentor dengan Nilai Tertinggi</h3>
            <p class="text-xs sm:text-sm text-slate-800">Belajar dari yang terbaik di bidangnya, dengan akses ke mentor yang dinilai tinggi oleh siswa atas keahlian dan pengajaran mereka</p>
        </div>

        <!-- Mentor dengan nilai tertinggi -->
        <div class="bg-white text-center px-8 py-6 sm:p-3 lg:p-6">
            <div class=" relative inline-flex mb-3 items-center justify-center w-12 h-12 bg-[#0D92F4] rounded-lg cursor-pointer">
                <i class="fa-solid fa-braille text-white text-2xl"></i>
            </div>
            <h3 class="text-xl lg:text-2xl pt-2 sm:h-20 font-semibold text-slate-950">Saran saya</h3>
            <p class="text-xs sm:text-sm text-slate-800">Dapatkan rekomendasi yang dipersonalisasi dan didukung oleh AI untuk mengoptimalkan perjalanan pembelajaran Anda dan meningkatkan kinerja</p>
        </div>
    </div>
</section>

<section class="sm:mt-10 bg-[#F8FAFC]">
    <div class="text-center mb-8 px-8">
        <h2 class="text-2xl sm:text-3xl font-bold mb-1 sm:mb-3 pt-10 text-slate-950">Belajar dari Pakar Nilai Tertinggi</h2>
        <p class="text-sm sm:text-base text-slate-800">Dapatkan pengalaman langsung dan wawasan industri dari mentor yang dipercaya dan dinilai tinggi oleh pelajar seperti Anda.</p>
    </div>

    <div class="flex flex-wrap justify-center gap-5 pb-10"> <!-- Ubah justify-between menjadi justify-center untuk menyejajarkan di tengah -->
        <div class="w-80 h-96 p-2"> <!-- Mengatur lebar card menjadi 80 dan tinggi menjadi 96 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                <div class=" flex justify-center py-10 bg-[#0D92F4]">
                    <img class="h-24 w-24 rounded-full object-cover" src="{{ asset('image/mentor-career-success.jpg') }}" alt="product image" />
                </div>
                <div class="px-4 py-4">
                    <div>
                        <h3 class="text-lg text-center sm:text-xl font-semibold tracking-tight text-gray-900 dark:text-white mb-3">Johnny Mar & Partner</h3>
                        <p class="text-center mb-3 text-sm max-h-16 overflow-hidden text-[#475569]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error temporibus fugit cum optio! Praesentium magni autem, dolores ipsam atque corporis quasi deleniti enim totam, aliquid, at facere assumenda impedit modi quos? Perferendis dolores ipsum ipsam, aspernatur magni nesciunt debitis fuga est facere similique dolor ducimus, suscipit voluptate iure dolorem nam.</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="w-32 bg-[#2563EB] rounded-full text-white font-medium text-sm px-4 py-1.5 text-center transition duration-700 ease-in-out hover:bg-[#161D6F]">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Duplikat Card -->
        <div class="w-80 h-96 p-2"> <!-- Mengatur lebar card menjadi 80 dan tinggi menjadi 96 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                <div class=" flex justify-center py-10 bg-[#0D92F4]">
                    <img class="h-24 w-24 rounded-full object-cover" src="{{ asset('image/mentor-career-success.jpg') }}" alt="product image" />
                </div>
                <div class="px-4 py-4">
                    <div>
                        <h3 class="text-lg text-center sm:text-xl font-semibold tracking-tight text-gray-900 dark:text-white mb-3">Johnny Mar & Partner</h3>
                        <p class="text-center mb-3 text-sm max-h-16 overflow-hidden text-[#475569]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error temporibus fugit cum optio! Praesentium magni autem, dolores ipsam atque corporis quasi deleniti enim totam, aliquid, at facere assumenda impedit modi quos? Perferendis dolores ipsum ipsam, aspernatur magni nesciunt debitis fuga est facere similique dolor ducimus, suscipit voluptate iure dolorem nam.</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="w-32 bg-[#2563EB] rounded-full text-white font-medium text-sm px-4 py-1.5 text-center transition duration-700 ease-in-out hover:bg-[#161D6F]">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Duplikat Card -->
        <div class="w-80 h-96 p-2"> <!-- Mengatur lebar card menjadi 80 dan tinggi menjadi 96 -->
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full">
                <div class=" flex justify-center py-10 bg-[#0D92F4]">
                    <img class="h-24 w-24 rounded-full object-cover" src="{{ asset('image/mentor-career-success.jpg') }}" alt="product image" />
                </div>
                <div class="px-4 py-4">
                    <div>
                        <h3 class="text-lg text-center sm:text-xl font-semibold tracking-tight text-gray-900 dark:text-white mb-3">Johnny Mar & Partner</h3>
                        <p class="text-center mb-3 text-sm max-h-16 overflow-hidden text-[#475569]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error temporibus fugit cum optio! Praesentium magni autem, dolores ipsam atque corporis quasi deleniti enim totam, aliquid, at facere assumenda impedit modi quos? Perferendis dolores ipsum ipsam, aspernatur magni nesciunt debitis fuga est facere similique dolor ducimus, suscipit voluptate iure dolorem nam.</p>
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="w-32 bg-[#2563EB] rounded-full text-white font-medium text-sm px-4 py-1.5 text-center transition duration-700 ease-in-out hover:bg-[#161D6F]">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="sm:my-10 px-6 text-center">
        <h2 class=" text-2xl sm:text-3xl sm:pb-2 font-bold">Pimpin Jalan sebagai Mentor</h2>
        <p class="text-sm sm:text-base text-[#0F172A] sm:px-5">Membantu membentuk masa depan dengan membimbing calon pelajar. Jadilah mentor, bagikan pengetahuan Anda, dan berikan inspirasi kepada generasi profesional terampil berikutnya.</p>
    </div>

    <div class="container mx-auto p-4"> <!-- Container untuk menampung semua konten -->
        <div class="flex justify-center"> <!-- Menyelaraskan konten ke tengah -->
            <div class="w-full h-96 p-2"> <!-- Card dengan lebar penuh dan tinggi 96 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full overflow-hidden"> <!-- Menambahkan overflow-hidden untuk memastikan rounding bekerja -->
                    <div class="relative h-full"> <!-- Menjaga tinggi tetap dan menempatkan gambar di dalam -->
                        <img class="w-full h-full object-cover rounded-t-lg" src="{{ asset('image/I.webp') }}" alt="product image" />
                        <div class="absolute inset-0 bg-black opacity-30 rounded-t-lg"></div> <!-- Overlay hitam transparan -->
                        <div class="absolute left-8 sm:left-24 bottom-1/2 transform translate-y-1/2"> <!-- Mengatur posisi tombol dan teks di kiri tengah -->
                            <h2 class="text-white text-3xl font-bold mb-5">Menjadi Mentor</h2> <!-- Teks di atas tombol dengan warna putih -->
                            <a href="#" class="bg-[#337DC1] rounded-lg lg:text-lg text-white font-medium text-center px-4 py-2.5">Mulailah kursus hari ini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container p-5 mx-auto sm:p-10">
    <div class="sm:flex">
        <div class="sm:w-1/2 p-4">
            <h2 class="font-extrabold text-2xl mb-2 sm:text-3xl">Pertanyaan yang sering diajukan</h2>
            <span class="text-sm text-[#0F172A] w-1/3">Bagian FAQ kami menawarkan jawaban cepat
                tentang kursus pengelasan kami, yang mencakup topik seperti durasi, sertifikasi,
                dan materi yang dibutuhkan. Untuk hal lain, jangan ragu untuk menghubungi kami!</span>
        </div>
        <div class="sm:w-1/2 p-4 ">
            <div id="accordion-open" data-accordion="open">
                <h2 id="accordion-open-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-1" aria-expanded="true"
                        aria-controls="accordion-open-body-1">
                        <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg> What is Flowbite?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 text-sm sm:text-base dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of
                            interactive components built on top of Tailwind CSS including buttons, dropdowns, modals,
                            navbars, and more.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
                                href="/docs/getting-started/introduction/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start
                            developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-2" aria-expanded="false"
                        aria-controls="accordion-open-body-2">
                        <span class="flex items-center text-left"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>Is there a Figma file available?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                    <div class="p-5 border border-b-0 text-sm sm:text-base border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed
                            using the Figma software so everything you see in the library has a design equivalent in our
                            Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
                                class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based
                            on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-open-heading-3">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                        data-accordion-target="#accordion-open-body-3" aria-expanded="false"
                        aria-controls="accordion-open-body-3">
                        <span class="flex items-center text-left"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg> What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                    <div class="p-5 border border-t-0 text-sm sm:text-base border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components
                            from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
                            Another difference is that Flowbite relies on smaller and standalone components, whereas
                            Tailwind UI offers sections of pages.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both
                            Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you
                            from using the best of two worlds.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                        <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                            <li><a href="https://flowbite.com/pro/"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow"
                                    class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sm:mx-12 mx-3 bg-[#F8FAFC]">
    <div class="container sm:flex justify-between mb-5">
        <div class="text-2xl sm:text-3xl px-8 font-bold lg:w-1/3 sm:w-1/2 mt-10">
           <h2>Apa Kata Pelanggan Kami Tentang Kami</h2>
        </div>
    </div>

    <div class="pb-10">
        <div class="flex gap-3 overflow-x-auto scrollbar-hidden h-auto">
         @foreach ($data as $umpan_balik)
            <div class="article-container">
                <article class="w-96 min-h-72 px-10 py-5 mb-2 bg-white rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                        <div class="font-medium dark:text-white">
                            <h4 class="h-5 overflow-hidden">{{ $umpan_balik->nama_komentar }}</h4>
                            <p>
                                <time datetime="{{ $umpan_balik->created_at->timezone('Asia/Jakarta')->format('Y-m-d H:i:s') }}" class="block text-sm text-gray-500 dark:text-gray-400">
                                    {{ $umpan_balik->created_at->timezone('Asia/Jakarta')->format('d F Y, H:i') }}
                                </time>
                            </p>


                        </div>
                    </div>
                    <div class="relative">
                        <p class="text-content mb-3 mt-3 text-gray-500 dark:text-gray-400 text-sm sm:text-base text-justify ">
                            {{ $umpan_balik->komentar }}
                        </p>
                        <button class="toggle-text text-blue-500 dark:text-blue-400 text-sm font-medium hover:underline focus:outline-none">
                            Selengkapnya
                        </button>
                    </div>
                </article>
            </div>
            @endforeach
        </div>  
    </div>
   
    @endsection

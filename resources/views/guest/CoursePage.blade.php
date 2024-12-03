@extends('layouts.NavAndFoot')

@section('NavAndFoot')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- content -->
<section class="sm:grid sm:grid-cols-3 gap-4 mt-24 sm:pr-8 pr-4">
  <div class=" pl-4 sm:pl-8 mb-12 sm:mb-0">
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <!-- Gambar -->
      <div class="object-cover aspect-video">
        <img class="w-full rounded-lg h-full hover:brightness-50 object-cover"
          src="{{ $kursus->foto_kursus ? asset('storage/' . $kursus->foto_kursus) : asset('image/Thumnnail.jpg') }}"
          alt="{{ $kursus->judul }}" />
      </div>

      <!-- Informasi -->
      <div class="mt-4">
        <h1 class="text-2xl font-bold">{{ $kursus->judul }}</h1>
        <div class="mt-4 text-sm text-gray-500">
          <p>
            <span>Jadwal:
              {{ \Carbon\Carbon::parse($kursus->tgl_mulai)->format('d M Y') }}
              <strong>s/d</strong>
              {{ \Carbon\Carbon::parse($kursus->tgl_selesai)->format('d M Y') }}
            </span>
          </p>
          <p>
            Durasi:
            @php
            $start = \Carbon\Carbon::parse($kursus->tgl_mulai);
            $end = \Carbon\Carbon::parse($kursus->tgl_selesai);
            $diff = $start->diff($end);

            // Format deskripsi durasi
            $durasi = [];
            if ($diff->m > 0) {
            $durasi[] = $diff->m . ' bulan';
            }
            if ($diff->d > 0) {
            $durasi[] = $diff->d . ' hari';
            }

            echo implode(' ', $durasi);
            @endphp
          </p>

          <p><span>Lokasi: {{ $kursus->lokasi }}</span></p>
        </div>

        <p class="text-xl font-bold mt-4">Rp.{{ number_format($kursus->harga, 0, ',', '.') }}</p>
      </div>

      <!-- Tombol Aksi -->
      @auth
      @if (Auth::user()->peran === 'Peserta')
      @php
      $pendaftaranSebelumnya = \App\Models\Pendaftaran::where('pengguna_id', Auth::id())
      ->where('kursus_id', $kursus->kursus_id)
      ->where('status_pendaftaran', '!=', 'Selesai')
      ->exists();
      @endphp

      @if ($pendaftaranSebelumnya)
      <div class="mt-4">
        <p class="text-gray-500">Anda sudah terdaftar di kursus ini dan belum menyelesaikannya.</p>
      </div>
      @else
      <form action="/DaftarPendaftaran" method="POST" class="mt-4">
        @csrf
        <input type="hidden" name="kursus_id" value="{{ $kursus->kursus_id }}">
        <input type="hidden" name="tgl_pendaftaran" value="{{ now()->toDateString() }}">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">
          Mulai Belajar
        </button>
      </form>
      @endif
      @else
      <div class="mt-4">
        <p class="text-gray-500">Kamu Adalah Seorang <strong>Pelatih</strong></p>
      </div>
      @endif
      @else
      <div class="mt-4">
        <p class="text-red-500">Silakan <a href="{{ route('login') }}" class="text-blue-500 underline">login</a> untuk mulai belajar.</p>
      </div>
      @endauth


    </div>
  </div>

  <!-- content 2 -->
  <div class="col-span-2 text-wrap pr-5 pl-8">
    <div class="lg:py-6 py-4 text-sm lg:text-lg text-gray-500">
      <P>KURSUS DITERBITKAN OLEH <b>{{ $kursus->pengguna ? $kursus->pengguna->nama : 'Nama Tidak Ditemukan' }}</b></P>
      <p class="text-sm">{{ $kursus->deskripsi }}</p>
    </div>
    <!-- course modul -->
    <div class="w-full max-w-4xl mx-auto border border-gray-300 rounded-lg">
      <div class="cursor-default p-3 lg:p-4 text-lg lg:text-xl font-bold text-gray-700 bg-gray-100 border-b border-gray-300">
        <h1>Modul Kursus</h1>
      </div>

      <!-- Module 1 -->
      <div class="border-b border-gray-200">
        <div id="accordion-collapse" class="mt-5">
          @if($kursus->kurikulum->isEmpty()) <!-- Check if kurikulum is empty -->
          <p class="text-center text-gray-500 dark:text-gray-400">Tidak ada modul yang tersedia.</p>
          @else
          @foreach($kursus->kurikulum as $kurikulum) <!-- Loop through kurikulums -->
          <h2 id="accordion-collapse-heading-{{ $kurikulum->kurikulum_id }}">
            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-{{ $kurikulum->kurikulum_id }}" aria-expanded="false" aria-controls="accordion-collapse-body-{{ $kurikulum->kurikulum_id }}">
              <span>{{ $kurikulum->nama_topik }}</span>
              <i id="lock-icon-closed-{{ $kurikulum->kurikulum_id }}" class="fas fa-lock text-gray-500 dark:text-gray-400"></i>
            </button>
          </h2>
          <div id="accordion-collapse-body-{{ $kurikulum->kurikulum_id }}" class="hidden" aria-labelledby="accordion-collapse-heading-{{ $kurikulum->kurikulum_id }}">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
              <div class="flex flex-col md:flex-row items-start gap-4">
                <!-- Pemutar video YouTube atau pesan alternatif -->
                @if($kurikulum->materi)
                <div class="mt-4 md:mt-0 flex-shrink-0">
                  <iframe width="560" height="315" src="{{ $kurikulum->materi }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                  </iframe>
                </div>
                @else
                <div class="mt-4 text-gray-500 dark:text-gray-400 flex-shrink-0">
                  Video tidak tersedia
                </div>
                @endif

                <!-- Deskripsi di sebelah kanan video -->
                <div class="flex-1">
                  <p>{{ $kurikulum->deskripsi }}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>


      <style>
        input:checked+label+div {
          display: block;
        }
      </style>
    </div>
</section>


<!-- review start -->
<div class="mt-12">
  <div class="sm:flex justify-center sm:px-12 items-center space-y-4 sm:space-x-8 lg:space-x-14 ">
    <!-- Loop through the limited ratings for this kursus -->
    @foreach ($ratings as $rating)
    <article class="w-96 h-auto px-10 py-4 bg-white rounded-lg sm:shadow-md dark:bg-gray-800">

      <!-- User info section -->
      <div class="flex items-center mb-4">
        <img class="w-10 h-10 me-4 rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
        <div class="font-medium dark:text-white">
          <p>{{ $rating->pengguna->nama }}
            <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">
              Joined on {{ optional($rating->pengguna->created_at)->format('F Y') ?? 'Date not available' }}
            </time>
          </p>
        </div>
      </div>

      <!-- Rating stars -->
      <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
        <p>{{ $rating->rating }} <span class="ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
      </div>

      <!-- Comment section -->
      <p class="mb-3 text-gray-500 dark:text-gray-400 text-sm sm:text-base">
        {{ $rating->komentar ?? 'No comment provided.' }}
      </p>
    </article>
    @endforeach
  </div>
</div>

<!-- review end -->

<!-- cards featured courses -->
<section class=" mx-4 sm:mx-8 lg:mx-16 sm:my-24 my-12">
  <h1 class="font-bold text-xl sm:text-2xl mb-2 sm:mb-4">Kursus Unggulan</h1>
  <!-- Cards Start -->
  <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4">
    <!-- card 1 -->
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <!-- penjelasan -->
      <div class=" grid grid-cols-3  mt-2 mb-4 text-xs sm:text-sm lg:text-xs ">
        <div class=" mt-2">
          <span class=" border rounded-lg py-2 px-4 sm:px-6 lg:px-2  text-gray-500"> 10 weeks</span>
        </div>
        <div class="mt-2">
          <span class=" border rounded-lg py-2 px-4 sm:px-6 lg:px-2  text-gray-500 "> tembesi</span>
        </div>
        <div>
          <p class="pt-2">Agung huci</p>
        </div>
      </div>
      <div class="pt-2 cursor-default">
        <a href="#" class="text-xl font-bold leading-tight text-gray-900 my-2  text-balance">Beginner's welding</a>
        <p class=" text-sm pt-2 pb-4 text-gray-500">Pelajari dasar-dasar pengelasan, termasuk teknik dasar, praktik keselamatan, dan peralatan penting. Mulailah membangun fondasi yang kuat untuk berkarir di bidang pengelasan.</p>
        <button class=" bg-blue-500 text-white sm:p-4 p-2 rounded-lg w-full"> Dapatkan sekarang</button>
      </div>
    </div>

    <!-- card 2 -->
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <!-- penjelasan -->
      <div class=" grid grid-cols-3  mt-2 mb-4 text-xs sm:text-sm lg:text-xs ">
        <div class=" mt-2">
          <span class=" border rounded-lg py-2 px-4 sm:px-6 lg:px-2  text-gray-500"> 10 weeks</span>
        </div>
        <div class="mt-2">
          <span class=" border rounded-lg py-2 px-4 sm:px-6 lg:px-2  text-gray-500 "> tembesi</span>
        </div>
        <div>
          <p class="pt-2">Agung huci</p>
        </div>
      </div>
      <div class="pt-2 cursor-default">
        <a href="#" class="text-xl font-bold leading-tight text-gray-900 my-2  text-balance">Beginner's welding</a>
        <p class=" text-sm pt-2 pb-4 text-gray-500">Pelajari dasar-dasar pengelasan, termasuk teknik dasar, praktik keselamatan, dan peralatan penting. Mulailah membangun fondasi yang kuat untuk berkarir di bidang pengelasan.</p>
        <button class=" bg-blue-500 text-white sm:p-4 p-2 rounded-lg w-full"> Dapatkan sekarang</button>
      </div>
    </div>

    <!-- card 3 -->
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <!-- penjelasan -->
      <div class=" grid grid-cols-3  mt-2 mb-4 text-xs sm:text-sm lg:text-xs ">
        <div class=" mt-2">
          <span class=" border rounded-lg py-2 px-4 sm:px-6 lg:px-2  text-gray-500"> 10 weeks</span>
        </div>
        <div class="mt-2">
          <span class=" border rounded-lg py-2 px-4 sm:px-6 lg:px-2  text-gray-500 "> tembesi</span>
        </div>
        <div>
          <p class="pt-2">Agung huci</p>
        </div>
      </div>
      <div class="pt-2 cursor-default">
        <a href="#" class="text-xl font-bold leading-tight text-gray-900 my-2  text-balance">Beginner's welding</a>
        <p class=" text-sm pt-2 pb-4 text-gray-500">Pelajari dasar-dasar pengelasan, termasuk teknik dasar, praktik keselamatan, dan peralatan penting. Mulailah membangun fondasi yang kuat untuk berkarir di bidang pengelasan.</p>
        <button class=" bg-blue-500 text-white sm:p-4 p-2 rounded-lg w-full"> Dapatkan sekarang</button>
      </div>
    </div>

    <!-- card 4 -->
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <!-- penjelasan -->
      <div class=" grid grid-cols-3  mt-2 mb-4 text-xs sm:text-sm lg:text-xs ">
        <div class=" mt-2">
          <span class=" border rounded-lg py-2 px-4 sm:px-6 lg:px-2  text-gray-500"> 10 weeks</span>
        </div>
        <div class="mt-2">
          <span class=" border rounded-lg py-2 px-4 sm:px-6 lg:px-2  text-gray-500 "> tembesi</span>
        </div>
        <div>
          <p class="pt-2">Agung huci</p>
        </div>
      </div>
      <div class="pt-2 cursor-default">
        <a href="#" class="text-xl font-bold leading-tight text-gray-900 my-2  text-balance">Beginner's welding</a>
        <p class=" text-sm pt-2 pb-4 text-gray-500">Pelajari dasar-dasar pengelasan, termasuk teknik dasar, praktik keselamatan, dan peralatan penting. Mulailah membangun fondasi yang kuat untuk berkarir di bidang pengelasan.</p>
        <button class=" bg-blue-500 text-white sm:p-4 p-2 rounded-lg w-full"> Dapatkan sekarang</button>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.4.1/dist/flowbite.min.js"></script>
  </div>
</section>


<!-- content -->

@endsection
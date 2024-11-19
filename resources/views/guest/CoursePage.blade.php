@extends('layouts.NavAndFoot')

@section('NavAndFoot')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<!-- content -->
<section class="sm:grid sm:grid-cols-3 gap-4 mt-24 sm:pr-8 pr-4">

  <!-- content 1 -->
  <div class=" pl-4 sm:pl-8 mb-12 sm:mb-0">
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">

      <!-- gambar -->
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full hover:brightness-50" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <!-- penjelasan -->
      <div class=" text-xs sm:text-[10px] lg:text-base grid grid-cols-3 lg:gap-1 mt-2 mb-4">
        <div class=" mt-2">
          <span class=" border rounded-lg py-2 px-3 sm:px-1 lg:px-4  text-gray-500"> 10 minggu</span>
        </div>
        <div class="mt-2">
          <span class=" border rounded-lg py-2 px-3 sm:px-1 lg:px-4  text-gray-500 "> tembesi</span>
        </div>
        <div>
          <p class="pt-2">Agung huci</p>
        </div>
      </div>

      <!-- detail kursus 1 -->
      <div class="cursor-default">
        <h1 class="text-xl lg:text-2xl font-bold leading-tight text-gray-900">Beginner's welding</h1>
        <div class=" flex items-center mb-2">
          <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9l0 28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5l0-24.6c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
          </svg>
          <p class="text-sm sm:text-xs lg:text-base sm:mb-2  text-gray-900 my-2 font-bold">
            10 Peserta pelatihan <span class=" font-normal">sudah mendaftar</span>
          </p>
        </div>

        <p class=" cursor-default text-wrap text-gray-500 text-sm">Pelajari dasar-dasar pengelasan, termasuk teknik dasar, praktik keselamatan, dan peralatan penting. Mulailah membangun fondasi yang kuat untuk berkarir di bidang pengelasan.</p>
        <h2 class="mb-2 font-bold text-gray-900 dark:text-white text-base pt-4">Kursus ini termasuk</h2>
        
        <ul class="max-w-md mb-4 space-y-1 text-gray-500 list-inside dark:text-gray-400">
          <li class="flex items-center">
            <svg class="w-3.5 h-3.5 me-2 text-blue-500 dark:text-blue-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            lorem ipsum
          </li>
          <li class="flex items-center">
            <svg class="w-3.5 h-3.5 me-2 text-blue-500 dark:text-blue-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            lorem ipsum
          </li>
          <li class="flex items-center">
            <svg class="w-3.5 h-3.5 me-2 text-blue-500 dark:text-blue-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            lorem ipsum
          </li>
        </ul>

        <p href="#" class="text-xl font-bold leading-tight text-gray-900 my-2 mb-4 ">Rp.20.000.000</p>
        <a href="/PaymentPage" class="bg-blue-500 py-2 w-full text-white font-semibold rounded-lg text-center inline-block">
          Mulai Belajar
        </a>
      </div>
    </div>
  </div>

  <!-- content 2 -->
  <div class="col-span-2 text-wrap pr-5 pl-8">
    <h1 class="font-bold sm:text-2xl text-xl">
      Welding Beginner
    </h1>
    <p class=" text-sm sm:text-base text-gray-600 mt-1 sm:mt-4 "> 
      Pelajari dasar-dasar pengelasan, termasuk teknik dasar, praktik keselamatan, dan peralatan penting. 
      Mulailah membangun fondasi yang kuat untuk berkarir di bidang pengelasan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
      Etiam neque urna, dapibus et lectus ut, convallis tincidunt sapien. Di porttitor metus id nunc semper convallis. 
      Sed sollicitudin aliquam nibh, quis fermentum lectus auctor in. lorem nisl, maximus eget est sit amet, condimentum hendrerit erat. 
      Di porta quis odio eget mollis.
    </p>
    
    <div class="lg:py-6 py-4 text-sm lg:text-lg text-gray-500">
      <P>KURSUS DITERBITKAN OLEH <b>AGUNG ALTILERI</b></P>
    </div>

    <!-- course benefit -->
    <div class=" mb-4 bg-gray-200 rounded-md w-full py-4 sm:py-6">
      <h2 class="mb-2 text-sm sm:text-lg font-bold text-gray-900 dark:text-white pl-6 sm:pl-8">Manfaat dan Fasilitas Kursus</h2>
      <ul class="max-w-md text-sm sm:text-xs text-gray-500 list-inside dark:text-gray-400 pl-8 grid grid-cols-2 gap-2">
        <li class="flex items-center">
          <svg class="w-3.5 h-3.5 me-2 text-blue-500 dark:text-blue-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
          </svg>
          lorem ipsum
        </li>
        <li class="flex items-center">
          <svg class="w-3.5 h-3.5 me-2 text-blue-500 dark:text-blue-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
          </svg>
          lorem ipsum
        </li>
        <li class="flex items-center">
          <svg class="w-3.5 h-3.5 me-2 text-blue-500 dark:text-blue-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
          </svg>
          lorem ipsum
        </li>
        <li class="flex items-center">
          <svg class="w-3.5 h-3.5 me-2 text-blue-500 dark:text-blue-400 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
          </svg>
          lorem ipsum
        </li>
      </ul>
    </div>

    <!-- course modul -->
    <div class="w-full max-w-4xl mx-auto mt-8 border border-gray-300 rounded-lg">
      <div class="cursor-default p-3 lg:p-4 text-lg lg:text-xl font-bold text-gray-700 bg-gray-100 border-b border-gray-300">
        <h1>Modul Kursus</h1>
      </div>

      <!-- Module 1 -->
      <div class="border-b border-gray-200">
      <input  type="checkbox" id="module1" class="hidden">
        <label for="module1" class="flex items-center justify-between w-full p-5 text-left text-gray-800 hover:bg-gray-50 cursor-pointer">
          <div class="flex items-center">
            <svg class="lg:w-4 h-3 w-3 lg:h-4 mr-4 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
            </svg>
            <div>
              <h1 class="font-bold text-base lg:text-lg">MODUL 1</h1>
              <h2 class="font-semibold text-sm lg:text-base text-black">Dasar-dasar Pengelasan dan Penyambungan</h2>
              <p class="text-xs lg:text-sm text-gray-600">Pelajari dasar-dasar pengelasan, termasuk teknik dasar, praktik keselamatan, dan peralatan penting.</p>
            </div>
          </div>
          <svg class="hidden sm:block w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l-5 5 5 5"></path>
          </svg>
        </label>
        <div class="p-5 bg-white" style="display: none;">
          <p class="text-gray-600">Modul ini membahas dasar-dasar pengelasan. Anda akan mempelajari berbagai teknik pengelasan, protokol keselamatan, dan peralatan penting untuk memulai profesi pengelasan.</p>
        </div>
      </div>
      
      <!-- module 2 -->
      <div class="border-b border-gray-200">
      <input type="checkbox" id="module2" class="hidden">
        <label for="module2"  class="flex items-center justify-between w-full p-5 text-left text-gray-800 hover:bg-gray-50 cursor-pointer">
          <div class="flex items-center">
            <svg class="lg:w-4 h-3 w-3 lg:h-4 mr-4 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
            </svg>
            <div>
              <h1 class="font-bold text-base lg:text-lg">MODUL 2</h1>
              <h2 class="font-semibold text-sm lg:text-base text-black">Teknik Pengelasan Tingkat Lanjut</h2>
              <p class="text-xs sm:text-sm text-gray-600">Pelajari lebih dalam praktik pengelasan tingkat lanjut untuk berbagai material dan lingkungan kompleks.</p>
            </div>
          </div>
          <svg class="hidden sm:block w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l-5 5 5 5"></path>
          </svg>
        </label>
        <div class="p-5 bg-white" style="display: none;">
          <p class="text-gray-600">Dalam modul ini, Anda akan mempelajari berbagai teknik pengelasan untuk material canggih seperti baja tahan karat dan aluminium. Protokol keselamatan dan penggunaan alat canggih juga tercakup.</p>
        </div>
      </div>

      <div class="border-b border-gray-200">
      <input  type="checkbox" id="module1" class="hidden">
        <label for="module1" class="flex items-center justify-between w-full p-5 text-left text-gray-800 hover:bg-gray-50 cursor-pointer">
          <div class="flex items-center">
            <svg class="lg:w-4 h-3 w-3 lg:h-4 mr-4 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
            </svg>
            <div>
              <h1 class="font-bold text-base lg:text-lg">MODUL 3</h1>
            </div>
          </div>
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
<div class=" lg:px-14 px-4">
  <div class="w-full mt-8 border border-gray-300 rounded-lg">
    <div class="p-3 lg:p-4 text-lg lg:text-xl font-bold text-gray-700 bg-gray-100 border-b border-gray-300">
     Tinjauan Kursus
    </div>

    <!-- diagram start -->
    <div class=" border-gray-200 sm:grid sm:grid-cols-2 gap-4 px-4 sm:px-8 py-6 sm:py-14">

      <!-- diagram 1 -->
      <div class="bg-gray-100 p-4 sm:p-7 cursor-default text-base font-semibold">
        <h1 class="my-3 text-lg sm:text-xl">Kursus ini cocok untuk</h1>
        <div class="flex items-center space-x-3 p-4 bg-gray-100 rounded-lg my-8">
            <!-- Bar indikator -->
            <div class="flex space-x-1">
                <!-- Bar aktif -->
                <div class="w-5 h-12 bg-blue-500 rounded-full"></div>
                <!-- Bar kosong -->
                <div class="w-5 h-10 mt-2 border-2 border-blue-500 rounded-full"></div>
                <div class="w-5 h-8 mt-4 border-2 border-blue-500 rounded-full"></div>
            </div>
            
            <!-- Teks level -->
            <div class="ml-3">
                <p class="text-sm sm:text-base font-semibold">Pemula</p>
                <p class="text-xs sm:text-sm">(Berdasarkan 14 ulasan)</p>
            </div>
        </div>

        <p class="my-2 sm:my-3 text-lg lg:text-xl">Paling disukai</p>

        <!-- item 1 -->
        <div class="py-2 px-4 bg-white rounded-lg flex items-center my-2">
          <svg class="sm:w-5 w-4 h-4 sm:h-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path fill="#e60000" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
          </svg>
          <p class=" text-red-700 text-xs sm:text-sm">12 <span class="text-black">Materi kursus</span></p>
        </div>

        <!-- item 2 -->
        <div class="py-2 px-4 bg-white rounded-lg flex items-center my-2">
          <svg class="sm:w-5 w-4 h-4 sm:h-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path fill="#e60000" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
          </svg>
          <p class=" text-red-700 text-xs sm:text-sm">12 <span class="text-black">Materi kursus</span></p>
        </div>

        <!-- item 3 -->
        <div class="py-2 px-4 bg-white rounded-lg flex items-center my-2">
          <svg class="sm:w-5 w-4 h-4 sm:h-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path fill="#e60000" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
          </svg>
          <p class=" text-red-700 text-xs sm:text-sm">12 <span class="text-black">Materi kursus</span></p>
        </div>
      </div>

      <!-- diagram 2 -->
      <div class="bg-gray-100 p-5">
        <div class="max-w-md mx-auto my-4 sm:my-8 p-4 rounded-lg">
            <h2 class="text-center font-bold text-xl lg:text-2xl mb-4">Hasil yang Diharapkan</h2>
            <canvas id="myDoughnutChart" width="400" height="400"></canvas>
        </div>
      </div>

      <!-- script diagram 2  -->
      <script>
        const data = {
          labels: [
            'Sesuai',
            'Tidak Sesuai',
            'Melebihi'
          ],
          datasets: [{
            label: 'My First Dataset',
            data: [300, 50, 100],
            backgroundColor: [
              'rgb(255, 99, 132)',
              'rgb(54, 162, 235)',
              'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
          }]
        };

        const config = {
          type: 'doughnut',  // Atur tipe chart sebagai 'doughnut'
          data: data,
          options: {
            responsive: true,
            plugins: {
              legend: {
                position: 'top',
              },
            }
          },
        };

        // Inisialisasi chart
        const myDoughnutChart = new Chart(
          document.getElementById('myDoughnutChart'),
          config
        );
      </script>
    </div>

    <!-- review start -->
    <div class=" mt-8 mx-4 sm:mx-8">
      <!-- review 1 -->
      <div class="flex items-center mb-4 border rounded-lg border-gray-300 p-3">
          <img class="w-10 sm:w-12 h-10 sm:h-12 me-4 object-cover rounded-full" src="{{ asset('image/12.webp') }}" alt="">
          <div class="">
              <p class="font-bold text-base sm:text-lg mb-1 sm:mb-2">Jese Leos</p>
              <div class="sm:flex gap-4">
                <div class=" bg-gray-300 rounded-xl sm:rounded-2xl my-1 py-1 px-3 text-xs sm:text-sm">
                  <p>Kelas ini <span class="font-bold">Melampaui</span> expetasi saya</p>
                </div>
                <div class=" bg-gray-300 rounded-xl sm:rounded-2xl my-1 py-1 px-3 text-xs sm:text-sm">
                  <p>Kelas ini <span class="font-bold">Melampaui</span> expetasi saya</p>
                </div>
              </div>
          </div>
      </div>
      
      <!-- review 2 -->
      <div class="flex items-center mb-4 border rounded-lg border-gray-300 p-3">
          <img class="w-10 sm:w-12 h-10 sm:h-12 me-4 object-cover rounded-full" src="{{ asset('image/12.webp') }}" alt="">
          <div class="">
              <p class="font-bold text-base sm:text-lg mb-1 sm:mb-2">Jese Leos</p>
              <div class="sm:flex gap-4">
                <div class=" bg-gray-300 rounded-xl sm:rounded-2xl my-1 py-1 px-3 text-xs sm:text-sm">
                  <p>Kelas ini <span class="font-bold">Melampaui</span> expetasi saya</p>
                </div>
                <div class=" bg-gray-300 rounded-xl sm:rounded-2xl my-1 py-1 px-3 text-xs sm:text-sm">
                  <p>Kelas ini <span class="font-bold">Melampaui</span> expetasi saya</p>
                </div>
              </div>
          </div>
      </div>

      <!-- review 3 -->
      <div class="flex items-center mb-4 border rounded-lg border-gray-300 p-3">
          <img class="w-10 sm:w-12 h-10 sm:h-12 me-4 object-cover rounded-full" src="{{ asset('image/12.webp') }}" alt="">
          <div class="">
              <p class="font-bold text-base sm:text-lg mb-1 sm:mb-2">Jese Leos</p>
              <div class="sm:flex gap-4">
                <div class=" bg-gray-300 rounded-xl sm:rounded-2xl my-1 py-1 px-3 text-xs sm:text-sm">
                  <p>Kelas ini <span class="font-bold">Melampaui</span> expetasi saya</p>
                </div>
                <div class=" bg-gray-300 rounded-xl sm:rounded-2xl my-1 py-1 px-3 text-xs sm:text-sm">
                  <p>Kelas ini <span class="font-bold">Melampaui</span> expetasi saya</p>
                </div>
              </div>
              <p class=" text-gray-500 text-xs sm:text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque molestias aut corporis laboriosam nihil molestiae modi eaque id praesentium sint nemo aperiam, voluptatibus tenetur qui totam repudiandae inventore illo, sunt labore! Pariatur suscipit error eaque, alias dolorem qui non, atque facilis earum velit temporibus. Incidunt rerum suscipit facilis nisi quas.</p>
          </div>
      </div>
     
    <!-- review end -->
    <div class=" flex justify-center mb-5">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-9 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat lebih banyak</button>
    </div>
   
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
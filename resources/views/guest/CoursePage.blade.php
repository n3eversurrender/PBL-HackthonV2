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
  <div class="mt-12">
        <div class="sm:flex justify-center sm:px-12 items-center space-y-4 sm:space-x-8 lg:space-x-14 ">
            <article class="w-96 h-auto px-10 py-4 bg-white rounded-lg sm:shadow-md dark:bg-gray-800">
                <div class="flex items-center mb-4">
                    <img class="w-10 h-10 me-4 rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium dark:text-white">
                        <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined on August 2014</time></p>
                    </div>
                </div>
                <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <p>8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                    <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3>
                </div>
                <footer class="mb-5 text-sm sm:text-base text-gray-500 dark:text-gray-400">
                    <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
                </footer>
                <p class="mb-3 text-gray-500 dark:text-gray-400 text-sm sm:text-base">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p>
            </article>

            <article class="w-96 h-auto px-10 py-4 bg-white rounded-lg sm:shadow-md dark:bg-gray-800">
                <div class="flex items-center mb-4">
                    <img class="w-10 h-10 me-4 rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium dark:text-white">
                        <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined on August 2014</time></p>
                    </div>
                </div>
                <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <p>8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                    <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3>
                </div>
                <footer class="mb-5 text-sm sm:text-base text-gray-500 dark:text-gray-400">
                    <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
                </footer>
                <p class="mb-3 text-gray-500 dark:text-gray-400 text-sm sm:text-base">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p>
            </article>

            <article class="w-96 h-auto px-10 py-4 bg-white rounded-lg sm:shadow-md dark:bg-gray-800">
                <div class="flex items-center mb-4">
                    <img class="w-10 h-10 me-4 rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium dark:text-white">
                        <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined on August 2014</time></p>
                    </div>
                </div>
                <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                    <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                    </svg>
                    <p>8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                    <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3>
                </div>
                <footer class="mb-5 text-sm sm:text-base text-gray-500 dark:text-gray-400">
                    <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
                </footer>
                <p class="mb-3 text-gray-500 dark:text-gray-400 text-sm sm:text-base">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p>
            </article>
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
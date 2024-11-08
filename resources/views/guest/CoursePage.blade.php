@extends('layouts.NavAndFoot')

@section('main')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- content -->
<div class=" grid grid-cols-3 gap-4 mt-8 pr-8">

  <div class=" pl-8 ">
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <div class=" grid grid-cols-3 gap-1 mt-2 mb-4">
        <div class=" mt-2">
          <span class=" border rounded-lg py-2 px-4  text-gray-500"> 10 weeks</span>
        </div>
        <div class="mt-2">
          <span class=" border rounded-lg py-2 px-4  text-gray-500 "> tembesi</span>
        </div>
        <div>
          <p class="pt-2">Agung huci</p>
        </div>
      </div>

      <div class="cursor-default">
        <p class="text-xl font-bold leading-tight text-gray-900">Beginner's welding</p>
        <div class=" flex items-center mb-2">
          <svg class="w-5 h-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9l0 28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5l0-24.6c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
          </svg>
          <p class="text-base mb-2  text-gray-900 my-2 font-bold">
            10 trainees <span class=" font-normal">already enrolled</span>
          </p>
        </div>
        <p class=" text-wrap text-gray-500 text-sm">Learn the fundamentals of welding, including basic techniques, safety practices, and essential tools. Start building a strong foundation for a career in welding.</p>
        <h2 class="mb-2 font-bold text-gray-900 dark:text-white text-base pt-4">This Course include</h2>
        
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
        <p href="#" class="text-xl font-bold leading-tight text-gray-900 hover:underline my-2 mb-4 ">Rp.20.000.000</p>
        <a href="/PaymentPage" class="bg-blue-500 py-2 w-full text-white font-semibold rounded-lg text-center inline-block">
          Start Learning
        </a>
      </div>
    </div>
  </div>

  <div class="col-span-2 text-wrap pr-5 pl-8">
    <div class=" font-bold text-2xl">
      Welding Beginner
    </div>
    <div class=" text-base/6  text-gray-600 mt-4 ">
      <p> Learn the fundamentals of welding, including basic techniques, safety practices, and essential tools. Start building a strong foundation for a career in welding. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam neque urna, dapibus et lectus ut, convallis tincidunt sapien. In porttitor metus id nunc semper convallis. Sed sollicitudin aliquam nibh, quis fermentum lectus auctor in. lorem nisl, maximus eget est sit amet, condimentum hendrerit erat. In porta quis odio eget mollis. </p>
    </div>
    <div class="py-6 text-gray-500">
      <P>COURSE PUBLISH BY <b>AGUNG ALTILERI</b></P>
    </div>
    <div class=" mb-4 bg-gray-200 rounded-md w-full py-6">
      <h2 class="mb-2 text-lg font-bold text-gray-900 dark:text-white pl-8 mt-4">Course Benefits and Faculities</h2>
      <ul class="max-w-md  text-gray-500 list-inside dark:text-gray-400 pl-8 grid grid-cols-2 gap-2 mb-8">
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
      <div class="p-4 text-xl font-bold text-gray-700 bg-gray-100 border-b border-gray-300">
        Course Modules
      </div>

      <!-- Module 1 -->
      <div class="border-b border-gray-200">
        <input type="checkbox" id="module1" class="hidden">
        <label for="module1" class="flex items-center justify-between w-full p-5 text-left text-gray-800 hover:bg-gray-50 cursor-pointer">
          <div class="flex items-center">
            <svg class="w-4 h-4 mr-3 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
            </svg>
            <div>
              <p class="font-bold">MODULE 1</p>
              <p class="font-semibold text-black">Fundamental of Welding and Joining</p>
              <p class="text-sm text-gray-600">Learn the fundamentals of welding, including basic techniques, safety practices, and essential tools.</p>
            </div>
          </div>
          <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l-5 5 5 5"></path>
          </svg>
        </label>
        <div class="p-5 bg-white" style="display: none;">
          <p class="text-gray-600">This module covers the basics of welding. You will learn various welding techniques, safety protocols, and essential tools to get started in the welding profession.</p>
        </div>
      </div>

      <!-- Module 2 -->
      <div class="border-b border-gray-200">
        <input type="checkbox" id="module2" class="hidden">
        <label for="module2" class="flex items-center justify-between w-full p-5 text-left text-gray-800 hover:bg-gray-50 cursor-pointer">
          <div class="flex items-center">
            <svg class="w-4 h-4 mr-3 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
            </svg>
            <div>
              <p class="font-bold">MODULE 2</p>
              <p class="font-semibold text-black">Advanced Welding Techniques</p>
              <p class="text-sm text-gray-600">Deep dive into advanced welding practices for different materials and complex environments.</p>
            </div>
          </div>
          <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l-5 5 5 5"></path>
          </svg>
        </label>
        <div class="p-5 bg-white" style="display: none;">
          <p class="text-gray-600">In this module, you will learn about different welding techniques for advanced materials like stainless steel and aluminum. Safety protocols and advanced tool usage are also covered.</p>
        </div>
      </div>

      <!-- Module 3 -->
      <div class="border-b border-gray-200">
        <input type="checkbox" id="module3" class="hidden">
        <label for="module3" class="flex items-center justify-between w-full p-5 text-left text-gray-800 hover:bg-gray-50 cursor-pointer">
          <div class="flex items-center">
            <svg class="w-4 h-4 mr-3 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
            </svg>
            <div>
              <p class="font-bold">MODULE 3</p>
              <p class="font-semibold text-black">Welding Safety Protocols</p>
              <p class="text-sm text-gray-600">Learn the essential safety measures for a welding career, including equipment handling and hazard prevention.</p>
            </div>
          </div>
          <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l-5 5 5 5"></path>
          </svg>
        </label>
        <div class="p-5 bg-white" style="display: none;">
          <p class="text-gray-600">This module focuses on safety measures while welding. Topics include proper use of safety gear, recognizing hazards, and how to respond in emergency situations.</p>
        </div>
      </div>
    </div>

    <style>
      input:checked+label+div {
        display: block;
      }
    </style> 
  </div>
</div>


<!-- review start -->
<div class=" px-14">
  <div class="w-full mt-8 border border-gray-300 rounded-lg">
    <div class="p-4 text-xl font-bold text-gray-700 bg-gray-100 border-b border-gray-300">
      Course Review
    </div>

    <!-- diagram start -->
    <div class=" border-gray-200 grid grid-cols-2 gap-4 px-8 py-14">

      <!-- diagram 1 -->
      <div class="bg-gray-100 p-7 cursor-default text-base font-semibold">
        <p class="my-3 text-xl">This Course is sutaible for</p>
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
                <p class="text-lg font-semibold">Beginner</p>
                <p class="text-sm">(Based on 14 reviews)</p>
            </div>
        </div>

        <p class="my-3 text-xl">Most liked</p>

        <!-- item 1 -->
        <div class="py-2 px-4 bg-white rounded-lg flex items-center my-2">
          <svg class="w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path fill="#e60000" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
          </svg>
          <p class=" text-red-700">12 <span class="text-black">Course material</span></p>
        </div>

        <!-- item 2 -->
        <div class="py-2 px-4 bg-white rounded-lg flex items-center my-2">
          <svg class="w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path fill="#e60000" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
          </svg>
          <p class=" text-red-700">12 <span class="text-black">Course material</span></p>
        </div>

        <!-- item 3 -->
        <div class="py-2 px-4 bg-white rounded-lg flex items-center my-2">
          <svg class="w-5 h-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path fill="#e60000" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/>
          </svg>
          <p class=" text-red-700">12 <span class="text-black">Course material</span></p>
        </div>
      </div>

      <!-- diagram 2 -->
      <div class="bg-gray-100 p-5">
        <div class="max-w-md mx-auto my-8 p-4 rounded-lg">
            <h2 class="text-center font-bold text-2xl mb-4">Expected Result</h2>
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
    <div class=" mt-8 mx-8">
      <!-- review 1 -->
      <div class="flex items-center mb-4 border rounded-lg border-gray-300 p-3">
          <img class="w-12 h-12 me-4 object-cover rounded-full" src="{{ asset('image/12.webp') }}" alt="">
          <div class="">
              <p class="font-bold mb-2">Jese Leos</p>
              <div class="flex gap-4">
                <div class=" bg-gray-300 rounded-2xl py-1 px-3">
                  <p>This Class <span class="font-bold">Supassed</span> my expetations</p>
                </div>
                <div class=" bg-gray-300 rounded-2xl py-1 px-3">
                  <p>This Class <span class="font-bold">Supassed</span> my expetations</p>
                </div>
              </div>
          </div>
      </div>
      
      <!-- review 2 -->
      <div class="flex items-center mb-4 border rounded-lg border-gray-300 p-3">
          <img class="w-12 h-12 me-4 object-cover rounded-full" src="{{ asset('image/12.webp') }}" alt="">
          <div class="">
              <p class="font-bold mb-2">Jese Leos</p>
              <div class="flex gap-4">
                <div class=" bg-gray-300 rounded-2xl py-1 px-3">
                  <p>This Class <span class="font-bold">Supassed</span> my expetations</p>
                </div>
                <div class=" bg-gray-300 rounded-2xl py-1 px-3">
                  <p>This Class <span class="font-bold">Supassed</span> my expetations</p>
                </div>
              </div>
          </div>
      </div>

      <!-- review 3 -->
      <div class="flex items-center mb-4 border rounded-lg border-gray-300 p-3">
          <img class="w-12 h-12 me-4 object-cover rounded-full" src="{{ asset('image/12.webp') }}" alt="">
          <div class="">
              <p class="font-bold mb-2">Jese Leos</p>
              <div class="flex gap-4 mb-3">
                <div class=" bg-gray-300 rounded-2xl py-1 px-3">
                  <p>This Class <span class="font-bold">Supassed</span> my expetations</p>
                </div>
                <div class=" bg-gray-300 rounded-2xl py-1 px-3">
                  <p>This Class <span class="font-bold">Supassed</span> my expetations</p>
                </div>
              </div>
              <p class=" text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque molestias aut corporis laboriosam nihil molestiae modi eaque id praesentium sint nemo aperiam, voluptatibus tenetur qui totam repudiandae inventore illo, sunt labore! Pariatur suscipit error eaque, alias dolorem qui non, atque facilis earum velit temporibus. Incidunt rerum suscipit facilis nisi quas.</p>
          </div>
      </div>
    </div>
    <!-- review end -->
    <div class=" flex justify-center mb-5">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-9 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">See More</button>
    </div>
   
  </div>      
</div>
<!-- review end -->
<!-- cards featured courses -->
<section class=" mx-16 my-24">
  <h1 class="font-bold text-2xl mb-4">Featured Courses</h1>
  <!-- Cards Start -->
  <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-4">
    <!-- card 1 -->
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <div class=" grid grid-cols-3 gap-1 py-2">
        <div>
          <button class=" border-2 rounded-lg p-2 text-gray-500"> 10 weeks</button>
        </div>
        <div><button class=" border-2 rounded-lg p-2 text-gray-500"> tembesi</button>
        </div>
        <div>
          <p class="pt-2"> Agung huci</p>
        </div>
      </div>
      <div class="pt-2">

        <a href="#" class="text-xl font-bold leading-tight text-gray-900 hover:underline my-2  text-balance">Beginner's welding</a>
        <p class=" text-sm pt-2 pb-4 text-gray-500">Learn the fundamentals of welding, including basic techniques, safety practices, and essential tools. Start building a strong foundation for a career in welding.</p>


        <button class=" bg-blue-500 text-white p-4 rounded-lg w-full"> Get it now</button>
      </div>
    </div>

    <!-- card 1 -->
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <div class=" grid grid-cols-3 gap-1 py-2">
        <div>
          <button class=" border-2 rounded-lg p-2 text-gray-500"> 10 weeks</button>
        </div>
        <div><button class=" border-2 rounded-lg p-2 text-gray-500"> tembesi</button>
        </div>
        <div>
          <p class="pt-2"> Agung huci</p>
        </div>
      </div>
      <div class="pt-2">
        <a href="#" class="text-xl font-bold leading-tight text-gray-900 hover:underline my-2  text-balance">Beginner's welding</a>
        <p class=" text-sm pt-2 pb-4 text-gray-500">Learn the fundamentals of welding, including basic techniques, safety practices, and essential tools. Start building a strong foundation for a career in welding.</p>
        <button class=" bg-blue-500 text-white p-4 rounded-lg w-full"> Get it now</button>
      </div>
    </div>

    <!-- card 1 -->
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <div class=" grid grid-cols-3 gap-1 py-2">
        <div>
          <button class=" border-2 rounded-lg p-2 text-gray-500"> 10 weeks</button>
        </div>
        <div><button class=" border-2 rounded-lg p-2 text-gray-500"> tembesi</button>
        </div>
        <div>
          <p class="pt-2"> Agung huci</p>
        </div>
      </div>
      <div class="pt-2">

        <a href="#" class="text-xl font-bold leading-tight text-gray-900 hover:underline my-2  text-balance">Beginner's welding</a>
        <p class=" text-sm pt-2 pb-4 text-gray-500">Learn the fundamentals of welding, including basic techniques, safety practices, and essential tools. Start building a strong foundation for a career in welding.</p>


        <button class=" bg-blue-500 text-white p-4 rounded-lg w-full"> Get it now</button>
      </div>
    </div>
    <!-- card 1 -->
    <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
      <div class="object-cover aspect-video">
        <a href="#">
          <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
        </a>
      </div>

      <div class=" grid grid-cols-3 gap-1 py-2">
        <div>
          <button class=" border-2 rounded-lg p-2 text-gray-500"> 10 weeks</button>
        </div>
        <div><button class=" border-2 rounded-lg p-2 text-gray-500"> tembesi</button>
        </div>
        <div>
          <p class="pt-2"> Agung huci</p>
        </div>
      </div>
      <div class="pt-2">

        <a href="#" class="text-xl font-bold leading-tight text-gray-900 hover:underline my-2  text-balance">Beginner's welding</a>
        <p class=" text-sm pt-2 pb-4 text-gray-500">Learn the fundamentals of welding, including basic techniques, safety practices, and essential tools. Start building a strong foundation for a career in welding.</p>


        <button class=" bg-blue-500 text-white p-4 rounded-lg w-full"> Get it now</button>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.4.1/dist/flowbite.min.js"></script>
  </div>
</section>


<!-- content -->

@endsection
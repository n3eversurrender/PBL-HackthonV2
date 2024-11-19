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
                    <ul id="dropdown-category" class="hidden px-4 space-y-2">
                        <li>
                            <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg  group">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2  text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Semua Kursus</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg  group">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Pemotong</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg  group">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Pelipatan</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg  group">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Punching</label>
                            </div>
                        </li>
                    </ul>
                </li>

                <!-- Level -->
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-xs sm:text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-level" data-collapse-toggle="dropdown-level">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Level</span>
                        <svg class="w-2 h-2 sm:w-3 sm:h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                        </svg>
                    </button>
                    <hr>
                    <ul id="dropdown-level" class="hidden px-4 space-y-2">
                        <li>
                            <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg  group">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Semua Level</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg  group">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Pemula</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg  group">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Menengah</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center w-full sm:p-2 py-1 pr-4 text-gray-900 transition duration-75 rounded-lg  group">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-xs sm:text-sm font-medium text-gray-900 dark:text-gray-300">Ahli</label>
                            </div>
                        </li>
                    </ul>
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
                <!-- card 1 -->
                <div class="rounded-lg border border-gray-200 bg-white p-2 lg:p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="object-cover aspect-video">
                        <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
                    </div>
                    <div class="sm:pt-6 cursor-default">

                        <h1 class=" text-base sm:text-xl font-bold leading-tight text-gray-900 my-2  ">Beginner's welding</h1>
                        <p class=" text-sm sm:text-base mb-2 leading-tight text-gray-900 sm:my-2 ">wahyu sucipto</p>

                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-xs sm:text-sm">8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                        </div>

                        <p href="#" class=" text-xs sm:text-base mb-2 leading-tight text-gray-900 ">Batam</p>
                        <p class="text-xs mb-2 sm:mb-5 font-semibold">Status : <span class=" text-blue-600">Kursus Aktif</span> </p>
                        <p href="#" class="text-base sm:text-xl mb-5 font-bold leading-tight text-gray-900 ">Rp.20.000.000</p>


                        <div class="flex justify-end">
                            <a href="/CoursePage" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 2 -->
                <div class="rounded-lg border border-gray-200 bg-white p-2 lg:p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="object-cover aspect-video">
                        <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
                    </div>
                    <div class="sm:pt-6 cursor-default">

                        <h1 class=" text-base sm:text-xl font-bold leading-tight text-gray-900 my-2  ">Beginner's welding</h1>
                        <p class=" text-sm sm:text-base mb-2 leading-tight text-gray-900 sm:my-2 ">wahyu sucipto</p>

                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-xs sm:text-sm">8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                        </div>

                        <p href="#" class=" text-xs sm:text-base mb-2 leading-tight text-gray-900 ">Batam</p>
                        <p class="text-xs mb-2 sm:mb-5 font-semibold">Status : <span class=" text-blue-600">Kursus Aktif</span> </p>
                        <p href="#" class="text-base sm:text-xl mb-5 font-bold leading-tight text-gray-900 ">Rp.20.000.000</p>


                        <div class="flex justify-end">
                            <a href="/CoursePage" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="rounded-lg border border-gray-200 bg-white p-2 lg:p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="object-cover aspect-video">
                        <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
                    </div>
                    <div class="sm:pt-6 cursor-default">

                        <h1 class=" text-base sm:text-xl font-bold leading-tight text-gray-900 my-2  ">Beginner's welding</h1>
                        <p class=" text-sm sm:text-base mb-2 leading-tight text-gray-900 sm:my-2 ">wahyu sucipto</p>

                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-xs sm:text-sm">8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                        </div>

                        <p href="#" class=" text-xs sm:text-base mb-2 leading-tight text-gray-900 ">Batam</p>
                        <p class="text-xs mb-2 sm:mb-5 font-semibold">Status : <span class=" text-blue-600">Kursus Aktif</span> </p>
                        <p href="#" class="text-base sm:text-xl mb-5 font-bold leading-tight text-gray-900 ">Rp.20.000.000</p>


                        <div class="flex justify-end">
                            <a href="/CoursePage" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 4 -->
                <div class="rounded-lg border border-gray-200 bg-white p-2 lg:p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="object-cover aspect-video">
                        <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
                    </div>
                    <div class="sm:pt-6 cursor-default">

                        <h1 class=" text-base sm:text-xl font-bold leading-tight text-gray-900 my-2  ">Beginner's welding</h1>
                        <p class=" text-sm sm:text-base mb-2 leading-tight text-gray-900 sm:my-2 ">wahyu sucipto</p>

                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-xs sm:text-sm">8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                        </div>

                        <p href="#" class=" text-xs sm:text-base mb-2 leading-tight text-gray-900 ">Batam</p>
                        <p class="text-xs mb-2 sm:mb-5 font-semibold">Status : <span class=" text-blue-600">Kursus Aktif</span> </p>
                        <p href="#" class="text-base sm:text-xl mb-5 font-bold leading-tight text-gray-900 ">Rp.20.000.000</p>


                        <div class="flex justify-end">
                            <a href="/CoursePage" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 5 -->
                <div class="rounded-lg border border-gray-200 bg-white p-2 lg:p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="object-cover aspect-video">
                        <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
                    </div>
                    <div class="sm:pt-6 cursor-default">

                        <h1 class=" text-base sm:text-xl font-bold leading-tight text-gray-900 my-2  ">Beginner's welding</h1>
                        <p class=" text-sm sm:text-base mb-2 leading-tight text-gray-900 sm:my-2 ">wahyu sucipto</p>

                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-xs sm:text-sm">8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                        </div>

                        <p href="#" class=" text-xs sm:text-base mb-2 leading-tight text-gray-900 ">Batam</p>
                        <p class="text-xs mb-2 sm:mb-5 font-semibold">Status : <span class=" text-blue-600">Kursus Aktif</span> </p>
                        <p href="#" class="text-base sm:text-xl mb-5 font-bold leading-tight text-gray-900 ">Rp.20.000.000</p>


                        <div class="flex justify-end">
                            <a href="/CoursePage" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 6 -->
                <div class="rounded-lg border border-gray-200 bg-white p-2 lg:p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="object-cover aspect-video">
                        <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
                    </div>
                    <div class="sm:pt-6 cursor-default">

                        <h1 class=" text-base sm:text-xl font-bold leading-tight text-gray-900 my-2  ">Beginner's welding</h1>
                        <p class=" text-sm sm:text-base mb-2 leading-tight text-gray-900 sm:my-2 ">wahyu sucipto</p>

                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-xs sm:text-sm">8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                        </div>

                        <p href="#" class=" text-xs sm:text-base mb-2 leading-tight text-gray-900 ">Batam</p>
                        <p class="text-xs mb-2 sm:mb-5 font-semibold">Status : <span class=" text-blue-600">Kursus Aktif</span> </p>
                        <p href="#" class="text-base sm:text-xl mb-5 font-bold leading-tight text-gray-900 ">Rp.20.000.000</p>


                        <div class="flex justify-end">
                            <a href="/CoursePage" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 7 -->
                <div class="rounded-lg border border-gray-200 bg-white p-2 lg:p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="object-cover aspect-video">
                        <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
                    </div>
                    <div class="sm:pt-6 cursor-default">

                        <h1 class=" text-base sm:text-xl font-bold leading-tight text-gray-900 my-2  ">Beginner's welding</h1>
                        <p class=" text-sm sm:text-base mb-2 leading-tight text-gray-900 sm:my-2 ">wahyu sucipto</p>

                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-xs sm:text-sm">8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                        </div>

                        <p href="#" class=" text-xs sm:text-base mb-2 leading-tight text-gray-900 ">Batam</p>
                        <p class="text-xs mb-2 sm:mb-5 font-semibold">Status : <span class=" text-blue-600">Kursus Aktif</span> </p>
                        <p href="#" class="text-base sm:text-xl mb-5 font-bold leading-tight text-gray-900 ">Rp.20.000.000</p>


                        <div class="flex justify-end">
                            <a href="/CoursePage" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 8 -->
                <div class="rounded-lg border border-gray-200 bg-white p-2 lg:p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <div class="object-cover aspect-video">
                        <img class="w-full rounded-lg h-full" src="{{ asset('image/12.webp') }}" alt="" />
                    </div>
                    <div class="sm:pt-6 cursor-default">

                        <h1 class=" text-base sm:text-xl font-bold leading-tight text-gray-900 my-2  ">Beginner's welding</h1>
                        <p class=" text-sm sm:text-base mb-2 leading-tight text-gray-900 sm:my-2 ">wahyu sucipto</p>

                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <p class="text-xs sm:text-sm">8,5<span class=" ml-2 text-xs sm:text-sm text-gray-600">Rate</span></p>
                        </div>

                        <p href="#" class=" text-xs sm:text-base mb-2 leading-tight text-gray-900 ">Batam</p>
                        <p class="text-xs mb-2 sm:mb-5 font-semibold">Status : <span class=" text-blue-600">Kursus Aktif</span> </p>
                        <p href="#" class="text-base sm:text-xl mb-5 font-bold leading-tight text-gray-900 ">Rp.20.000.000</p>


                        <div class="flex justify-end">
                            <a href="/CoursePage" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    @endsection
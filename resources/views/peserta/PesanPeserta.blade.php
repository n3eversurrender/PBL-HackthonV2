@extends('layouts.mainPeserta')

@section('MainPeserta')


<section class="grid grid-cols-3 ">
<!-- sidebar start-->
     
    <!-- <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
    </button> -->

    <aside id="default-sidebar" class="" aria-label="Sidebar">
    <div class="overflow-y-auto h-screen pe-2 w-72 bg-white">
        <!-- search start -->  
        <form class="max-w-md mx-auto">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required />
            </div>
        </form>
        <!-- search end -->

        <!-- list Chat Start -->
         <div class="flex justify-between my-5">
            <div>
                <h1 class=" font-bold text-2xl">Chat</h1>
            </div>
            <div>
                <svg id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class=" flex items-center mt-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512">
                    <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/>
                </svg>      
                
                <!-- Dropdown menu -->
                <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-32">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">List Group</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                    
                    </ul>
                </div>
            </div>
         </div>

        <ul class="space-y-3 font-medium">
            <!-- chat 1 group-->
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Welder Class</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Liam: <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, repudiandae.</span>
                            </p>
                        </div>
                    </div>
                </a>
            </li>

            <!-- chat 2 personal -->
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
            <li> 
                <a class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                    <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                    <div class="font-medium cursor-default dark:text-white w-full">
                        <div class="flex justify-between">
                            <div>Liam</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 ">
                            <p class="h-4 overflow-hidden">Lorem ipsum dolor sit amet blabla consectetur adipisicing elit. Dicta, repudiandae.
                            </p>
                        </div>
                    </div>
                </a>
            </li>   
        </ul>
        <!-- list chat end -->
    </div>
    </aside>
    <!-- sidebar end -->

    <!-- isi chat start -->
    <div class="col-span-2 h-screen overflow-y-scroll pe-3 bg-white">
        <!-- header -->
        <div class="bg-white absolute w-3/6">
            <div class="flex items-center gap-4 rounded-lg pe-2 hover:bg-gray-100">
                <img class="w-14 h-14 object-cover rounded-full" src="{{ asset('image/9203764.png') }}" alt="">
                <div class="font-medium cursor-default dark:text-white w-full">
                    <div class="flex justify-between">
                        <div>Welder Class</div>
                            <div class=" text-xs flex items-center">23.20</div>
                        </div>
                    <div class="text-xs text-gray-500 dark:text-gray-400 ">
                        <p class="h-4 overflow-hidden">Liam: <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, repudiandae.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- body -->
         <div class=" bg-slate-200 mt-16 mb-10">
            
            <!-- chat left -->
            <div class="flex p-5 items-start gap-2.5">
            <img class="w-8 h-8 rounded-full" src="{{ asset('image/9203764.png') }}" alt="Jese image">
            <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                </div>
                <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
            </div>

            <!-- chat right -->
            <div class="flex p-5 justify-end items-start gap-2.5">
            <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                </div>
                <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
            <img class="w-8 h-8 rounded-full" src="{{ asset('image/9203764.png') }}" alt="Jese image">
            </div>

             <!-- chat left -->
             <div class="flex p-5 items-start gap-2.5">
            <img class="w-8 h-8 rounded-full" src="{{ asset('image/9203764.png') }}" alt="Jese image">
            <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                </div>
                <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
            </div>

            <!-- chat right -->
            <div class="flex p-5 justify-end items-start gap-2.5">
            <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                </div>
                <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
            <img class="w-8 h-8 rounded-full" src="{{ asset('image/9203764.png') }}" alt="Jese image">
            </div>

            <!-- chat right -->
            <div class="flex p-5 justify-end items-start gap-2.5">
            <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                </div>
                <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
            <img class="w-8 h-8 rounded-full" src="{{ asset('image/9203764.png') }}" alt="Jese image">
            </div>

            <!-- chat right -->
            <div class="flex p-5 justify-end items-start gap-2.5">
            <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                </div>
                <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
            <img class="w-8 h-8 rounded-full" src="{{ asset('image/9203764.png') }}" alt="Jese image">
            </div>

            <!-- chat right -->
            <div class="flex p-5 justify-end items-start gap-2.5">
            <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
                </div>
                <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
            </div>
            <img class="w-8 h-8 rounded-full" src="{{ asset('image/9203764.png') }}" alt="Jese image">
            </div>

         </div>

        <!-- input text -->
        <form class="fixed bottom-7 w-3/6">
            <label for="chat" class="sr-only">Your message</label>
            <div class="flex items-center px-3 py-2 rounded-lg bg-white dark:bg-gray-700">
                <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                    </svg>
                    <span class="sr-only">Upload image</span>
                </button>
                <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.408 7.5h.01m-6.876 0h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM4.6 11a5.5 5.5 0 0 0 10.81 0H4.6Z"/>
                    </svg>
                    <span class="sr-only">Add emoji</span>
                </button>
                <textarea id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                    <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                    <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
                    </svg>
                    <span class="sr-only">Send message</span>
                </button>
            </div>
        </form>


    </div>
    <!-- isi chat end -->

    
</section>

@endsection
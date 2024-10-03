@extends('layouts.mainPelatih')

@section('MainPelatih')

<div class="flex space-x-6 overflow-x-auto">
    <div class="w-60 bg-white border border-gray-200 rounded-lg shadow-md">
        <div class="p-4">
            <h5 class="mb-1 text-md tracking-tight text-gray-900">Total Review</h5>
            <p class="mb-1 text-xl font-semibold text-gray-700">500</p>
        </div>
    </div>

    <div class="w-60 bg-white border border-gray-200 rounded-lg shadow-md">
        <div class="p-4">
            <h5 class="mb-1 text-md tracking-tight text-gray-900">1 Star Reviews</h5>
            <div class="flex justify-between items-center">
                <p class="mb-0 text-xl font-semibold text-gray-700">50</p>
                <span class="bg-[#FF0000] text-white text-xs font-medium px-2.5 py-0.5 rounded border border-[#FF0000]">1.0</span>
            </div>
        </div>
    </div>

    <div class="w-60 bg-white border border-gray-200 rounded-lg shadow-md">
        <div class="p-4">
            <h5 class="mb-1 text-md tracking-tight text-gray-900">2 Star Reviews</h5>
            <div class="flex justify-between items-center">
                <p class="mb-0 text-xl font-semibold text-gray-700">50</p>
                <span class="bg-[#CA8A04] text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-[#CA8A04]">2.0</span>
            </div>
        </div>
    </div>

    <div class="w-60 bg-white border border-gray-200 rounded-lg shadow-md">
        <div class="p-4">
            <h5 class="mb-1 text-md tracking-tight text-gray-900">3 Star Reviews</h5>
            <div class="flex justify-between items-center">
                <p class="mb-0 text-xl font-semibold text-gray-700">100</p>
                <span class="bg-yellow-300 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-yellow-400">3.0</span>
            </div>
        </div>
    </div>

    <div class="w-60 bg-white border border-gray-200 rounded-lg shadow-md">
        <div class="p-4"> <!-- Mengurangi padding dari p-5 menjadi p-4 -->
            <h5 class="mb-1 text-md tracking-tight text-gray-900">4 Star Reviews</h5>
            <div class="flex justify-between items-center">
                <p class="mb-0 text-xl font-semibold text-gray-700">150</p>
                <span class="bg-[#9AE6B4] text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-[#68D391]">4.0</span>
            </div>
        </div>
    </div>

    <div class="w-60 bg-white border border-gray-200 rounded-lg shadow-md">
        <div class="p-4">
            <h5 class="mb-1 text-md tracking-tight text-gray-900">5 Star Reviews</h5>
            <div class="flex justify-between items-center">
                <p class="mb-0 text-xl font-semibold text-gray-700">250</p>
                <span class="bg-[#2F855A] text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded border border-[#276749]">5.0</span>
            </div>
        </div>
    </div>
</div>


<div class="bg-white border border-gray-200 rounded-lg shadow-md mt-5">
    <div class="flex">
        <img class="w-1/3 h-auto object-cover rounded-l-lg" src="{{ asset('image/12.webp') }}" alt="Welding Image" />
        <div class="p-4 flex-grow">
            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">Welding Beginner</h5>
            <div class="flex items-center mb-3">
                <span class="text-yellow-500">⭐⭐⭐⭐☆</span>
                <span class="ml-2 text-sm text-gray-600">(1200 Ratings)</span>
            </div>
            <p class="mb-3 text-sm text-gray-700">10 Trainee already enrolled</p>
            <p class="mb-2 text-gray-600">Learn the fundamentals of welding, including basic techniques, safety practices, and essential tools.</p>
            <div class="flex items-center justify-between mb-4">
                <p class="text-lg font-semibold">Rp. 1.000.000</p>
                <button class="inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    Edit Course
                </button>
            </div>
        </div>
    </div>
</div>

<div class="bg-white border border-gray-200 rounded-lg shadow-md mt-5">
    <div class="flex">
        <img class="w-1/3 h-auto object-cover rounded-l-lg" src="{{ asset('image/12.webp') }}" alt="Welding Image" />
        <div class="p-4 flex-grow">
            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">Welding Beginner</h5>
            <div class="flex items-center mb-3">
                <span class="text-yellow-500">⭐⭐⭐⭐☆</span>
                <span class="ml-2 text-sm text-gray-600">(1200 Ratings)</span>
            </div>
            <p class="mb-3 text-sm text-gray-700">10 Trainee already enrolled</p>
            <p class="mb-2 text-gray-600">Learn the fundamentals of welding, including basic techniques, safety practices, and essential tools.</p>
            <div class="flex items-center justify-between mb-4">
                <p class="text-lg font-semibold">Rp. 1.000.000</p>
                <button class="inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    Edit Course
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
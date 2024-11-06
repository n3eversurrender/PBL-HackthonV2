@extends('layouts.mainPeserta')

@section('MainPeserta')

@include('partials.breadcrumbKursus')

@foreach($kursus as $kursusItem)
<div class="w-full bg-white border border-gray-300 rounded-xl shadow-md overflow-hidden mt-5">
    <div class="md:flex">
        <div class="md:shrink-0">
            <img class="h-48 w-full object-cover md:h-full md:w-48 border-r border-gray-300"
                src="{{ $kursusItem->foto_kursus ? asset('image/' . $kursusItem->foto_kursus) : asset('image/Thumnnail.jpg') }}"
                alt="Gambar">
        </div>

        <div class="p-8 flex flex-col justify-between w-full">
            <div>
                <div class="uppercase tracking-wide text-xl font-bold text-indigo-500">
                    {{ $kursusItem->judul }}
                </div>
                <p class="mt-4 text-gray-500">
                    {{ $kursusItem->deskripsi }}
                </p>
            </div>
            <div class="mt-6 flex items-center justify-between">
                <div class="w-3/4 bg-gray-200 rounded-full dark:bg-gray-700 border border-gray-400">
                    <div class="bg-[#337DC1] text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 45%">45%</div>
                </div>
                <button type="button"
                    class="px-5 py-2.5 text-sm font-medium text-white bg-[#337DC1] hover:bg-[#2B649B] focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-auto">
                    <a href="{{ route('kursusModul.show', $kursusItem->kursus_id) }}" class="text-white">Continue Learning</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
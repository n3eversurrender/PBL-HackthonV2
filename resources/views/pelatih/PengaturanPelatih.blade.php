@extends('layouts.mainPelatih')

@section('MainPelatih')

<!-- content start -->
<main>
    <h1 class="mb-2 text-xl font-bold">Trainner Profile Page</h1>
    <form action="">
        <!-- photo start -->
        <div class=" flex mb-5">
            <div>
                <img class="w-16 h-16 rounded-full" src="{{ asset('image/9203764.png') }}" alt="Rounded avatar">
            </div>
            <div class=" flex items-center ms-3">
                <div>
                    <h2 class=" text-base font-bold">Niati</h2>
                    <p class=" text-xs">Niatiniati@gmail.com</p>
                </div>
            </div>
        </div>
        <!-- photo end -->

        <div class=" flex gap-6 ">
            <div class="  w-full">
                <label for="telepon" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">No Telepon</label>
                <input type="text" name="telpon" id="telpon" class="bg-gray-100 border border-gray-100 text-gray-900 mb-10 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your phone number" required="">

                <label for="jeniskelamin" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Jenis Kelamin</label>
                <select id="jeniskelamin" class="bg-gray-100 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 mb-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected disabled>Pilih Jenis Kelamin</option>
                    <option value="lakilaki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>

                <h1 class="font-bold text-lg mb-5 mt-9">Work Experience</h1>

                <label for="position" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Position</label>
                <input type="text" name="position" id="position" class="bg-gray-100 border border-gray-100 text-gray-900 mb-5 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your Position" required="">

                <label for="typework" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Type of Work</label>
                <select id="typework" class="bg-gray-100 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 mb-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected disabled>Select your job type</option>
                    <option value="">Welder</option>
                    <option value="">Fabricator</option>
                    <option value="">Fitter</option>
                    <option value="">Machinist</option>
                    <option value="">Metal Finisher</option>
                </select>
            </div>
            <div class="  w-full">
                <label for="alamat" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Alamat</label>
                <textarea name="alamat" id="alamat" class=" bg-gray-100 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your address" required=""></textarea>

                <label for="education" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Education</label>
                <input type="text" name="education" id="education" class="bg-gray-100 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 mb-20 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your education" required="">

                <label for="skills" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Skills</label>
                <select id="skills" class="bg-gray-100 border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 mb-5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected disabled>Select your skills</option>
                    <option value="">Pemrograman CNC </option>
                    <option value="">Teknik Pematrian</option>
                    <option value="">Pengoperasian Alat Berat</option>
                    <option value="">Kontrol Kualitas</option>
                </select>

                <label for="company" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Company Name</label>
                <input type="text" name="company" id="company" class="bg-gray-100 border border-gray-100 text-gray-900 mb-5 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your company" required="">
            </div>
        </div>

        <!-- upload file pengalaman -->
        <div class="mb-7">
            <form action="">
                <label for="pengalaman" class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Work Experience Certificate</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                <p class="mt-1 mb-5 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                <button type="button" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-6 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Waiting for Approval</button>
            </form>
        </div>

        <div class="flex justify-end w-full">
            <button type="button" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-10 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Save</button>
        </div>
    </form>
</main>
<!-- content end -->

@endsection
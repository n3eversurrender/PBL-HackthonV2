@extends('layouts.mainPelatih')

@section('MainPelatih')

<div class="flex items-start space-x-4">
    <figure class="max-w-96">
        <!-- Iframe untuk preview PDF -->
        <iframe id="pdfPreview" class="rounded-lg border-2 border-gray-300" src="{{ asset('pdf/1.pdf') }}" style="width: 100%; height: 275px;" frameborder="0"></iframe>
        <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">PDF Preview</figcaption>
    </figure>

    <div class="flex-grow">
        <!-- Input untuk mengunggah file PDF -->
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file PDF untuk sertifikat</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" accept="application/pdf">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Upload a PDF file (MAX. 800x400px).</p>

        <!-- Dropdown untuk memilih kursus -->
        <form class="mt-5 w-full">
            <label for="courses" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kursus untuk Sertifikat</label>
            <select id="courses" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected disabled>Pilih Kursus</option>
                <option value="course1">Kursus Welding</option>
                <option value="course2">Kursus Fitting</option>
                <option value="course3">Kursus Painting</option>
            </select>

            <!-- Tombol Kirim di bawah dropdown -->
            <button type="submit" class="mt-4 inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                Kirim
            </button>
        </form>
    </div>
</div>

<script>
    // Fungsi untuk menampilkan preview PDF ketika di-upload
    document.getElementById('file_input').addEventListener('change', function(event) {
        const file = event.target.files[0];

        if (file && file.type === "application/pdf") {
            // Membaca file PDF menggunakan FileReader
            const reader = new FileReader();

            reader.onload = function(e) {
                const pdfPreview = document.getElementById('pdfPreview');
                pdfPreview.src = e.target.result; // Menampilkan PDF di iframe
            }

            reader.readAsDataURL(file); // Membaca file sebagai URL Data
        } else {
            alert("File yang di-upload bukan PDF!");
        }
    });
</script>

@endsection
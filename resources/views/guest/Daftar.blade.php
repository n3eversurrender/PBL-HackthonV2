<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Tambahkan jQuery -->
</head>

<body>
    <div class="flex justify-between h-full">
        <div class="bg-white px-24 p-4 w-full">
            <h2 class="font-bold text-3xl text-center mb-10">Buat Akun Anda</h2>
            <form id="registerForm" action="{{ route('pengguna.store') }}" method="POST">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John Doe" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required />
                    </div>
                </div>
                <div class="mb-6">
                    <label for="no_telepon" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">No Telepon</label>
                    <input type="text" id="no_telepon" name="no_telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="08123300220" required />
                </div>
                <div class="mb-6">
                    <label for="alamat" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan alamat lengkap..."></textarea>
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="jenis_kelamin" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label for="peran" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Role</label>
                        <select id="peran" name="peran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Pilih Role</option>
                            <option value="Peserta">Peserta</option>
                            <option value="Pelatih">Pelatih</option>
                        </select>
                    </div>
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="mb-6">
                        <label for="kata_sandi" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="kata_sandi" name="kata_sandi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required />
                    </div>
                    <div class="mb-6">
                        <label for="confirm_kata_sandi" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Konfirmasi Password</label>
                        <input type="password" id="confirm_kata_sandi" name="confirm_kata_sandi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required />
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
            </form>
        </div>
        <img class="h-auto w-1/3 object-cover" src="{{ asset('image/12.webp') }}" alt="Background Main">
    </div>

    <script>
        $(document).ready(function() {
            $('#registerForm').on('submit', function(event) {
                event.preventDefault(); // Mencegah pengiriman form secara tradisional

                // Validasi password
                const password = $('#kata_sandi').val();
                const confirmPassword = $('#confirm_kata_sandi').val();

                if (password !== confirmPassword) {
                    alert('Password dan Konfirmasi Password tidak sama!');
                    return; // Hentikan eksekusi jika password tidak sama
                }

                // Ambil data dari form
                const formData = $(this).serialize();

                $.ajax({
                    url: "{{ route('pengguna.store') }}", // URL API
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Tanggapan sukses
                        alert('Akun berhasil dibuat!');
                        // Reset form jika perlu
                        $('#registerForm')[0].reset();
                    },
                    error: function(xhr) {
                        // Tangani error
                        let errorMessage = 'Ada kesalahan:\n';

                        // Cek jika ada error response JSON
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            const errors = xhr.responseJSON.errors;
                            for (const key in errors) {
                                if (errors.hasOwnProperty(key)) {
                                    errorMessage += errors[key].join('\n') + '\n';
                                }
                            }
                        } else {
                            // Jika tidak ada error spesifik, tampilkan pesan umum
                            errorMessage += 'Terjadi kesalahan, silakan coba lagi.';
                        }

                        // Tambahkan log respons lengkap untuk debugging
                        console.log(xhr.responseText); // Menampilkan respons lengkap di console
                        alert(errorMessage);
                    }
                });
            });
        });
    </script>

</body>

</html>
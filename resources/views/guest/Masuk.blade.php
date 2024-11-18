<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="flex justify-between h-screen">
        <div class="bg-white px-24 p-4 w-full flex flex-col justify-center items-center">
            <h2 class="font-bold text-3xl text-center mb-10">Ayo Segera Masuk Ke Halamanmu</h2>
            <form method="POST" action="{{ route('login') }}" class="w-full max-w-md">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
                    @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-6 relative">
                    <label for="kata_sandi" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Kata Sandi</label>
                    <input type="password" id="kata_sandi" name="kata_sandi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
                    <i class="fas fa-eye absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer" id="togglePassword"></i>
                    @error('kata_sandi')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="peran" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Pilih Peran</label>
                    <select id="peran" name="peran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="Pelatih">Pelatih</option>
                        <option value="Peserta">Peserta</option>
                    </select>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
            </form>
        </div>
        <img class="h-auto w-1/3 object-cover" src="{{ asset('image/12.webp') }}" alt="Background Main">
    </div>
</body>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('kata_sandi');

    togglePassword.addEventListener('click', function() {
        // Jika tipe password saat ini adalah "password", ubah menjadi "text"
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;

        // Ubah ikon mata sesuai dengan kondisi
        this.classList.toggle('fa-eye-slash');
    });
</script>

</html>

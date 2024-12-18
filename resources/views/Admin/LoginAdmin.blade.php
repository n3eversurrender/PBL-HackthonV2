<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Custom CSS for positioning icons inside inputs -->
    <style>
        .input-icon {
            position: absolute;
            left: 12px; /* Menempatkan ikon di kiri */
            top: 50%;
            transform: translateY(-50%); /* Mengatur posisi vertikal ikon ke tengah */
        }

        .input-container {
            position: relative;
        }

        .eye-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%); /* Menurunkan ikon mata sedikit */
        }
    </style>

    <!-- Script modal -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body >
    <div class="flex items-center justify-center h-screen bg-gray-100">
    <form class="max-w-sm w-full bg-white bg-opacity-80 p-6 rounded-lg shadow-md" action="{{ url('/LogindAdmin') }}" method="POST">
        @csrf
        <h2 class="text-2xl font-semibold text-center text-gray-900 mb-6">Masuk Admin</h2>

        <!-- Pesan Error -->
        @if ($errors->has('login_error'))
        <div class="bg-red-500 text-white p-2 rounded mb-4">
            {{ $errors->first('login_error') }}
        </div>
        @endif

        <!-- Username -->
        <div class=" input-container">
            <!-- <label for="website-admin" class="block text-sm font-medium text-gray-900">Username</label> -->
            <input type="text" id="website-admin" name="username" class="w-full pl-10 pr-4 py-2 text-sm rounded-md bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Nama Pengguna" value="{{ old('username') }}" />
           
            <span class="input-icon">
                <i class="fas fa-user text-gray-500"></i>
            </span>     
        </div>
         <!-- Pesan error untuk nama pengguna -->
        @error('username')
            <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror

        <!-- Password -->
        <div class=" mt-4 input-container">
            <!-- <label for="password" class="block text-sm font-medium text-gray-900">Kata Sandi</label> -->
            <input type="password" id="password" name="kata_sandi" class="w-full pl-10 pr-10 py-2 text-sm rounded-md bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan Kata Sandi" />
            <span class="input-icon">
                <i class="fas fa-lock text-gray-500"></i>
            </span>
            <!-- Eye Icon to toggle password visibility -->
            <button type="button" id="togglePassword" class="eye-icon text-sm text-gray-500">
                <i class="fas fa-eye"></i>
            </button>
        </div>
        <!-- Pesan error untuk kata sandi -->
        @error('kata_sandi')
            <div class="text-red-500 text-sm">{{ $message }}</div>
        @enderror

        <!-- Submit Button -->
        <div class="mt-8">
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Masuk</button>
        </div>
    </form>
    </div>

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            Swal.fire({
                position: "middle",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        });
    </script>
    @endif

    <script>
        // JavaScript for toggling password visibility
        const togglePassword = document.getElementById("togglePassword");
        const passwordField = document.getElementById("password");

        togglePassword.addEventListener("click", function() {
            // Toggle password field type between 'password' and 'text'
            const type = passwordField.type === "password" ? "text" : "password";
            passwordField.type = type;

            // Toggle the eye icon
            this.querySelector("i").classList.toggle("fa-eye");
            this.querySelector("i").classList.toggle("fa-eye-slash");
        });
    </script>

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.js"></script>
</body>

</html>

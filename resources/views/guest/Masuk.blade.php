<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="flex justify-between h-screen">
        <div class="bg-white px-24 p-4 w-full flex flex-col justify-center items-center">
            <h2 class="font-bold text-3xl text-center mb-10">Sign in to your account</h2>
            <form class="w-full max-w-md"> <!-- Add max-width to the form -->
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" required />
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Password</label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required />
                </div>
                <div class="mb-6">
                    <label for="role" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Role</label>
                    <select id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Pilih Role</option>
                        <option value="trainee">Peserta</option>
                        <option value="trainer">Pelatih</option>
                    </select>
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required />
                    </div>
                    <label for="terms" class="ms-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Saya setuju dengan <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">syarat dan ketentuan</a>.</label>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
            </form>
        </div>
        <img class="h-auto w-1/3 object-cover" src="{{ asset('image/12.webp') }}" alt="Background Main">
    </div>
</body>

</html>
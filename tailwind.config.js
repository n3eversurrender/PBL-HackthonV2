/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}", // File-file dari aplikasi kamu
    "./node_modules/flowbite/**/*.js", // Menambahkan path untuk Flowbite
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('daisyui'), // DaisyUI plugin
    require('flowbite/plugin'), // Flowbite plugin
  ],
}

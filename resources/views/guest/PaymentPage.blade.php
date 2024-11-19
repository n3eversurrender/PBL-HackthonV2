@extends('layouts.NavAndFoot')

@section('NavAndFoot')

<div class="container mx-auto sm:px-4 mt-16">
    <!-- layut grid -->
    <div>
        
        <!-- Checkout Container  -->
        <div class=" bg-white p-8 shadow-lg rounded-lg border-b">
            <h2 class="sm:text-2xl text-3xl font-bold mb-2">Buat Pesanan</h2>
            <h3 class="text-lg sm:text-xl font-semibold mb-1 sm:mb-4">Billing detail</h3>
            <p class="mb-4 text-sm sm:text-base">Ada 3 produk di keranjang Anda</p>
            <form action="#" method="POST" class="space-y-4">
                <div class="sm:grid sm:grid-cols-2 sm:gap-6 space-y-4 sm:space-y-0">
                    <input type="text" name="first_name" placeholder="Nama depan*" class="border border-gray-300 p-2 sm:p-3 rounded-lg w-full placeholder:text-sm sm:placeholder:text-base">
                    <input type="text" name="last_name" placeholder="Nama belakang*" class="border border-gray-300 p-2 sm:p-3 rounded-lg w-full placeholder:text-sm sm:placeholder:text-base">
                </div>
                <textarea name="address" type="text" id="" placeholder="Alamat*" class="border border-gray-300 p-2 sm:p-3 rounded-lg w-full placeholder:text-sm sm:placeholder:text-base overflow-y-auto"></textarea>
                <div class="sm:grid sm:grid-cols-2 sm:gap-6 space-y-4 sm:space-y-0">
                    <select name="country" class="border border-gray-300 p-3 rounded-lg w-full text-sm sm:text-base">
                        <option class="text-sm sm:text-base" value="" selected disabled>Negara*</option>
                        <option class="text-sm sm:text-base" value="USA">USA</option>
                        <!-- optional -->
                    </select>
                    <input type="text" name="city" placeholder="Kabupaten/Kota*" class="border border-gray-300 p-2 sm:p-3 rounded-lg w-full placeholder:text-sm sm:placeholder:text-base">
                </div>
                <div class="sm:grid sm:grid-cols-2 sm:gap-6 space-y-4 sm:space-y-0">
                    <input type="text" name="postcode" placeholder="Kode*" class="border border-gray-300 p-2 sm:p-3 rounded-lg w-full placeholder:text-sm sm:placeholder:text-base">
                    <input type="number" name="phone" placeholder="Telepon*" class="border border-gray-300 p-2 sm:p-3 rounded-lg w-full placeholder:text-sm sm:placeholder:text-base">
                </div>
                <textarea name="additional_info" placeholder="Informasi tambahan" class="border border-gray-300 p-2 sm:p-3 rounded-lg w-full placeholder:text-sm sm:placeholder:text-base overflow-y-auto"></textarea>

                <!-- detail pesanan -->
                <div class="bg-white p-2 sm:p-6 shadow-lg rounded-lg">
                    <h3 class="text-lg sm:text-2xl font-bold mb-2 sm:mb-4">Pesanan anda</h3>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center text-sm sm:text-base">
                            <div class="flex items-center">
                                <img src="{{ asset('image/12.webp') }}" alt="Welding Beginner" class="w-12 sm:w-20 h-12 sm:h-20 mr-4 object-cover rounded-md">
                                <span>Welding Beginner</span>
                            </div>
                            <span>$200</span>
                        </li>
                    </ul>
                    <hr class="my-4">
                    <div class="flex justify-between text-sm sm:text-base">
                        <span>Total Pembayaran</span>
                        <span>$200</span>
                    </div>

                    <!-- Separator  -->
                    <hr class="my-6 border-t-2">

                    <!-- Payment  -->
                    <div class="mt-6">
                        <h4 class="text-base sm:text-xl font-semibold mb-2">Metode Pembayaran</h4>
                        <div class=" space-y-4 text-sm sm:text-base">
                            <!-- Metode Pembayaran -->
                            <div>
                                <label class="my-2">
                                    <input type="radio" name="payment" value="bank_transfer" class="mr-2 payment-method">Transfer bank
                                    <!-- Pilihan Bank -->
                                    <div id="bank-options" class="ml-6 hidden">
                                        <label class="flex items-center">
                                            <input type="radio" name="bank" value="bca" class="mr-2"> BCA
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="bank" value="bni" class="mr-2"> BNI
                                        </label>
                                        <label class="flex items-center">
                                            <input type="radio" name="bank" value="mandiri" class="mr-2"> Mandiri
                                        </label>
                                    </div>
                                </label>
                                <label class="flex items-center my-2">
                                    <input type="radio" name="payment" value="cash_on_delivery" class="mr-2 payment-method"> Cash on Delivery
                                </label>
                                <label class="flex items-center my-2">
                                    <input type="radio" name="payment" value="online_gateway" class="mr-2 payment-method"> Online Gateway
                                </label>
                            </div>  
                        </div>
                            <!-- script pembayaran metode transfer bank -->
                            <script>
                                const paymentMethods = document.querySelectorAll('.payment-method');
                                const bankOptions = document.getElementById('bank-options');

                                paymentMethods.forEach(method => {
                                    method.addEventListener('change', () => {
                                        if (method.value === 'bank_transfer') {
                                            // Tampilkan pilihan bank
                                            bankOptions.classList.remove('hidden');
                                        } else {
                                            // Sembunyikan pilihan bank dan reset pilihan sebelumnya
                                            bankOptions.classList.add('hidden');
                                            const selectedBank = bankOptions.querySelector('input[name="bank"]:checked');
                                            if (selectedBank) {
                                                selectedBank.checked = false;
                                            }
                                        }
                                    });
                                });
                            </script>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button class="bg-blue-500 text-white px-8 py-3 rounded-lg  text-sm sm:text-base hover:bg-blue-800 duration-700">Dapatkan Sekarang</button>
                </div> 
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@1.4.1/dist/flowbite.min.js"></script>
@endsection

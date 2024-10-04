@extends ('layouts.NavAndfoot')

@section('main')
<div class="container mx-auto px-4 mt-10">
    <!-- layut grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Checkout Container  -->
        <div class="md:col-span-2 bg-white p-8 shadow-lg rounded-lg border-b">
            <h2 class="text-2xl font-bold mb-6">Checkout</h2>
            <h3 class="text-2xl font-semibold mb-4">Billing detail</h3>
            <p class="mb-4">There are 3 products in your cart</p>
            <form action="#" method="POST" class="space-y-6">
                <div class="grid grid-cols-2 gap-6">
                    <input type="text" name="first_name" placeholder="First name*" class="border border-gray-300 p-3 rounded-lg w-full">
                    <input type="text" name="last_name" placeholder="Last name*" class="border border-gray-300 p-3 rounded-lg w-full">
                </div>
                <input type="text" name="address" placeholder="Address*" class="border border-gray-300 p-3 rounded-lg w-full">
                <input type="text" name="address2" placeholder="Address line 2" class="border border-gray-300 p-3 rounded-lg w-full">
                <div class="grid grid-cols-2 gap-6">
                    <select name="country" class="border border-gray-300 p-3 rounded-lg w-full">
                        <option value="">Country*</option>
                        <option value="USA">USA</option>
                        <!-- optional -->
                    </select>
                    <input type="text" name="city" placeholder="City/Town*" class="border border-gray-300 p-3 rounded-lg w-full">
                </div>
                <div class="grid grid-cols-2 gap-6">
                    <input type="text" name="postcode" placeholder="Postcode / ZIP*" class="border border-gray-300 p-3 rounded-lg w-full">
                    <input type="text" name="phone" placeholder="Phone*" class="border border-gray-300 p-3 rounded-lg w-full">
                </div>
                <textarea name="additional_info" placeholder="Additional information" class="border border-gray-300 p-3 rounded-lg w-full"></textarea>
                <button class="bg-blue-500 text-white px-6 py-3 rounded-lg w-full">Get it Now</button>
            </form>
        </div>

        <!-- Order Summary -->
        <div class="bg-white p-8 shadow-lg rounded-lg">
            <h3 class="text-lg font-bold mb-4">Your Order</h3>
            <ul class="space-y-4">
                <li class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('image/12.webp') }}" alt="Welding Beginner" class="w-12 h-12 mr-4">
                        <span>Welding Beginner</span>
                    </div>
                    <span>$200</span>
                </li>
                <li class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('image/12.webp') }}" alt="Engginering" class="w-12 h-12 mr-4">
                        <span>Engineering</span>
                    </div>
                    <span>$400</span>
                </li>
                <li class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('image/12.webp') }}" alt="Lorem" class="w-12 h-12 mr-4">
                        <span>Lorem</span>
                    </div>
                    <span>$0</span>
                </li>
            </ul>
            <hr class="my-4">
            <div class="flex justify-between mb-2">
                <span>Subtotal</span>
                <span>$600</span>
            </div>
            <div class="flex justify-between">
                <span>Total Payable</span>
                <span>$600</span>
            </div>

            <!-- Separator  -->
            <hr class="my-6 border-t-2">

            <!-- Payment  -->
            <div class="mt-6">
                <h4 class="text-md font-semibold mb-2">Payment</h4>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input type="radio" name="payment" value="bank_transfer" class="mr-2"> Direct Bank Transfer
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="payment" value="cash_on_delivery" class="mr-2"> Cash on delivery
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="payment" value="online_gateway" class="mr-2"> Online Gateway
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@1.4.1/dist/flowbite.min.js"></script>
@endsection

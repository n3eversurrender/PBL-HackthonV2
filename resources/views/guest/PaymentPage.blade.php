@extends('layouts.NavAndFoot')

@section('NavAndFoot')

<div class="container mx-auto sm:px-4 mt-20">
    <form action="{{ route('processPayment') }}" method="POST" class="space-y-4">
        @csrf
        <input type="hidden" name="pendaftaran_id" value="{{ $pendaftaran->pendaftaran_id }}">
        
        <div class="bg-white p-2 sm:p-6 shadow-lg rounded-lg">
            <h3 class="text-lg sm:text-2xl font-bold mb-2 sm:mb-4">Pesanan anda</h3>
            <ul class="space-y-4">
                <li class="flex justify-between items-center text-sm sm:text-base">
                    <div class="flex items-center">
                        <img src="{{ asset('image/12.webp') }}" alt="Welding Beginner" class="w-12 sm:w-20 h-12 sm:h-20 mr-4 object-cover rounded-md">
                        <span>{{ $kursus->judul }}</span>
                    </div>
                    <span>{{ number_format($kursus->harga, 0, ',', '.') }}</span>
                </li>
            </ul>
            <hr class="my-4">
            <div class="flex justify-between text-sm sm:text-base">
                <span>Total Pembayaran</span>
                <span>Rp. {{ number_format($kursus->harga, 0, ',', '.') }}</span>
            </div>

            <!-- Separator -->
            <hr class="my-6 border-t-2">
        </div>

        <div class="flex justify-center">
            <button
                id="pay-button"
                class="bg-blue-500 text-white px-8 py-3 rounded-lg text-sm sm:text-base hover:bg-blue-800 duration-700">
                Dapatkan Sekarang
            </button>
        </div>
    </form>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script>
        document.getElementById('pay-button').addEventListener('click', function(event) {
            event.preventDefault();
            fetch('{{ route("processPayment") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    pendaftaran_id: '{{ $pendaftaran->pendaftaran_id }}',
                    harga: {{ $kursus->harga }}
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.snapToken) {
                    snap.pay(data.snapToken, {
                        onSuccess: function(result) {
                            console.log(result);
                            alert('Pembayaran berhasil!');
                        },
                        onPending: function(result) {
                            console.log(result);
                            alert('Menunggu pembayaran!');
                        },
                        onError: function(result) {
                            console.error(result);
                            alert('Pembayaran gagal!');
                        }
                    });
                } else {
                    alert(data.error || 'Terjadi kesalahan.');
                }
            })
            .catch(error => console.error(error));
        });
    </script>
</div>

@endsection

@if(session('success'))
<div class="bg-green-500 my-3 text-white p-4 rounded">
    {{ session('success') }}
</div>
@endif
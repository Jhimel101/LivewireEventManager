<div>
    <h2 class="text-xl font-bold mb-4">Event Payment</h2>

    <p>Event: <strong>{{ $event['title'] }}</strong></p>
    <p>Price: <strong>{{ $event['price'] ? '$'.$event['price'] : 'Free' }}</strong></p>

    <button wire:click="payNow" class="bg-blue-500 text-white px-4 py-2 mt-4 rounded">
        Pay with bKash
    </button>

    @if(session()->has('success'))
    <p class="text-green-500">{{ session('success') }}</p>
    @endif
</div>
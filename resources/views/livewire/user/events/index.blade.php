<div>
    <h2 class="text-xl font-bold mb-4">Available Events</h2>

    @if($events->isEmpty())
    <p>No events available.</p>
    @else
    <ul class="space-y-4">
        @foreach($events as $event)
        <li class="border p-4 rounded-lg shadow">
            <h3 class="text-lg font-semibold">{{ $event->title }}</h3>
            <p>{{ $event->description }}</p>
            <p>Date: {{ $event->date }} at {{ $event->time }}</p>
            <p>Venue: {{ $event->venue ?? 'Not specified' }}</p>
            <p>Price: {{ $event->price ? '$'.$event->price : 'Free' }}</p>

            <!-- Register Button -->
            <button wire:click="registerForEvent({{ $event->id }})"
                class="bg-blue-500 text-white px-4 py-2 mt-4 rounded">
                Register & Pay
            </button>
        </li>
        @endforeach
    </ul>
    @endif
</div>
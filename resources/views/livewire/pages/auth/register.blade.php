<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg border border-gray-100 mt-8"> <!-- Standard padding from top (mt-8) -->
    <!-- Event Title -->
    <h2 class="text-3xl font-bold text-gray-800 mb-8">Register for Event</h2>

    <!-- Event Details -->
    <div class="space-y-6">
        <!-- Event Title -->
        <h3 class="text-2xl font-semibold text-gray-900">{{ $event->title }}</h3>

        <!-- Event Description -->
        <p class="text-gray-600 text-lg leading-relaxed">{{ $event->description }}</p>

        <!-- Event Metadata -->
        <div class="space-y-4">
            <!-- Date -->
            <div class="flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                <p class="text-lg text-gray-700"><span class="font-semibold">Date:</span> {{ $event->date }} at {{ $event->time }}</p>
            </div>

            <!-- Venue -->
            <div class="flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
                <p class="text-lg text-gray-700"><span class="font-semibold">Venue:</span> {{ $event->venue ?? 'Not Specified' }}</p>
            </div>

            <!-- Price -->
            <div class="flex items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                </svg>
                <p class="text-lg text-gray-700"><span class="font-semibold">Price:</span> {{ $event->price ? '$'.$event->price : 'Free' }}</p>
            </div>
        </div>
    </div>

    <!-- Payment Section -->
    <div class="mt-8">
        <!-- bKash Logo -->
        <div class="flex items-center justify-center space-x-3 mb-6">
            <img src="{{ asset('images/bkash-logo.png') }}" alt="bKash Logo" class="h-12 w-auto"> <!-- Adjusted size to h-12 -->
            <span class="text-gray-700 font-semibold text-lg">Pay securely with bKash</span>
        </div>

        <!-- Pay Now Button -->
        <button wire:click="payNow" class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-bold px-8 py-3 rounded-lg shadow-md hover:from-purple-700 hover:to-indigo-700 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
            Pay Now
        </button>
    </div>
</div>
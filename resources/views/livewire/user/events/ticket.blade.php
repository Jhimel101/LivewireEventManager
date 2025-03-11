<div class="p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-xl font-bold mb-4">Your Event Ticket</h2>

    <p><strong>Event:</strong> {{ $registration->event->title }}</p>
    <p><strong>User:</strong> {{ $registration->user->name }}</p>
    <p><strong>Transaction ID:</strong> {{ $registration->transaction_id }}</p>
    <p><strong>Payment Status:</strong> <span class="text-green-500">Paid</span></p>

    <button onclick="window.print()" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
        Print Ticket
    </button>
</div>
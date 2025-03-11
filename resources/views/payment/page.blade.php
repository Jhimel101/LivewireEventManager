<!-- resources/views/payment/page.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment Page') }}
        </h2>
    </x-slot>

    <div class="container">
        <h3 class="text-2xl font-bold">Pay for Event: {{ $event['title'] }}</h3>

        <form action="{{ route('payment.process') }}" method="POST">
            @csrf
            <!-- Form fields for payment go here -->
            <button type="submit" class="btn btn-primary">Pay Now</button>
        </form>
    </div>
</x-app-layout>
<!-- resources/views/payment/success.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-2xl font-semibold mb-4">Payment Successful!</h2>
    <p>Your payment has been processed successfully. Thank you for registering for the event.</p>
    <a href="{{ route('dashboard') }}" class="text-blue-500">Go back to Dashboard</a>
</div>
@endsection
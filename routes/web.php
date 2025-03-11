<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Events\Index as EventIndex;
use App\Livewire\Admin\Events\Create as EventCreate;
use App\Livewire\Admin\Events\Edit as EventEdit;
use App\Http\Middleware\EnsureUserIsAdmin;
use App\Livewire\AdminDashboard;
use App\Livewire\User\Events\Register;
use App\Livewire\User\Events\Ticket;
use App\Http\Controllers\PaymentController;
use App\Livewire\PaymentPage;


// Public Route
Route::view('/', 'welcome');

// Authenticated User Route (Same Dashboard for All Users)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile', 'profile')->name('profile');

    Route::get('/payment', PaymentPage::class)->name('payment');

    Route::get('/payment', [PaymentController::class, 'showPaymentPage'])->name('payment');

    Route::post('/payment/process', [PaymentController::class, 'processPayment'])->name('payment.process');

    Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');

    //Bkash payment Routes
    Route::get('/bkash/payment', [App\Http\Controllers\BkashTokenizePaymentController::class, 'index']);
    Route::get('/bkash/create-payment', [App\Http\Controllers\BkashTokenizePaymentController::class, 'createPayment'])->name('bkash-create-payment');
    Route::get('/bkash/callback', [App\Http\Controllers\BkashTokenizePaymentController::class, 'callBack'])->name('bkash-callBack');
});

// Event Registration Route
Route::middleware(['auth'])->get('/event/register/{eventId}', Register::class)->name('event.register');

// Ticket Page
Route::middleware(['auth'])->get('/event/ticket/{transactionId}', Ticket::class)->name('event.ticket');


Route::get('/payment', [PaymentController::class, 'show'])->name('payment.page');


// Admin Routes (Only Accessible by Admins)
Route::middleware(['auth', EnsureUserIsAdmin::class])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');

    // Event Management
    Route::prefix('admin/events')->name('admin.events.')->group(function () {
        Route::get('/', EventIndex::class)->name('index'); // List Events
        Route::get('/create', EventCreate::class)->name('create'); // Create Event
        Route::get('/edit/{id}', EventEdit::class)->name('edit'); // Edit Event

        // Bkash Route
        Route::get('/bkash/search/{trxID}', [App\Http\Controllers\BkashTokenizePaymentController::class, 'searchTnx'])->name('bkash-serach');

        //refund payment routes
        Route::get('/bkash/refund', [App\Http\Controllers\BkashTokenizePaymentController::class, 'refund'])->name('bkash-refund');
        Route::get('/bkash/refund/status', [App\Http\Controllers\BkashTokenizePaymentController::class, 'refundStatus'])->name('bkash-refund-status');
    });
});

// Auth Routes (Login, Register, etc.)
require __DIR__ . '/auth.php';

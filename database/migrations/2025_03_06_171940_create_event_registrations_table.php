<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('event_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Registered user
            $table->foreignId('event_id')->constrained()->onDelete('cascade'); // Event ID
            $table->enum('payment_status', ['pending', 'paid'])->default('pending'); // Payment status
            $table->string('transaction_id')->nullable(); // bKash transaction ID
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_registrations');
    }
};

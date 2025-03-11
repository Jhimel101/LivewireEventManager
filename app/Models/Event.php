<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Mass assignment protection
    protected $fillable = [
        'title',
        'description',
        'date',
        'time',
        'venue',
        'price',
        'status',
    ];

    // Optionally, cast attributes to the correct data types
    protected $casts = [
        'date' => 'datetime', // Cast 'date' field to a Carbon instance (for better handling of date values)
        'time' => 'datetime', // Cast 'time' field to a Carbon instance if needed
        'price' => 'decimal:2', // Ensure price is stored as a decimal with two decimal places
    ];

    // If your event belongs to a user (optional)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

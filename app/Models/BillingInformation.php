<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BillingInformation extends Model
{
    use HasFactory;
    
    public $fillable = [
        'first_name',
        'last_name',
        'phone',
        'business_name',
        'address_line_1',
        'address_line_2',
        'city',
        'postcode',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

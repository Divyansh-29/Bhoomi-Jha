<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    // MUST match database column names AND keys used in EnquiryController::store()
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];

    // Optional: Define date mutators if needed (default is fine for timestamps)
    // protected $dates = ['created_at', 'updated_at'];
}
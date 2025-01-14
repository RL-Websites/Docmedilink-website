<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinic_name',
        'contact_name',
        'contact_email',
        'contact_phone',
        'specialization',
        'practice_size',
        'telehealth',
        'preferred_demo_time',
        'about_us'
    ];
}

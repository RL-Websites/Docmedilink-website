<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'services',
        'about',
        'details',
        'is_read',
    ];
}

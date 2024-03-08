<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone_number',
        'email_address',
        'identification',
        'date_of_birth',
        'company_position',
        'witnesses',
        'effective_date',
        'payment_information',
        'jurisdiction',
        'signature_party1',
        'notary_public',
        'terms_conditions',
        'file_type',
    ];
}

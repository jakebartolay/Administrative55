<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contract_table'; // Assuming your table name is 'contract_table'
    
    public $timestamps = false; // Disable timestamps
    
    protected $fillable = [
        'contract_name',
        // Add other fields here as needed
    ];

    // Additional model logic or properties here
}

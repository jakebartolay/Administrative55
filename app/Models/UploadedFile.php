<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadedFile extends Model
{
    protected $table = 'uploaded_files';

    // In your UploadedFile model
    protected $fillable = ['user_id', 'name', 'extension', 'size', 'last_open'];

}

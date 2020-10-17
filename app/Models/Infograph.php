<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infograph extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'user_id',
    ];
}

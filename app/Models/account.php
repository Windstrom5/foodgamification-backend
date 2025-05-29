<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';

    protected $fillable = [
        'email', 'password', 'name', 'gender', 'exp',
        'berat', 'tinggi', 'inventory', 'setting',
        'is_verify'
    ];
    
    protected $casts = [
        'is_verify' => 'boolean',
    ];    
}

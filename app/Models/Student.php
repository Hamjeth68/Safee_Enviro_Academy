<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;
    protected $guard = 'students';
    protected $fillable = [
        'name',
        'p_id',
        'email',
        'phone',
        'password',
        'address',
        'profession_occupation',
        'date',
        'state',
    ];

    // public function products()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}

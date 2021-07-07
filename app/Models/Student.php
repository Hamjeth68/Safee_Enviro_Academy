<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $filable = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'profession_occupation',
        'date',
        'state',
    ];
}
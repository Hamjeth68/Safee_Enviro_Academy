<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'p_title',
        'p_name',
        'p_description',
        'p_ammount',
    ];
}

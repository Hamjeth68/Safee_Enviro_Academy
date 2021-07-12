<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsOrder extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'order_number', 'student_id', 'status', 'grand_total', 'item_count', 'payment_status', 'payment_method',
        'first_name', 'last_name', 'address', 'city', 'country', 'post_code', 'phone_number', 'notes'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}

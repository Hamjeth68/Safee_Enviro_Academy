<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
    protected $fillable = [
        'std_id', 'p_title', 'p_name', 'slug', 'p_description', 'p_quantity',
        'p_ammount',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'quantity'  =>  'integer',
        'std_id'  =>  'integer',
    ];

    /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['p_name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }


    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function course()
    // {
    //     return $this->belongsTo(Student::class);
    // }

    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function images()
    // {
    //     return $this->hasMany(ProductImage::class);
    // }

    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function attributes()
    // {
    //     return $this->hasMany(ProductAttribute::class);
    // }
}

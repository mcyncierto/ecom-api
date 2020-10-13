<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'customer_name', 'star', 'review',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}

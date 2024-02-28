<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['fname', 'lname', 'phone', 'daily_use', 'days', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

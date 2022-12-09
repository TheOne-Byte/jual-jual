<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = 'id';
    protected $fillable = [
        'user_id',
        'product_id',
        'payment_method_id'
    ];
    public function payment_method()
    {
        return $this->hasOne(PaymentMethod::class);
    }
}

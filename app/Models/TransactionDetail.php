<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transactions_id',
        'code',
        'products_id',
        'price',
        'resi',
        'shipping_status',
    ];

    protected $hidden = [];
}

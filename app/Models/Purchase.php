<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

     protected $fillable = [
        'supplier_id',
        'product_id',
        'quentity',
        'price',
        'date',
        'free_quentity',
        'total',
    ];

    public function supplier()
    {
        return $this->belongsTo('App\Models\Suppliers');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}

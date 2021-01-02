<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'company',
        'supplier_type_id',
        'contact',
        'file',
        'gender',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function suppliers_type()
    {
        return $this->belongsTo('App\Models\Suppliers_type');
    }
}

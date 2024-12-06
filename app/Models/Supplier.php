<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'supplier_name',
        'contact_number',
        'email',
        'phone',
        'purchase_id',
        


    ];

    public function Employee()
    {
        return $this->hasMany(Product::class);
    }

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}

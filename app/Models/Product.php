<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'details'
        
        
    ];

    public function Employee(){
        return $this-> hasMany(Product::class);
    }
}

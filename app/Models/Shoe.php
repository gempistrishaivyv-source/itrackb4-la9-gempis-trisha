<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
     protected $fillable = ['name', 'brand', 'category', 'price']; 
  
    protected function casts(): array 
    { 
        return [ 
            'integer' => 'price',     // your boolean column 
            'string' => 'category',     // your integer column 
        ]; 
    } 
}

<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

  

class Product extends Model

{

    use HasFactory;

  

    protected $fillable = [

        'productid','name', 'detail','price','stock', 'image'

    ];

}


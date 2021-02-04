<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection='mysql';
}

/*foreach (Product::all() as $product) {
    echo $product->name;
}*/

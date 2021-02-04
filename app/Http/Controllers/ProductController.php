<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
    public function showDetail($id)
    {
        $product = DB::select('select id, name, price, description from products where id=:id', ['id' => $id]);
        return view('product-detail', ['products' => $product]);
    }


    public function showList()
    {
        $productlist = DB::select('select name, price from products');
        return view('product-list', ['productlist' => $productlist]);
    }
}




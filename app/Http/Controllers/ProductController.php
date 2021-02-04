<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function showDetail($id)
    {
        //$product = DB::selectOne('select id, name, price, description from products where id=:id', ['id' => $id]);
        $product=Product::all('id',$id);
        //return view('product-detail', ['product' => $product]);
    }

    public function showList()
    {
        /*  triés par nom
        $products=Product::all()
        ->sortBy ('name');
        return view('product-list',['productlist' => $products]);
        */

        /*  triés par prix crossant*/
        $products=Product::all()
        ->sortBy ('price');
        return view('product-list',['productlist' => $products]);



    }
}




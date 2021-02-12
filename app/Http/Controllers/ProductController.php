<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showDetail($id)
    {
        $product = Product::find($id);
        if($product===null)
        {
            abort(404);
        }else{
            return view('product-detail', ['product' => $product,'id'=>$id]);
        }
    }

    public function showList(Request $request)
    {
        if ($request->has('sortby')) {
            if ($request->sortby == 'name') {
                $products = Product::all()
                    ->sortBy('name');
                return view('product-list', ['productlist' => $products]);
            } elseif ($request->sortby == 'price') {
                $products = Product::all()
                    ->sortByDesc('price');
                return view('product-list', ['productlist' => $products]);
            }
        }else{
            $products = Product::with('category')->get();
            return view('product-list', ['productlist' => $products]);

        }
    }
    public function order(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->has('order'))
        {

            $validated = $request->validate([
                'quantity'=>'integer|min:1|max:'.$product->quantity,
            ]);
            return view('product-detail', ['product' => $product, 'id' => $id]);
        }

    }

    /*public function sort(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $products=Product::all()->when($name, function ($query,$name){

            return view('product-list',['productlist' => $products]);
        });
        /*  triés par nom
        $products=Product::all()
        ->sortBy ('name');
        return view('product-list',['productlist' => $products]);
        */

        /*triés par prix crossant
      $products=Product::all()
      ->sortByDesc('price');
      return view('product-list',['productlist' => $products]);

        $products=Product::orderBy('price','desc')->get();
        return view('product-list',['productlist' => $products]);
    }*/
}




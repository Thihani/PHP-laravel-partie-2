<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    /* Va retourner ce qui doit être affiché dans la home page*/

    public function index()
    {
        $products = Product::all();
        return view('backoffice', ['productlist' => $products]);
    }

    public function add(Request $request)
    {
        if ($request->has('add')) {
            $newproduct = new Product;
            $newproduct->id = $request->id;
            $newproduct->name = $request->name;
            $newproduct->price = $request->price;
            $newproduct->description = $request->description;
            $newproduct->category_id = $request->category;
            $newproduct->save();
        }
        return view('backoffice');
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->has('update')) {

            $product->name = $request->name;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->category_id = $request->category;
            $product->save();
        }
        return view('backoffice-update', ['product' => $product, 'id' => $id]);
    }

    public function delete(Request $request, $id)
    {
        $product = Product::find($id);
        $data = [
            'id' => $id,
            'product' => $product
        ];
        if ($request->has('delete')) {
            $product = Product::find($id)->delete();
        }
        return view('backoffice-delete', $data);
    }

}

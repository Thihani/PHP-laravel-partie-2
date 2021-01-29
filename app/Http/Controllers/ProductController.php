<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function showDetail($id)
    {
        return view('product-detail', ['id' => $id]);
    }

    public function showList()
    {
        return view('product-list');
    }
}

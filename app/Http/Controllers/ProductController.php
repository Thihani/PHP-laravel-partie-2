<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($id = null)
    {
        if (!$id == null) {
            echo 'Fiche du produit ' . $id;
            return view('product-detail', ['id' => $id]);
        } else {
            echo 'Liste des produits';
            return view('product-list');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($id = null)
    {
        if (!$id == null) {
            return 'Fiche du produit ' . $id;
        } else {
            return 'Liste des produits';
        }
    }
}

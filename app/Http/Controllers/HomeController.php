<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /* Va retourner ce qui doit être affiché dans la home page*/

    public function show()
    {
        echo 'Home page';
        return view('homepage');
    }
}

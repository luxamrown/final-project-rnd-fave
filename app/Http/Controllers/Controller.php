<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product;

class Controller extends BaseController
{
    function readProduct(){
        $home = Product::all();
        return view('home', compact('home'));
    }

    use AuthorizesRequests, ValidatesRequests;
}

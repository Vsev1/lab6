<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class pagination extends Controller
{
    public function products(){
        $products = Product::Simplepaginate(6);
        return view('catalogue', compact('products'));
    }
}

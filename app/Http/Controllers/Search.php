<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function search(Request $request){
        $text = $request->searchText;
        $products = Product::query()->where('name', 'LIKE', "%{$text}%")->orderBy('id')->Simplepaginate(6);
        return view('catalogue', compact('products'));
    }
}

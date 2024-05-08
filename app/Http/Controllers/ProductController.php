<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product(){
        $products="Products list form in ProductController";
          return view('product', compact('products'));
        }
}

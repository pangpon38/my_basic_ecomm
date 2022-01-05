<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        $data_products = Products::all();
        return view('products',compact('data_products'));
    }
}

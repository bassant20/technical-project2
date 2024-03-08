<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getProduct(){
        // $products = Product::all();
        // $variants = Variant::all();

        // // Assuming you want to retrieve products and their variants
        // $productsData = Product::join('variants', 'variants.product_id', '=', 'products.id')
        //     ->selectall()
        //     ->get();

        // return view('products', compact('products', 'variants', 'productsData'));
        $products = Product::with('variant')->get();

        return response()->json($products);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = config('data.products');
        return view('home', compact('products'));
    }

    public function show($id)
    {
        $products = collect(config('data.products'));
        $product = $products->firstWhere('id', $id);

        if (!$product) {
            abort(404);
        }

        return view('product-detail', compact('product'));
    }
}

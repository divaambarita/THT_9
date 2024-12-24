<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $products = config('data.products');
        return view('blog', compact('products'));
    }
}

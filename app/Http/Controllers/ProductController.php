<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return inertia('Products/Index', compact('posts'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public $productObject;

    public function __construct()
    {
        $this->productObject = new Product();
    }

    public function product($id)
    {
        $product = $this->productObject->find($id);

        return view('product', compact('product'));
    }
}

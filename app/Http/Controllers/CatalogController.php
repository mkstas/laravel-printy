<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public $productObject;
    public $categoryObject;

    public function __construct()
    {
        $this->productObject = new Product();
        $this->categoryObject = new Category();
    }

    public function catalog()
    {
        $products = $this->productObject->orderBy('price', 'asc')->get();
        $categories = $this->categoryObject->all();

        return view('catalog', compact('products', 'categories'));
    }

    public function filter(Request $req)
    {
        // $input = $req->all();
        // $categories = $this->categoryObject->all();

        // $price = $req->input('price');
        // $type = [];
        // foreach ($categories as $category) {
        //     foreach ($input as $item) {
        //         if ($category['id'] == $item) {
        //             $type[] = $item;
        //         }
        //     }
        // }

        // $products = [];
        // foreach ($type as $item) {
        //     $products[] = $this->productObject->where('category_id', $item)->get();
        //     dd($products);
        // }
        // $products = $this->productObject->where('category_id', 1)->where('category_id', 2)->get();


        $category = $req->input('category');
        $price = $req->input('price');

        if ($category != 'all') {
            $products = $this->productObject->where('category_id', $category)->orderBy('price', $price)->get();
        } else {
            $products = $this->productObject->orderBy('price', $price)->get();
        }
        $categories = $this->categoryObject->all();

        return view('catalog', compact('products', 'categories'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\CategoryProduct;

class CategoryController extends Controller
{
    public function show(Request $req) {
        $products = Product::leftjoin('category_products', 'products.id', '=', 'category_products.product_id')->whereIn('category_products.category_id', [$req->cID])->get();
        $categories = Category::all();

        if($req->has('min') && $req->has('max')) {
            $products = Product::leftjoin('category_products', 'products.id', '=', 'category_products.product_id')->whereIn('category_products.category_id', [$req->cID])->whereBetween('price', [$req->min, $req->max])->get();
        } 

        return view('products.index', compact('products', 'categories'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.products.index')->with(compact('products'));
    }
    public function create(){
        return view('admin.products.create');
    }
    public function store(){

    }

    /*public function show($id)
    {
    	$product = Product::find($id);
    	$images = $product->images;

    	$imagesLeft = collect();
    	$imagesRight = collect();
    	foreach ($images as $key => $image) {
    		if ($key%2==0)
    			$imagesLeft->push($image);
    		else
    			$imagesRight->push($image);
    	}

    	return view('products.show')->with(compact('product', 'imagesLeft', 'imagesRight'));
    }*/
}

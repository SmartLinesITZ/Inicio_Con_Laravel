<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\Auth;
class ProductsController extends Controller
{
    
    public function index()
    {
    	$products = Product::all();
        return view("products.index",["products" => $products]); 
    }

    public function create()
    {   $product = new Product;
    	return view("products.create",["product" => $product]);
    }

    public function store(Request $request)
    {
    	$product = new Product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->pricing=$request->pricing;
        $product->user_id=Auth::id()
        ;
        if($product->save()){
            return redirect("/products");

        }else{
            return view("products.create");
        }

    }

    public function show($id)
    {
    	# code...
    }

    public function edit($id)
    {
    	$product = Product::find($id);
        return view("products.edit",["product" => $product]);
    }
    public function update(Request $request, $id)
    {
    	# code...
    }
    public function destroy($id)
    {
    	# code...
    }

}

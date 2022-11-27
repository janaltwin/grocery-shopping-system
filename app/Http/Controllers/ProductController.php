<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest as ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function index(){
        return view('products.index');
    }

    public function store(ProductRequest $request){
        
        Product::create($request->all());
        return response([
            'message'=>'Product added successfully'
        ], 200);
        return view('addproduct');
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        if($product){  
             
            $product -> update($request->all()); 
            
            return $product; 
            return response([
                'message'=>'Product updated successfully'
            ], 200);
        }
        return response([
            'message'=>'Product does not exist!'
        ], 404);


    }

    public function destroy($id){
        $product = Product::find($id);
       
        if($product){
            $product->destroy($id);
            return response([
                'message'=>'Product deleted successfully'
            ], 200);
        }
        return response([
            'message'=>'Product does not exist!'
        ], 404);
    }
}

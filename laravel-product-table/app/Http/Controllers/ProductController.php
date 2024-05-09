<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //Create New Product
    public function createProduct (Request $request) {
        $product = new Product();
        $product->productName = $request->productName;
        $product->productPrice = $request->productPrice;
        $product->productDetails = $request->productDetails;
        $product->productPublish = $request->productPublish;
        $created = $product->save();
        if($created){
            // return redirect('/')->with('success', 'You have successfully registered. You can now sign in.');
            $product = array();
            $product = DB::table('products')->get();
            return view('index', compact('product'));
            // return redirect('/');
        }
        else{
            return back()->with('fail', 'Something went wrong. Try again.');
        }
    }

    public function showProduct ($productID) {
        $product = DB::table('products')->where('productID', '=', $productID)->get();
        return view('show-product', compact('product'));
    }
}

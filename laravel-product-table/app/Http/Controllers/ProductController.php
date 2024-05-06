<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //Create New Product
    public function productCreate (Request $request) {
        $product = new Product();
        $product->productName = request('productName');
        $product->productPrice = request('productPrice');
        $product->productDetails = request('productDetails');
        $product->productPublish = request('productPublish');
        // $created = $product->save();
        // if($created){
        //     return redirect('member_SignIn')->with('success', 'You have successfully registered. You can now sign in.');
        // }
        // else{
        //     return back()->with('fail', 'Something went wrong. Try again.');
        // }
    }
}

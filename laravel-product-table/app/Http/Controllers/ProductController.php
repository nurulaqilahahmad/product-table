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
        }
        else{
            return back()->with('fail', 'Something went wrong. Try again.');
        }
    }

    public function showProduct ($productID) {
        $product = DB::table('products')->where('productID', '=', $productID)->get();
        return view('show-product', compact('product'));
    }

    public function deleteProduct ($productID) {
        DB::table('products')->where('productID', '=', $productID)->delete();
        // $product = DB::table('products')->get();
        return redirect('/');
        // return view('index', compact('product'));
    }

    public function showEditProduct ($productID) {
        $product = DB::table('products')->where('productID', '=', $productID)->get();
        return view('edit-product', compact('product'));
    }

    public function editProduct (Request $request) {
        DB::table('products')->where('productID', '=', $request->productID)->update([
            'productName' => $request->productName,
            'productPrice' => $request->productPrice,
            'productDetails' => $request->productDetails,
            'productPublish' => $request->productPublish,
        ]);
        return redirect('/');
    }

    public function search (Request $request) {
        $search = $request->search;

        $product = Product::where('productName', 'Like', '%'.$search.'%')->get();
        return view('index', compact('product'));
    }
}

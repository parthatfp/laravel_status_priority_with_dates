<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function index(){
        $product = Product::orderBy('status', 'DESC')->latest()->get();
        $productOrderByDate = $product->groupBy(function ($val) {
            // return Carbon::createFromFormat('Y-m-d H:i:s', $val->created_at)->format('d-m-Y');
            return Carbon::parse($val->created_at)->format('d/m/Y');
        });
        // Y/m/d H:i:s
        return view('welcome', compact('productOrderByDate'));
    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->size = $request->size;
        $product->qty = $request->qty;
        $product->status = $request->status;
        $product->created_at = Carbon::now();
        $product->save();
        return back();
    }

}

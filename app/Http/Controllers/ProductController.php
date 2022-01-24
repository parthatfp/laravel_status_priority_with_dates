<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function index(){
        $product = Product::orderBy('status', 'DESC')->get();
        $productOrderByDate = $product->groupBy(function ($val) {
            return Carbon::parse($val->created_at)->format('d/m/Y');
        });
        return view('welcome', compact('productOrderByDate'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product.product');
    }
    public function foodBeverage() {
        return view('product.category')->with('category', 'Food & Beverage');
    }

    public function beautyHealth() {
        return view('product.category')->with('category', 'Beauty & Health');
    }

    public function homeCare() {
        return view('product.category')->with('category', 'Home Care');
    }

    public function babyKid() {
        return view('product.category')->with('category', 'Baby & Kid');
    }
}

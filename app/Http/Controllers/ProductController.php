<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }

    public function detail(){
        return view('product-detail', [
            'title' => 'Product Detail'
        ]);
    }

    public function detail2(){
        return view('product-detail2', [
            'title' => 'Product Detail'
        ]);
    }

    public function detail3(){
        return view('product-detail3', [
            'title' => 'Product Detail'
        ]);
    }
}
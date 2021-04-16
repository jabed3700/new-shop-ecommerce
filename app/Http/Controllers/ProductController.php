<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function index(){
        // $products = new Product();
        return view('admin.product.index',);
    }

    function create(){
        return view('admin.product.create');
    }

    function edit(){
        return view('admin.product.edit');
    }
}

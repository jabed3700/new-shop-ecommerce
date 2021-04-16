<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function index(){
        // $products = new Product();
        return view('admin.product.index',);
    }

    function create(){
        $categories = Category::where('publication_status',1)
                            // ->where('asd','asdf')
                            // ->where('asd','asdf')
                            ->get();
                        
        $brands = Brand::where('publication_status',1)->get();
        return view('admin.product.create',[
            'categories'  => $categories,
            'brands'      => $brands,
        ]);
    }

    function edit(){
        return view('admin.product.edit');
    }

    function store(Request $request){
        return $request->all();
    }
}

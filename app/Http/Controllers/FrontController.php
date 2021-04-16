<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class FrontController extends Controller
{
    function index(){
        // $categories = Category::where('publication_status',1)->get();
        $newProducts = Product::where('publication_status',1)
                            ->orderBy('id','DESC')
                            // ->skip(2)
                            ->take(8)
                            ->get();
        // return $categories;
        return view('front.index',['newProducts' => $newProducts]);
    }


    function category_product($id){

        $categoryProducts = Product::where('category_id',$id)
                            ->where('publication_status',1)
                            ->get();

        return view('front.category',['categoryProducts' => $categoryProducts]);
    }
}

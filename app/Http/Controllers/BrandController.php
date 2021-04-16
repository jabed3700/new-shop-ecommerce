<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

class BrandController extends Controller
{
    function index(){
        $brands = Brand::all();

        // return($brands);

        return view('admin.brand.index',[
            'brands' => $brands,
        ]);
    }

    function create(){
        return view('admin.brand.create');
    }

    function store(Request $request){

        // dd($request->all());

        $brand = new Brand();

        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand -> publication_status  = $request->publication_status;
        $brand->save();

        return redirect('/brand/create')->with('message','Brand created successfully');

    }


    function unpublished($id){
        return $id;
    }

    function published(){
        
    }
}

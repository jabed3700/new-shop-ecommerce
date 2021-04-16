<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

class BrandController extends Controller
{
    function index(){
        return view('admin.brand.index');
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

        return redirect('/');

    }
}

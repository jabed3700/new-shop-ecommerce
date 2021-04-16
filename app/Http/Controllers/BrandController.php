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
        $this->validate($request,[

            'name' =>'required|regex:/^[\pL\s-]+$/u|max:15|min:2',
            'description' => 'required',
            'publication_status' => 'required'
        ]);


        $brand = new Brand();

        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand -> publication_status  = $request->publication_status;
        $brand->save();

        return redirect('/brand/create')->with('message','Brand created successfully');

    }


    function unpublished($id){
        // return $id;

        $brand  =  Brand::find($id);

        // return $brand;

        $brand->publication_status = 1;
        $brand ->save();

        return redirect('/brand/index')->with('message','brand unpublished successfully');
    }

    function published($id){
        // return $id;
        $brand  =  Brand::find($id);
        $brand->publication_status=0;
        $brand->save();

        return redirect('/brand/index')->with('message','brand published successfully');
    }

    function edit($id){
        // return $id;
        $brand = Brand::find($id);
        return view('admin.brand.edit',['brand'=>$brand]);
    } 

    function update(Request $request){
    //    return $request->all();

    $brand = Brand::find($request->brand_id);
    $brand->name = $request->name;
    $brand->description = $request->description;
    $brand->publication_status = $request->publication_status;

    $brand->save();

    return redirect('/brand/index')->with('message','brand updated successfully');
    }

    function delete($id){
        $brand = Brand::find($id);
        $brand->delete();

        return redirect('/brand/index')->with('message','brand deleted successfully');
        
    }
}

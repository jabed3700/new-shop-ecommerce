<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    function index(){
        // $products = new Product();
        $products = DB::table('products')
                    ->join('categories','products.category_id', '=' ,'categories.id')
                    ->join('brands','products.brand_id', '=','brands.id')
                    ->select('products.*','categories.name','brands.brand_name')
                    ->get();
                    // return $products;
        return view('admin.product.index',['products'=>$products]);
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

    protected function productInfoValidate($request){
        $this->validate($request,[
            'category_id' => 'required',
            'brand_id'   => 'required',
            'product_name' => 'required',
            'product_image' => 'required',
            ]);
    }

    protected function productImageUpload($request){
        $productImage = $request->file('product_image');
        $imageName=$productImage->getClientOriginalName();
        // return $imageName;
        $directory = 'product-image/';
        $productImage->move($directory,$imageName);

        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }

    protected function saveProductBasicInfo($request, $imageUrl){
        $product = new Product();
        $product ->category_id = $request->category_id;
        $product ->brand_id = $request->brand_id;
        $product ->product_name = $request->product_name;
        $product ->product_price = $request->product_price;
        $product ->product_quantity = $request->product_quantity;
        $product ->short_description = $request->short_description;
        $product ->long_description = $request->long_description;
        $product ->product_image = $imageUrl;
        $product ->publication_status = $request->publication_status;
        $product ->publication_status = $request->publication_status;

        $product->save();
    }

    function store(Request $request){
        // return $request->all();

        // validation 
       $this->productInfoValidate($request);

       // image 
       $imageUrl = $this->productImageUpload($request);
        

      // data save 
      $this->saveProductBasicInfo($request, $imageUrl);
      

     return redirect('/product/index')->with('message','product upload successfully');
    }
}

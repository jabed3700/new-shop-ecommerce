<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
class TagController extends Controller
{
    function index(){
        return view('admin.tag.index');
    }

    function create(){
        return view('admin.tag.create');
    }
    
    function store(Request $request){
        $tag = new tag();
        $tag->name = $request->name;
        $tag->description = $request->description;
        $tag->publication_status = $request->publication_status;
        $tag->save();

        return('success');
    }
}

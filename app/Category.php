<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $guarded = ['created_at','updated_at','deleted_at'];
    
    protected $fillable = ['name','description','publication_status'];
}

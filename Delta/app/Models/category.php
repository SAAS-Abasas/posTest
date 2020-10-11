<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];


    public function products(){
        return $this->hasMany('App\Models\product');
    }
    public function productType(){
        return $this->belongsTo('App\Models\productType');
    }
    
    public function abasas(){
        $this->products_count = $this->products->count();
        $this->product_type_name = $this->productType->name;
    }   
 
    
   

    
}
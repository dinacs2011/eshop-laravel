<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','size','category_id','offer_id','price','image'];
    function category (){

        return $this->belongsTo(Category::class);
    
        
    }
    function offer (){

        return $this->belongsTo(Offer::class);
    
        
    }
}

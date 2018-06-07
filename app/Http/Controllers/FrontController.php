<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Offer;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){

        $products=Product::all();

        return view('front.home',compact('products'));
    }

    public function products(){

        $products=Product::all();

        return view('front.products',compact('products'));
    }
    public function womenProducts(){

        $products=Product::where('category_id', '=', 1)->get();
        
        return view('front.women',compact('products'));
    }
    public function menProducts(){

        $products=Product::where('category_id', '=', 2)->get();
        
        return view('front.men',compact('products'));
    }

    public function offers(){

        $products=Product::where('offer_id', '<>', '')->get();
        
        return view('front.offers',compact('products'));
    }

    public function items($id){
        $product=Product::find($id);
      
        return view('front.product',compact(['product']));
       
    }
    
    
}

<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
        $product = Product::where('new',0)->take(4)->get(); 
    	return view('page.index',compact('slide','product'));
    }
    public function getProductType(){
    	return view('page.product_type');
    }
    public function getProduct(){
    	return view('page.product');
    }
    public function getContact(){
    	return view('page.contacts');
    }
}

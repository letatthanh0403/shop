<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\TypeProduct;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
        $product = Product::where('new',1)->paginate(4, ['*'], 'pag'); 
        $sale_product = Product::where('promotion_price','<>',0)->paginate(8); 
    	return view('page.index',compact('slide','product','sale_product'));
    }
    public function getProductType($type){
        $type_products = TypeProduct::all();
        $type_product = TypeProduct::where('id',$type)->first();
        $products = Product::where('id_type',$type)->get();
        $productss = Product::where('id_type','<>',$type)->paginate(4);
    	return view('page.product_type',compact('type_product','type_products','products','productss'));
    }
    public function getProduct(){
    	return view('page.product');
    }
    public function getContact(){
    	return view('page.contacts');
    }
}

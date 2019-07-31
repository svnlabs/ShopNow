<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use Carbon\Carbon;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featureProduct=Category::has('products')->with('products')->get()->random(3);
       return view('pages.home',compact('featureProduct'));
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function category($id)
    {
        $date = new Carbon;
        $category = Category::find($id);
        $products = Category::with(['products','childs.products','childs.childs.products'])->find($id);
      
          
        return view('pages.category', compact('category','products','date'));
    }
     public function brand($id)
    {
        $date = new Carbon;
        $brand = Brand::find($id);    
        $products = Product::where('brand_id',$id)->get()->paginate(10);
        return view('pages.brand', compact('date','brand','products'));
    }
    public function product($id)
    {
        $date = new Carbon; 
        $sideproducts = Product::all()->random(6);       
        $product = Product::find($id);
        return view('pages.product', compact('date','product','sideproducts'));
    }

    
}

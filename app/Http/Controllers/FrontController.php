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
        $date = new Carbon;
        $products = Product::all();
        $sideproducts = Product::all()->random(4);
        $categories = Category::where('parent_id','=','0')->get();
        $brands = Brand::all();

       return view('pages.home', compact('products','date','categories','brands','sideproducts'));
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
        $product = Product::find($id);
        return view('pages.product', compact('date','product'));
    }

    
}

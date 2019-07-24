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
    public function shop($id)
    {
        $category = Category::find($id);
        $res = Category::with(['childs.products','childs.childs.products'])->find($id);
        // $json = $res->toJson(JSON_PRETTY_PRINT);
        // $json = json_decode($injson);
        // $brand = Product::find('brand_id', '=', $id)->get();
        return view('test', compact('category','res'));
    }

    
}

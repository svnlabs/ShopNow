<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;
use Alert;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = \App\Product::all();
       return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $product = new Product;
        $product->name = $request->name;
        $product->slug = Str::slug($request->get('name'));
        $product->price = $request->price;
        $product->special_price = $request->special_price;
        $product->special_price_start = $request->special_price_start;
        $product->special_price_end = $request->special_price_end;
        $product->selling_price = $request->selling_price;
        $product->qty = $request->qty;
        $product->new_from = $request->new_from;
        $product->new_to = $request->new_to;
        $product->description = $request->description;
        $product->manage_stock = $request->manage_stock== 'on' ? '1' : '0';;
        $product->in_stock = $request->in_stock== 'on' ? '1' : '0';;
        $product->is_active = $request->is_active== 'on' ? '1' : '0';;
       
        $rand = str_random(4) . '.'.Str::slug($request->get('name'));

        $product->sku = $rand;

        //set path to http://localhost/ecommerce/public/Productimg/
        if($request->hasfile('image')){
        $dir =  public_path('Productimg/');
        $extension = strtolower($request->file('image')->getClientOriginalExtension()); 
        $fileName = str_random() . '.' . $extension; // rename image
        $request->file('image')->move($dir, $fileName);//move img
        $product->image = $fileName;//add to object
        }// get image extension
        
        
        if($product->save()){
             return redirect('/product')->with('success','Product Added');
        }
        else{
            return redirect('/product')->with('alert','Request Failed');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $product = Product::find($id);
      
        $product->name = $request->name;
        if($request->slug == $product->slug){
            $product->slug=false;
        }
        else{
            $product->slug = Str::slug($request->get('name'));
        }
        
        $product->price = $request->price;
        $product->special_price = $request->special_price;
        $product->special_price_start = $request->special_price_start;
        $product->special_price_end = $request->special_price_end;
        $product->selling_price = $request->selling_price;
        $product->qty = $request->qty;
        $product->new_from = $request->new_from;
        $product->new_to = $request->new_to;
        $product->description = $request->description;
        $product->manage_stock = $request->manage_stock== 'on' ? '1' : '0';;
        $product->in_stock = $request->in_stock== 'on' ? '1' : '0';;
        $product->is_active = $request->is_active== 'on' ? '1' : '0';;
       
        $rand = str_random(4) . '.'.Str::slug($request->get('name'));

        $product->sku = $rand;

        //set path to http://localhost/ecommerce/public/Productimg/
        if($request->hasfile('image')){
            $dir =  public_path('Productimg/');
        if ($product->image != '' && File::exists($dir . $product->image))File::delete($dir . $product->image);
        
        $extension = strtolower($request->file('image')->getClientOriginalExtension()); 
        $fileName = str_random() . '.' . $extension; // rename image
        $request->file('image')->move($dir, $fileName);//move img
        $product->image = $fileName;//add to object
        }// get image extension
        
        
        if($product->save()){
             return redirect('/product')->with('success','Product Updated');
        }
        else{
            return redirect('/product')->with('alert','Request Failed');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = Product::find($id);
        $new->delete();
        return Redirect()->route('product.index')->with('delete','Product Deleted successfully!');
    }
}

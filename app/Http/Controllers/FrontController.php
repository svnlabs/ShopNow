<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\Slider;
use App\Deal;
use App\Coupon;
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
        $now=new Carbon;
        $slider= Slider::all()->random(3);
        $deals = Deal::where('is_active','on')->take(1)->get();
        $featureProduct=Category::has('products')->with('products')->get()->random(3);
        $latestProduct=Product::where('new_to','>',$now)->take(5)->get();
       return view('pages.home',compact('featureProduct','slider','deals','latestProduct'));
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
        $products = Product::where('category_id',$id)->paginate(10);
      
          
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

    public function checkout()
    {
       return view('pages.checkout');
    }
    public function applypromo(Request $request)
    {
        $coupon_code=$request->coupon_code;
        $verify = Coupon::where('coupon_code',$coupon_code)->where('is_active',1)->get();

        $total = 0 ; 
        $cart = session()->get('cart');
        foreach($cart as $id => $details){
        $total += $details['price'] * $details['quantity'];
       }

      //   $discout = ($total * $verify->value)/100;
      //   $final_ammount = $total -$discount;
        $promo = session()->get('promo');
      //   $promo = [
      //     "discout" =>  $discout,
      //     "final_ammount" => $final_ammount,
        
      // ];

      session()->put('promo',  $verify);
      // return redirect()->back()->with('success', 'Code Apply successfully!');
      // return view('test',compact('verify','total'));
     
    }


    
}

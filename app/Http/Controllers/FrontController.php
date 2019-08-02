<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\Slider;
use App\Deal;
use App\Coupon;
use App\Order;
use App\OrderProduct;
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
        $verify = Coupon::where('coupon_code',$coupon_code)->where('is_active','on')->get();

        if($verify){
        $verify[0]['value']++;
        $total = 0 ; 
        $cart = session()->get('cart');
        foreach($cart as $id => $details){
        $total += $details['price'] * $details['quantity'];
       }

        $discount = ($total * $verify[0]['value'])/100;
        $final_amount = ($total - $discount);
        $promo = session()->get('promo');
        $promo = [
          "discount" =>  $discount,
          "final_amount" => $final_amount,
          "coupon_id" => $verify[0]['id'],
        
      ];

      session()->put('promo',   $promo);
       return redirect()->back()->with('success', 'Code Apply successfully!');
     }
     else{
      return redirect()->back()->with('warning', 'Invalid Coupon Code!');
     }
      // return view('test',compact('verify','total'));
     
    }
    public function placeorder(Request $request)
    {
      $now = new Carbon;
      $order = new Order;
      if($request->anothershipping =='on'){
        $order->user_id=$request->user_id;
        $order->shipping_name=$request->name1;
        $order->shipping_address1=$request->address11;
        $order->shipping_address2=$request->address21;
        $order->shipping_city=$request->city1;
        $order->shipping_zip=$request->postcode1;
      }
      else{
        $order->user_id=$request->user_id;
        $order->shipping_name=$request->name;
        $order->shipping_address1=$request->address1;
        $order->shipping_address2=$request->address2;
        $order->shipping_city=$request->city;
        $order->shipping_zip=$request->postcode;}

        $order->payment_method=$request->payment_method== 'on' ? 'on': 'off';;
        $order->shipping_method='Couriar';
        $order->shipping_cost=0;
        $order->status='off';
        $promo = session()->get('promo');
        $order->coupon_id = session('promo')['coupon_id'];
        $order->discount = session('promo')['discount'];
        $total = 0 ; 
        $cart = session()->get('cart');
        foreach($cart as $id => $details){
          $total += $details['price'] * $details['quantity'];
        }
        if(session('promo')){
          $order->total=session('promo')['final_amount'];

        }
        else{
          $order->total = $total;
        }
        
        $order->sub_total=$total;
        
        if($order->save()){
          $order = Order::where('created_at',$now)->first();
          $order_product = new OrderProduct;
          
          foreach($cart as $id => $details){
            $order_product->order_id=$order->id;          
            $order_product->product_id=$id;
            $order_product->quantity=$details['quantity'];
            $order_product->unit_price=$details['price'];
            $order_product->save();
            $product = Product::find($id);
            $product->quantity = $product->quantity - $details['quantity'];
            $product->save();
            return back()->with('success','Order Placed');
            Session::forget('promo');
            Session::forget('cart');

          }

        }



      }   


    

    
}

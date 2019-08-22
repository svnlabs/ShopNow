<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Carbon\Carbon;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = new Carbon;
        $sideproducts = Product::all()->random(6);
        return view('pages.cart',compact('sideproducts','date'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->proid);
        

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $request->proid => [

                    "name" => $product->name,
                    "quantity" => $request->quantity,
                    "price" => $product->selling_price,
                    "sku" => $product->sku,
                    "description" => $product->description,
                    "image" => $product->thumbnail
                ]
            ];
            if(session()->put('cart', $cart))
            {           

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
            else{
            return redirect()->back()->with('success', 'Product added to cart successfully!');
            }   
        }

        

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$request->proid] = [
          "name" => $product->name,
          "quantity" => $request->quantity,
          "price" => $product->selling_price,
          "sku" => $product->sku,
          "description" => $product->description,
          "image" => $product->thumbnail
      ];

      if(session()->put('cart', $cart))
            {      

            $product->quantity -= $request->quantity;
            $product->save();
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
            else{
            return redirect()->back()->with('error');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;
            


            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [

                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->selling_price,
                    "sku" => $product->sku,
                    "description" => $product->description,
                    "image" => $product->thumbnail
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
          "name" => $product->name,
          "quantity" => 1,
          "price" => $product->selling_price,
          "sku" => $product->sku,
          "description" => $product->description,
          "image" => $product->thumbnail
      ];

      session()->put('cart', $cart);

      return redirect()->back()->with('success', 'Product added to cart successfully!');
  }

   public function removeAll(){
        session()->forget('cart');
        session()->flash('success', 'Product removed successfully');
   }

  

  


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderProduct;
use App\Product;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendingorder=Order::where('status','off')->get();
        $neworder=count($pendingorder);
        $orderproduct=OrderProduct::all();
        return view('admin.order.index' ,compact('pendingorder','orderproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shipment()
    {
        return view('admin.order.index');
    }
    public function all()
    {
        $pendingorder=Order::all();
        $orderproduct=OrderProduct::all();
        return view('admin.order.all',compact('pendingorder'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
       $order =  Order::find($id);
       $order->status = $request->status;
       $order->save();
       return redirect()->back()->with('success', 'Order Approved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = Order::find($id);
        $orderproduct = OrderProduct::where('order_id',$id)->get();
        $product = Product::where('id',$orderproduct->product_id)->get();
        $product->quantity += $orderproduct->quantity;
        $product->save();     
        $orderproduct->delete();
        $new->delete();
        return Redirect()->route('product.index')->with('delete','Order Deleted successfully!');
    }
}

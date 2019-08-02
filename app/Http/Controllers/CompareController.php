<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.compare');
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
         //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addToCompare($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }


        $compare = session()->get('compare');

        // if compare is empty then this the first product
        if(!$compare) {

            $compare = [
                $id => [

                    "name" => $product->name,
                    "category" => $product->category->name,
                    "quantity" => $product->quantity,
                    "price" => $product->price,
                    "sku" => $product->sku,
                    "description" => $product->long_description,
                    "image" => $product->thumbnail
                ]
            ];

            session()->put('compare', $compare);

            return redirect()->back()->with('success', 'Product added to compare successfully!');
        }

    if(count($compare)  < 3){
        // if item not exist in compare then add to compare with quantity = 1
        $compare[$id] = [
          "name" => $product->name,
                    "category" => $product->category->name,
                    "quantity" => $product->quantity,
                    "price" => $product->price,
                    "sku" => $product->sku,
                    "description" => $product->long_description,
                    "image" => $product->thumbnail
      ];
      session()->put('compare', $compare);
      return redirect()->back()->with('success', 'Product added to compare successfully!');
      }
      else{
         return redirect()->back()->with('success', 'Only 3 Product can be compared!');
      }
      

      
  }
  public function remove(Request $request)
    {
        if($request->id) {

            $compare = session()->get('compare');

            if(isset($compare[$request->id])) {

                unset($compare[$request->id]);

                session()->put('compare', $compare);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}

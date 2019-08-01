<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use Intervention\Image\ImageManagerStatic as Image;
use App\Deal;
class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $deals = Deal::all();
       return view('admin.deal.index',compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.deal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $deal = new Deal; 
        $deal->title = $request->title;
        $deal->description = $request->description;
        $deal->link = $request->link;       
        $deal->is_active = $request->is_active;
        $deal->start_date = $request->start_date;
        $deal->end_date = $request->end_date;       
        $deal->is_active = $request->is_active;
       
       

        
        if($request->hasfile('front_image')){
            $dir =  public_path('dealimg/');
             $extension = strtolower($request->file('front_image')->getClientOriginalExtension()); 
             $fileName =  time() . '.' . $extension; // rename image
         

            
            $deal->front_image = $fileName;
            $npath = $dir.$fileName;
            Image::make($request->front_image)->resize(222, 222)->encode('png', 80)->save($npath);
       
        }
        if($request->hasfile('back_image')){
            $dir =  public_path('dealimg/');
             $extension = strtolower($request->file('back_image')->getClientOriginalExtension()); 
             $fileName =  time() . '.' . $extension; // rename image
         

            
            $deal->back_image = $fileName;
            $npath = $dir.$fileName;
            Image::make($request->back_image)->resize(1920, 700)->save($npath);
       
        }
        
        
        if($deal->save()){
             return back()->with('success','deal Added');
        }
        else{
            return back()->with('alert','Request Failed');
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
        $deal=deal::find($id);
        
        return view('admin.deal.edit', compact('deal'));
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
       $deal = Deal::find($id);
        $deal->title = $request->title;
        $deal->description = $request->description;
        $deal->link = $request->link;       
        $deal->is_active = $request->is_active;
        $deal->start_date = $request->start_date;
        $deal->end_date = $request->end_date;       
        
       
       

        
        if($request->hasfile('front_image')){
            $dir =  public_path('dealimg/');
                if ($deal->front_image != '' && File::exists($dir . $deal->front_image))File::delete($dir . $deal->front_image);
             $extension = strtolower($request->file('front_image')->getClientOriginalExtension()); 
             $fileName =  time() . '.' . $extension; // rename image
         

            
            $deal->front_image = $fileName;
            $npath = $dir.$fileName;
            Image::make($request->front_image)->resize(222, 222)->encode('png', 80)->save($npath);
       
        }
        if($request->hasfile('back_image')){
            $dir =  public_path('dealimg/');
                if ($deal->back_image != '' && File::exists($dir . $deal->back_image))File::delete($dir . $deal->back_image);
             $extension = strtolower($request->file('back_image')->getClientOriginalExtension()); 
             $fileName =  time() . '.' . $extension; // rename image
         

            
            $deal->back_image = $fileName;
            $npath = $dir.$fileName;
            Image::make($request->back_image)->resize(1920, 700)->encode('jpg', 80)->save($npath);
       
        }
        
        
        if($deal->save()){
             return back()->with('success','deal Updated');
        }
        else{
            return back()->with('alert','Request Failed');
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
        $new = Deal::find($id);
        $dir =  public_path('dealimg/');
         if ($new->image != '' && File::exists($dir . $new->image))File::delete($dir . $new->image);
        $new->delete();
        
        return Redirect()->route('deal.index')->with('delete','deal Deleted successfully!');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use File;
use Intervention\Image\ImageManagerStatic as Image;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderby('id', 'desc')->paginate(10);
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view ('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          $slider = new Slider;          
          $slider->hide_product = $request->hide_product;          
         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = base_path('slide/');
            $npath1 = $location.$filename;
  			Image::make($request->image)->resize(1170, 569)->save($npath1);
            $slider->image = $filename;
        }
        
          $slider->save();
          return back()->with('success', 'Slider Added');
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
        $slider=Slider::find($id);
        return view('admin.sliders.edit', compact('slider'));
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
        $slider=Slider::find($id);
        
        $slider->hide_product = $request->hide_product;
          
         if ($request->hasFile('image')) {
            $dir = public_path('slide/');
            if ($slider->image != '' && File::exists($dir . $slider->image))File::delete($dir . $slider->image);
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('slide/');
            
  			Image::make($request->image)->resize(1170, 569)->save($location);
            $slider->image = $filename;
        }
        
          $slider->save();
          return back()->with('success', 'Slider Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $new = Slider::find($id);
       $dir = public_path('slide/');
       if (File::exists($dir . $new->image))File::delete($dir . $new->image);       
        $new->delete();
        return back()->with('delete','slider Deleted successfully!');
    }
}

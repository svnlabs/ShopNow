<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use File;
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
          $slider->title = $request->title;
          $slider->hide_product = $request->hide_product;
          $slider->feature = $request->feature;
         if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $filename1 = time() . '.' . $image1->getClientOriginalExtension();
            $location = public_path('slide/');
            $request->file('image1')->move($location, $filename1);
  
            $slider->image1 = $filename1;
        }
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $filename2 = time() . '.' . $image2->getClientOriginalExtension();
            $location = public_path('slide/');
            $request->file('image2')->move($location, $filename2);
  
            $slider->image2 = $filename2;
        }
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $filename3 = time() . '.' . $image3->getClientOriginalExtension();
            $location = public_path('slide/');
            $request->file('image3')->move($location, $filename3);
  
            $slider->image3 = $filename3;
          }
          $slider->save();
          return redirect()->route('slides.index');
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
        $slider->title = $request->title;
        $slider->hide_product = $request->hide_product;
          $slider->feature = $request->feature;
         if ($request->hasFile('image1')) {
            $dir = public_path('slide/');
            if ($slider->image != '' && File::exists($dir . $slider->image))File::delete($dir . $slider->image);
            $image1 = $request->file('image1');
            $filename1 = time() . '.' . $image1->getClientOriginalExtension();
            $location = public_path('slide/');
            $request->file('image1')->move($location, $filename1);
  
            $slider->image1 = $filename1;
        }
        if ($request->hasFile('image2')) {
            $dir = public_path('slide/');
            if ($slider->image != '' && File::exists($dir . $slider->image))File::delete($dir . $slider->image);
            $image2 = $request->file('image2');
            $filename2 = time() . '.' . $image2->getClientOriginalExtension();
            $location = public_path('slide/');
            $request->file('image2')->move($location, $filename2);
  
            $slider->image2 = $filename2;
        }
        if ($request->hasFile('image3')) {
            $dir = public_path('slide/');
            if ($slider->image != '' && File::exists($dir . $slider->image))File::delete($dir . $slider->image);
            $image3 = $request->file('image3');
            $filename3 = time() . '.' . $image3->getClientOriginalExtension();
            $location = public_path('slide/');
            $request->file('image3')->move($location, $filename3);
  
            $slider->image3 = $filename3;
          }
          $slider->save();
          return redirect()->route('slides.index');
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
       if (File::exists($dir . $new->image1))File::delete($dir . $new->image1);
       if (File::exists($dir . $new->image2))File::delete($dir . $new->image2);
       if (File::exists($dir . $new->image3))File::delete($dir . $new->image3);
        $new->delete();
        return back()->with('delete','slider Deleted successfully!');
    }
}

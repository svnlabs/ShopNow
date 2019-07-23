<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Str;
use Alert;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $categories = Category::all();
            return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->position = $request->position;
        $category->slug = Str::slug($request->get('name'));
        $category->is_searchable = $request->is_searchable== 'on' ? '1' : '0';;
        $category->is_active = $request->is_active== 'on' ? '1' : '0';;
        $category->save();
        return redirect()->route('category.index')->with('alert','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category = Category::find($id);      

        return view('admin.category.edit', compact('category'));
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
         $category = Category::find($id);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->position = $request->position;
        $category->slug = Str::slug($request->get('name'));
        $category->is_searchable = $request->is_searchable== 'on' ? '1' : '0';;
        $category->is_active = $request->is_active== 'on' ? '1' : '0';;
        $category->save();
        return redirect('/admin/category/')->with('alert','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category =Category::find($id);
        $category->delete();
        return redirect('/admin/category/')->with('alert','deleted');
    }
}

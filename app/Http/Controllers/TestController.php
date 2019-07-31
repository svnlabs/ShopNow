<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
class TestController extends Controller
{
     public function index()
    {
       $parent = Category::has('products')->with('products')->get();
        return view('test',compact('parent'));
    }
}

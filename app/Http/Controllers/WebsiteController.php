<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
  public function index()
  {

    $categories = Category::all();
    return view('website.index')->with('categories', $categories);
  }
  public function show($id)
  {
    $category = Category::with('stores')->findOrFail($id);
    return view('website.categories_stores')->with('category', $category);
  }
}

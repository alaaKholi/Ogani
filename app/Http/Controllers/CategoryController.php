<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

       $result= Category::withTrashed()->get();
        return view('admin.categories.index')->with('categories',$result);


    }


    public function create(){
        return view('admin.categories.create');
    }

    public function store(Request $request){

        $name = $request['category_name'];
        $path = $request['categoryIconFile'];
        
        $category= new Category();
        $category->name=$name;
        $category->icon=$path;

        $result= $category->save();
        return redirect()->back();

    }

    public function edit($id){

      $result = Category::findOrFail($id);

      return view('admin.categories.edit')->with('category',$result);
    }

    public function update(Request $request ,$id){

        $result = Category::findOrFail($id);

        $result->name=$request['category_name'];

//

         $result->save();
        return redirect()->route('index_route');

    }


    public function destroy(Request $request , $id){
        $result = Category::findOrFail($id);
        $result->delete();
        return redirect()->back();

    }


    public function restore($id){
        $result = Category::onlyTrashed()->findOrFail($id);

        $result ->restore();
        return redirect()->back();
    }
    

    
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $stores=Store::with('category')->withTrashed()->get();
        return view('admin.stores.index')->with('stores',$stores);
    }
    public function create(){
        $catgories=Category::all();
        return view('admin.stores.create')->with('catgories',$catgories);
    }

    public function store(Request $request) {
    
    
    $result= new Store();
    $result->name=   $request['store_name'];
     $result->address=   $request['store_address'];
     $result->email=   $request['store_email'];
     $result->mobile=   $request['store_mobile'];
     $result->category_id=   $request['category_id'];
     $result->save();
    return redirect()->back();

    }

    public function edit($id){
      $result=  Store::FindOrFail($id);
    $categories=  Category::all();
      return view('admin.stores.edit')->with('store',$result)->with('categories',$categories);
    }


    public function update(Request $request,$id){
              $result=  Store::FindOrFail($id);
            $result->name=   $request['store_name'];
                $result->address=   $request['store_address'];
                $result->email=   $request['store_email'];
                $result->mobile=   $request['store_mobile'];
                $result->category_id=   $request['category_id'];
                 $result->save();
                         return redirect()->route('index_store_route');

    }

    public function destroy($id){
        Store::FindOrFail($id)->delete();
        return redirect()->back();

    }

    public function restore($id){
        $result = Store::onlyTrashed()->findOrFail($id);

        $result ->restore();
        return redirect()->back();
    }
}

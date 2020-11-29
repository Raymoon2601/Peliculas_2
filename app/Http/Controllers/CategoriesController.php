<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories as Categories;

class CategoriesController extends Controller
{
    public function index()
	{
		$categories = Categories::all();
		return 	\ View::make('categories/list',compact('categories'));
	}

    public function store(Request $request){
    	$Categories = new Categories;
    	$Categories->name =$request->name;
    	$Categories->status_id = $request->status_id;
    	$Categories->save();
    	return redirect('categories');
    }

    public function edit ($id){
        $categories = Categories::find($id);
        return \View::make('categories/update',compact('categories'));
    }

    public function create()
    {
    	return \View::make('categories/new');
    }
    
    public function update($id,Request $request){
        $categories =Categories::find($id);
        $categories->name =$request->name;
        $categories->status_id =$request->status_id;
        $categories->save();
        return redirect('categories');
    }

    public function destroy($id){
        $Categories = Categories::find($id);
        $Categories->delete();
        return redirect()->back();
    }
}

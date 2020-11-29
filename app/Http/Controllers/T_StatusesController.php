<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_statuses as type_statuses;

class T_StatusesController extends Controller
{
    public function index()
	{
		$statuses = type_statuses::all();
		return 	\ View::make('type_statuses/list',compact('statuses'));
	}

    public function store(Request $request){
    	$statuses = new type_statuses;
    	$statuses->name =$request->name;
    	$statuses->save();
    	return redirect('type_statuses');
    }

    public function create()
    {
    	return \View::make('type_statuses/new');
    }
    public function edit ($id){
        $statuses = type_statuses::find($id);
        return \View::make('type_statuses/update',compact('statuses'));
    }
    public function update($id,Request $request){
        $statuses =type_statuses::find($id);
        $statuses->name =$request->name;
        $statuses->save();
        return redirect('type_statuses');
    }

    public function destroy($id){
        $statuses = type_statuses::find($id);
        $statuses->delete();
        return redirect()->back();
    }
}

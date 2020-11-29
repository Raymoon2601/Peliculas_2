<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statuses as Statuses;

class StatusesController extends Controller
{
    public function index()
	{
		$statuses = Statuses::all();
		return 	\ View::make('statuses/list',compact('statuses'));
	}

    public function store(Request $request){
    	$statuses = new statuses;
    	$statuses->name =$request->name;
    	$statuses->type_status_id = $request->type_status_id;
    	$statuses->save();
    	return redirect('statuses');
    }

    public function create()
    {
    	return \View::make('statuses/new');
    }
    public function edit ($id){
        $statuses = statuses::find($id);
        return \View::make('statuses/update',compact('statuses'));
    }
    public function update($id,Request $request){
        $statuses =statuses::find($id);
        $statuses->name =$request->name;
        $statuses->type_status_id =$request->type_status_id;
        $statuses->save();
        return redirect('statuses');
    }

    public function destroy($id){
        $statuses = statuses::find($id);
        $statuses->delete();
        return redirect()->back();
    }
}

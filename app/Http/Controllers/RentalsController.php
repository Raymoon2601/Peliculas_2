<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentals as Rental;

class RentalsController extends Controller
{
    public function index()
	{
		$rentals = Rental::all();
		return 	\ View::make('rentals/list',compact('rentals'));
	}

    public function store(Request $request){
    	$Rental = new Rental;
    	$Rental->start_date =$request->start_date;
    	$Rental->end_date = $request->end_date;
    	$Rental->total =$request->total;
    	$Rental->user_id = $request->user_id;
    	$Rental->status_id = $request->status_id;
    	$Rental->save();
    	return redirect('rentals');
    }

    public function create()
    {
    	return \View::make('rentals/new');
    }
    public function edit ($id){
        $rentals = Rental::find($id);
        return \View::make('rentals/update',compact('rentals'));
    }
    public function update($id,Request $request){
        $rentals =Rental::find($id);
        $rentals->start_date =$request->start_date;
    	$rentals->end_date = $request->end_date;
    	$rentals->total =$request->total;
    	$rentals->user_id = $request->user_id;
    	$rentals->status_id = $request->status_id;;
        $rentals->save();
        return redirect('rentals');
    }

    public function destroy($id){
        $Rental = Rental::find($id);
        $Rental->delete();
        return redirect()->back();
    }
}

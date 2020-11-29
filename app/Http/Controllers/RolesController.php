<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role as Role;

class RolesController extends Controller
{

	public function index()
	{
		$roles = Role::all();
		return 	\ View::make('roles/list',compact('roles'));
	}

    public function store(Request $request){
    	$role = new Role;
    	$role->name =$request->name;
    	$role->status_id = $request->status_id;
    	$role->save();
    	return redirect('roles');
    }

    public function create()
    {
    	return \View::make('roles/new');
    }
    public function edit ($id){
        $roles = Role::find($id);
        return \View::make('roles/update',compact('roles'));
    }
    public function update($id,Request $request){
        $roles =Role::find($id);
        $roles->name =$request->name;
        $roles->status_id =$request->status_id;
        $roles->save();
        return redirect('roles');
    }

    public function destroy($id){
        $Role = Role::find($id);
        $Role->delete();
        return redirect()->back();
    }
}

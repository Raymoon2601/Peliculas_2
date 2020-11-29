<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;


class UserController extends Controller
{
    public function index()
	{
		$users = User::all();
		return 	\ View::make('users/list',compact('users'));
	}

    public function store(Request $request){
    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
        $user->password = $request->password;
        $user->status_id = $request->status_id;
        $user->role_id = $request->role_id;
    	$user->save();
    	return redirect('user');
    }
    public function create()
    {
    	return \View::make('users/new');
    }

    public function edit ($id){
        $user = User::find($id);
        return \View::make('users/update',compact('user'));
    }
    public function update($id,Request $request){
        $user =User::find($id);
        $user->name =$request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status_id = $request->status_id;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('user');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

}

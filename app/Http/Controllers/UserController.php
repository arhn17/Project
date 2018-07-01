<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use App\Transaksi;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	return view('user.index',compact('users'));
    }

    public function create()
    {
    	$roles = Role::all()->pluck('name', 'id');
    	return view('user.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
    	$user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
    	$user->save();
    	return redirect(route('user.index'));

    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all()->pluck('name', 'id');
        return view('user.edit',compact('user','roles'));
    }

    public function update(Request $request, $id)
    {
       
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect(route('user.index'));

    }
}

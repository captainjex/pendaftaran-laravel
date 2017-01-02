<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        return view('admin.user', compact('users'));
    }

    public function create(){
        return view('admin.usertambah');
    }

    public function store(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('/listuser');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/listuser');

    }
}

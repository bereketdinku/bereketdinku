<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
   
public function index(){
    return view('auth.register');
}




    public function register(Request $request){
       $user=new User;
       $user->name=$request->input('name');
       $user->email=$request->input('email');
       $user->password=$request->input('password');
         $user->save();
         return redirect(route('/'));
  }
}

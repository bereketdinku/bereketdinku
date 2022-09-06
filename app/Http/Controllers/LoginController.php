<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function index(){
       $role=Auth::user()->name;
       if($role=='beki'){
        return view('admin.layout.admin');
       } else{
        return view('Teacher.index');
       }
    }
    public function login(Request $request){
        $this->validate($request,[
         'email'=>'required',
         'password'=>'required'
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return view('admin.layout.admin');
  
        }
    }
}

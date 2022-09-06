<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class ResultController extends Controller
{
    public function index(){
        return view('Result.view');
    }

    public function search(){
       $search=$_GET['query']; 
        $grades=Grade::where('sid','LIKE','%'.$search.'%')->get();
      return view('Result.index',compact('grades'));
    }
}

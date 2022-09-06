<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collage;
class TeacherController extends Controller
{
    public function index(){
         $assignments=Collage::all();
  
        return view('Teacher.view',compact('assignments'));
    }

    public function create(){
        
    }
    public function store(Request $request){
        $first=$request->input('first');
      $middle=$request->input('middle');
      $last=$request->input('last');
      $father=$request->input('father');
      $father_phone=$request->input('father_phone');
      $mother=$request->input('mother');
      $mother_phone=$request->input('mother_phone');
      $age=$request->input('age');
      $gender=$request->input('gender');
      $nationality=$request->input('nationality');
      $country=$request->input('country');
            $email=$request->input('email');
      $phone=$request->input('phone');
      $address=$request->input('address');
      $status=$request->input('status');
      $dob=$request->input('dob');
      $dor=$request->input('dor');
      $faculity=$request->input('faculity');
      $department=$request->input('department');
      $suc=Admission::insert(['first'=>$first,
        'middle'=>$middle ,'last'=>$last,
        'father'=>$father,'father_phone'=>$father_phone,
        'mother'=>$mother,'mother_phone'=>$mother_phone,
        'age'=>$age,'gender'=>$gender,'nationality'=>$nationality,
        'country'=>$country,'email'=>$email,'phone'=>$phone ,'address'=>$address,'status'=>$status ,'dob'=>$dob,'dor'=>$dor,'faculity'=>$faculity,'department'=>$department         
       
  ]);
if($suc){
    return redirect(route('student.index'));
}else{
    return redirect(route('collage.index'));
}

    }
            public function search(){
       $search=$_GET['query']; 
        $assignments=Assesement::where('TID','LIKE','%'.$search.'%')->get();
      return view('Teacher.view',compact('assignments'));
    }
}

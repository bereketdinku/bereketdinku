<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collage;
use App\Models\Department;
use App\Models\Admission;
use App\Models\AcademicYear;

class AdmissionController extends Controller

{

    public function index(){
        $collages=Collage::all();
     $academic_years=AcademicYear::all();
     $departments=Department::all();
     //$academic_years=Admission::all();
        return view('admin.layout.Admision', compact('academic_years','departments','collages'));
 
    }
    public function show(){
        $academic_year=Admission::all();
        return view('student.index',compact('academic_year'));
    }
   public function create(){
   // $admission=Admission::all();
    $collages=Collage::all();
    $departments=Department::all();
    return redirect('add');}
     
    public function store (Request $request){
       /* $input=$request->all();
        $student=new Admission;
        $student->first=$request->first;
        $student->middle=$request->middle;
        $student->last=$request->last;
        $student->father=$request->father;
        $student->father_phone=$request->father_phone;
        $student->mother=$request->mother;
        $student->gender=$request->gender;
        $student->status=$request->status;
        $student->age=$request->age;
        $student->nationality=$request->nationality;
        $student->country=$request->country;
        $student->phone=$request->phone;
        $student->email=$request->email;
        $student->department=$request->department;
        $student->faculity=$request->faculity;
        $student->class=$request->class;
        $student->address=$request->address;
        $student->academic_year=$request->academic_year;
        $student->dor=date('y-m-d');
        $student->academic_year=$request->academic_year;
   $student->save();
return redirect(route('academic-year.index'));
*/
 /*$request->validate([
            'first' => 'required',
            'middle' => 'required',
            'last' => 'required',
            'father' => 'required','father_phone' => 'required',
            'mother' => 'required',
            'mother_phone' => 'required',
            'age' => 'required',
            'email' => 'required',
            'phone' => 'required',

            'nationality' => 'required','country' => 'required'
            
        ]);*/
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
}

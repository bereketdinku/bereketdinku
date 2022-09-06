<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Collage;
use App\Models\Department;
use App\Models\Admission;
use App\Models\AcademicYear;
class StudentController extends Controller
{
    public function index(){
    	 $academic_years=Admission::all();
        return view('student.index',compact('academic_years'));
  
    }
}

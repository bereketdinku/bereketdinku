<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
use App\Constants;
use App\Models\Assignment;
use App\Models\Assesement;

class AssesmentController extends Controller
{
   public function index(){
     return view('Teacher.pageview');
 
   }
   public function store(Request $request){
     $request->validate([
            'fullname' => 'required',
            'course_id' => 'required',
            'TID' => 'required',
            'mark' => 'required',
            'assignment_type' => 'required',
            'deadline' => 'required',
        ]);
        Assesement::create(array_merge($request->all()));
        $request->session()->flash('success', 'New Course Assignment Successfully');
        return redirect(route('teacher.index'));

   } 
   public function create()
    {
        $courses=Course::all();
        $departments=Department::all();
        $assignment_types=Constants::$assignment_type;

       $search=$_GET['query']; 
       $assignments=Assesement::where('TID','LIKE','%'.$search.'%')->get();
        $courses=Course::all();
        // dd($academic_years);
       return view('Teacher.view', compact('courses','departments','assignment_types','assignments'));
   
         }


 public function edit($id)
    {
         $data=Assesement::find($id);
       //$data->delete();
        return view('Teacher/edit',compact('data'));
  
    }



    public function update(Request $request, $id)
    {
         $this->validate($request,[//'title'=>'required'
        'fullname'=>'required',
        'TID'=>'required',
        
    ]);
        $academic_years=Assesement::find($id);;
        $academic_years->update($request->all());
        
       return redirect(route('asses.index'));

}




    public function destroy($id)
    {
         $data=Assesement::find($id);
        $data->delete();
         return redirect(route('asses.index'));
   
    }
}

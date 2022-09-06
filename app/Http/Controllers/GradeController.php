<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Constants;
class GradeController extends Controller
{
    public function index(){
        $grades=Grade::all();
        
        return view('grade.index',compact('grades'));
    }
    public function store(Request $request){
        $request->validate([
            'fullname' => 'required',
            'sid' => 'required',
            'tid'=>'required',
            'course' => 'required',
            'course_id' => 'required',
            'mark' => 'required',
            'grade' => 'required',

        ]);
        Grade::create(array_merge($request->all()));
        $request->session()->flash('success', 'New dormitory Created Successfully');
        return redirect(route('teacher.index'));
  
    }
    public function show(){
 return view('assignment.pageView');
    }
     public function search(){
       $search=$_GET['query']; 
       $grades=Grade::where('sid','LIKE','%'.$search.'%')->get();
      // $collages=Collage::all();
       return view('assignment.viewgrade',compact('grades',));
    }
 public function edit($id)
    {
         $data=Grade::find($id);
       //$data->delete();
        return view('grade/edit',compact('data'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[//'title'=>'required'
        'fullname'=>'required',
        'tid'=>'required',
        'mark'=>'required'
    ]);
        $academic_years=Grade::find($id);;
        $academic_years->update($request->all());
        
       return redirect(route('grade.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $data=Grade::find($id);
        $data->delete();
         return redirect(route('grade.index'));
   
    }


}

<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Department;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments=Assignment::all();
        $courses=Course::all();
       // $assignment_types=Constants::$assignment_type;
        
        $assignment_types=Constants::$assignment_type;
       //return view('assignment.index',compact('assignments')); 
        //compact('assignments','courses','assignment_types'));
        return view('assignment.pageView');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses=Course::all();
       $search=$_GET['query']; 
       $assignments=Assignment::where('code','LIKE','%'.$search.'%')->get();
     $departments=Department::all();
       $assignments=Assignment::all();
       return view('viewassignment.index', compact('departments','assignments','courses','assignment_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:assignments,name',
            'code' => 'required|unique:assignments,code',
            'description' => 'min:2',
            'department' => 'required',
            'assignment_type' => 'required',
            'deadline' => 'required',
        ]);
        Assignment::create(array_merge($request->all()));
        $request->session()->flash('success', 'New Course Assignment Successfully');
        return redirect(route('assignment.index'));
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       /* $this->validate($request,[//'title'=>'required'
        'name'=>'required',
        'code'=>'required',
        
    ]);*/
                $data=Assignment::find($id);
       //$data->delete();
        return view('Teacher/edit',compact('data'));
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
        'name'=>'required',
        'code'=>'required',
        
    ]);
        $academic_years=Assignment::find($id);;
        $academic_years->update($request->all());
        
       return redirect(route('assignment.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function group(Assignment $assignment_id)
    {
        $assignments=Assignment::get();
        // dd($academic_years);
       return view('group.create', compact('assignments'));
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $id)
    {
        $assignments=Assignment::all();
        // $courses=Course::all();
        // $assignment_types=Constants::$assignment_type;
       return view('assignment.upload', compact('assignments'));
    }
        public function search(){
       $search=$_GET['query'];
       $courses=Course::all();
      $assignment_types=Constants::$assignment_type;
       $departments=Department::all(); 
       $assignments=Assignment::where('code','LIKE','%'.$search.'%')->get();
       return view('assignment.index',compact('assignments','departments','courses','assignment_types'));
    }
}

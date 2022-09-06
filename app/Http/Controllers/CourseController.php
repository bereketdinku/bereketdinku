<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        $sections=Section::all();
       return view('course.index', compact('courses','sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections=Section::all();
        // dd($academic_years);
       return view('course.create', compact('sections'));
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
            'name' => 'required|unique:courses,name',
            'code' => 'required|unique:courses,code',
            'description' => 'min:2',
        ]);
        Course::create(array_merge($request->all()));
        $request->session()->flash('success', 'New Course Created Successfully');
        return redirect(route('course.index'));
  
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
         $data=Course::find($id);
       //$data->delete();
        return view('course/edit',compact('data'));
  
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
        'description'=>'required'
    ]);
        $academic_years=Course::find($id);;
        $academic_years->update($request->all());
        
       return redirect(route('course.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data=Course::find($id);
        $data->delete();
         return redirect(route('course.index'));
   
    }
     public function search(){
       $search=$_GET['query']; 
       $courses=Course::where('name','LIKE','%'.$search.'%')->get();
       $sections=Section::all();
       return view('course\index',compact('courses','sections'));
    }
}

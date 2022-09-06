<?php

namespace App\Http\Controllers;

use App\Models\Collage;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments=Department::all();
        $collages=Collage::all();
     return view('department.index', compact('collages','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $collages=Collage::all();
     return view('department.create', compact('collages'));
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
            'name' => 'required|unique:departments,name',
            'code' => 'required|unique:departments,code',
            'description' => 'min:2',
        ]);
        Department::create(array_merge($request->all()));
        $request->session()->flash('success', 'New Department Created Successfully');
        return redirect(route('department.index'));
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('collage.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data=Department::find($id);
       //$data->delete();
        return view('department/edit',compact('data'));
  
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
        $academic_years=Department::find($id);;
        $academic_years->update($request->all());
        
       return redirect(route('department.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $data=Department::find($id);
        $data->delete();
         return redirect(route('department.index'));
   
    }
     public function search(){
       $search=$_GET['query']; 
       $departments=Department::where('name','LIKE','%'.$search.'%')->get();
       $collages=AcademicYear::all();
       return view('collage\index',compact('departments','collages'));
    }
}

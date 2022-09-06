<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections=Section::all();
        $departments=Department::all();
     return view('section.index', compact('sections','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $departments=Department::all();
        // dd($academic_ydepartmentsears);
       return view('section.create', compact('departments'));
    
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
            'name' => 'required|unique:sections,name',
            'code' => 'required|unique:sections,code',
            'description' => 'min:2',
        ]);
        Section::create(array_merge($request->all()));
        $request->session()->flash('success', 'New Section Created Successfully');
        return redirect(route('section.index'));
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('section.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $data=Section::find($id);
       //$data->delete();
        return view('section/edit',compact('data'));
  
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
        $academic_years=Section::find($id);;
        $academic_years->update($request->all());
        
       return redirect(route('section.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                  $data=Section::find($id);
        $data->delete();
         return redirect(route('section.index'));
   
    }
     public function search(){
       $search=$_GET['query']; 
       $sections=Section::where('name','LIKE','%'.$search.'%')->get();
       $departments=Department::all();
       return view('section\index',compact('sections','departments'));
    }
}

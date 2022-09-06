<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\Collage;
use Illuminate\Http\Request;

class CollageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $collages=Collage::all();
     $academic_years=AcademicYear::all();
     return view('collage.index', compact('collages','academic_years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academic_years=AcademicYear::all();
        // dd($academic_years);
       return view('collage.create', compact('academic_years'));
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
            'name' => 'required|unique:collages,name',
            'code' => 'required|unique:collages,code',
            'description' => 'min:2',
        ]);
        Collage::create(array_merge($request->all()));
        $request->session()->flash('success', 'New Collage Created Successfully');
        return redirect(route('collage.index'));
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Collage $collages)
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
        $data=Collage::find($id);
       //$data->delete();
        return view('collage/edit',compact('data'));
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
        $academic_years=Collage::find($id);;
        $academic_years->update($request->all());
        
       return redirect(route('collage.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data=Collage::find($id);
        $data->delete();
         return redirect(route('collage.index'));
   
    }

    public function search(){
       $search=$_GET['query']; 
       $collages=Collage::where('name','LIKE','%'.$search.'%')->get();
       $academic_years=AcademicYear::all();
       return view('collage\index',compact('collages','academic_years'));
    }
}

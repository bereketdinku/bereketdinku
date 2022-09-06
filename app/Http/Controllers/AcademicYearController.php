<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academic_years=AcademicYear::all();
        return view('academic_year.index', compact('academic_years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academic_year.create');
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
            'name' => 'required|unique:academic_years,name',
            'code' => 'required|unique:academic_years,code',
            'description' => 'min:2',
        ]);
        AcademicYear::create(array_merge($request->only(['name', 'code', 'description'])));
        $request->session()->flash('success', 'New AcademicYear Created Successfully');
        return redirect(route('academic-year.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function save(Request $request){
        $this->validate($request,['title'=>'required']);
        AcademicYear::create([
          'title'=>$request->title
        ]);
    }
    public function show(AcademicYear $academic_year)
    {
        return view('academic_year.show', compact('academic_year'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academic_years=AcademicYear::find($id);;
        return view('academic_year/edit',compact('academic_years'));

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
        $academic_years=AcademicYear::find($id);;
        $academic_years->update($request->all());
        
       return redirect(route('academic-year.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     

    public function destroy($id)
    {
        $data=AcademicYear::find($id);
        $data->delete();
         return redirect(route('academic-year.index'));
    }
    public function search(){
       $search=$_GET['query']; 
       $academic_years=AcademicYear::where('name','LIKE','%'.$search.'%')->get();
       return view('academic_year\index',compact('academic_years'));
    }
}

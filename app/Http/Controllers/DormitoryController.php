<?php

namespace App\Http\Controllers;

use App\Models\Collage;
use App\Models\Dormitory;
use Illuminate\Http\Request;

class DormitoryController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dormitories=Dormitory::all();
        $collages=Collage::all();
     return view('dormitory.index', compact('collages','dormitories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $collages=Collage::all();
     return view('dormitory.create', compact('collages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request);
        $request->validate([
            'name' => 'required|unique:dormitories,name',
            'code' => 'required|unique:dormitories,code',
            'description' => 'min:2',
        ]);
        Dormitory::create(array_merge($request->all()));
        $request->session()->flash('success', 'New dormitory Created Successfully');
        return redirect(route('dormitory.index'));
  
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
                 $data=Dormitory::find($id);
       //$data->delete();
        return view('dormitory/edit',compact('data'));
  
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
        $academic_years=Dormitory::find($id);;
        $academic_years->update($request->all());
        
       return redirect(route('dormitory.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data=Dormitory::find($id);
        $data->delete();
         return redirect(route('dormitory.index'));
   
    }
     public function search(){
       $search=$_GET['query']; 
       $dormitories=Dormitory::where('name','LIKE','%'.$search.'%')->get();
       $collages=Collage::all();
       return view('dormitory\index',compact('dormitories','collages'));
    }
}

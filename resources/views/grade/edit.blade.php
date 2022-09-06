

@extends('Teacher.index');



@Section('content')

<div class="" id="" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form name="new_branch" method="post" action="{{ url('grade/update',$data->id) }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Grade </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-2 col-form-label"> Student Name</label>
                            <div class="col-10">
                                <input class="form-control" name="fullname" type="text" value="{{$data->fullname}}" id="name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">SID</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$data->sid}}" placeholder="Code"
                                       name="sid" id="code"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">TID</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$data->tid}}" placeholder="Code"
                                       name="tid" id="code"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Course Name</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$data->course}}" placeholder="Course name"
                                       name="course" id="mark"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">CID</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$data->course_id}}" placeholder="Course id"
                                       name="course_id" id=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Mark</label>
                            <div class="col-10">
                               <input class="form-control" type="text" value="{{$data->mark}}" placeholder="mark"
                                       name="mark" id=""/>
                           
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Grade</label>
                            <div class="col-10">
                                 <input class="form-control" type="text" value="{{$data->grade}}" placeholder="Grade"
                                       name="grade" id=""/>
                          
                            </div>
                        </div>
                        
    

                        
                    </div>
                    <div class="modal-footer">
                <button id="close" type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-primary font-weight-bold" >Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endSection




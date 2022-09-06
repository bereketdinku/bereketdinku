
@extends('Teacher.index');



@Section('content')

<div class="" id="" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form name="new_branch" method="post" action="{{ url('assignment/update',$data->id) }}">
               @method('post')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Assesement </h5>
                        
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-2 col-form-label">FULLName</label>
                            <div class="col-10">
                                <input class="form-control" name="name" type="text" value="{{$data->name}}" id="name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">TID</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$data->code}}" placeholder="Code"
                                       name="code" id="code"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">assignment type</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$data->assignment_type}}" placeholder="Code"
                                       name="assignment_type" id=""/>
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">deadline</label>
                            <div class="col-10">
                                <input class="form-control" type="date" value="{{$data->deadline}}" placeholder=""
                                       name="deadline" id=""/>
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">mark</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$data->mark}}" placeholder="Code"
                                       name="" id=""/>
                            </div>
                        </div>
                       
                     
                        
                    </div>
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-primary font-weight-bold" >Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endSection




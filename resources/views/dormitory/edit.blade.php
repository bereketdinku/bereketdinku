@extends('base');

   




@Section('content')

<div class="" id="" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form name="new_branch" method="post" action="{{ url('dormitory/update',$data->id) }}">
               @method('post')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Dormitory </h5>
                        
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-2 col-form-label">Name</label>
                            <div class="col-10">
                                <input class="form-control" name="name" type="text" value="{{$data->name}}" id="name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Code</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$data->name}}" placeholder="Code"
                                       name="code" id="code"/>
                            </div>
                        </div>
                       
                                             <div class="form-group mb-1">
                            <label for="description">Description</label>
                            <textarea placeholder="Description" class="form-control" id="description" name="description"
                                      rows="3"></textarea>
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



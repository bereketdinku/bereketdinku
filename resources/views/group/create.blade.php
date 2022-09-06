@extends('base')

@section('content')

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form name="new_branch" method="post" action="{{ route('group.store') }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Group </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-2 col-form-label">Name</label>
                            <div class="col-10">
                                <input class="form-control" name="name" type="text" value="" id="name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Code</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" placeholder="Code"
                                       name="code" id="code"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Assignment </label>
                            <div class="col-10">
                                <select class="form-control select2" name="assignment_id">
                                    <option value="">Select Assignment</option>
                                    @foreach($assignments as $assignment)
                                        <option value="{{ $assignment->id }}">{{ $assignment->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                     
                        <div class="form-group mb-1">
                            <label for="description">Description</label>
                            <textarea placeholder="Description" class="form-control" id="description" name="description"
                                      rows="3"></textarea>
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
    @endsection
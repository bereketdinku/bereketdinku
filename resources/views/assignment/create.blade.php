


<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form name="new_branch" method="post" action="{{ route('assignment.store') }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Assesment </h5>
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
                            <label for="code" class="col-2 col-form-label">ID NO</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="" placeholder="Code"
                                       name="code" id="code"/>
                            </div>
                        </div>
<div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Course</label>
                            <div class="col-10">
                                <select class="form-control select2" name="course_id">
                                    <option value="">Select Course</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Deadline</label>
                            <div class="col-10">
                                <input class="form-control" type="date" value="" placeholder="Deadline"
                                       name="deadline" id="deadline"/>
                            </div>
                        </div>
                       <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Department</label>
                            <div class="col-10">
                                <select class="form-control select2" name="department">
                                    <option value="">Select Department</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->name }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
<div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Assesmet Type</label>
                            <div class="col-10">
                                <select class="form-control select22" name="assignment_type">
                                    <option value="">Select Course</option>
                                    @foreach($assignment_types as $assignment_type)
                                        <option value="{{ $assignment_type }}">{{ $assignment_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-lg-right">Upload Assignment:</label>
                            <div class="col-lg-10">
                                <div class="uppy" id="kt_uppy_5">
                                    <div class="uppy-wrapper">
                                        <div class="uppy-Root uppy-FileInput-container"><input
                                                class="uppy-FileInput-input uppy-input-control" type="file" name="file"
                                                multiple="" id="kt_uppy_5_input_control" style=""><label
                                                class="uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                for="kt_uppy_5_input_control">Attach files</label></div>
                                    </div>
                                    <div class="uppy-list"></div>
                                    <div class="uppy-status">
                                        <div class="uppy-Root uppy-StatusBar is-waiting" aria-hidden="true" dir="ltr">
                                            <div class="uppy-StatusBar-progress
    " role="progressbar" aria-valuemin="0"
                                                aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div>
                                            <div class="uppy-StatusBar-actions"></div>
                                        </div>
                                    </div>
                                    <div class="uppy-informer uppy-informer-min">
                                        <div class="uppy uppy-Informer" aria-hidden="true">
                                            <p role="alert"> </p>
                                        </div>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Max file size is 1MB and max number of files is 5.</span>
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
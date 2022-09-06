<div class="modal fade" id="staticBackdrops" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="committee" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="post" action="">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Assesment </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label text-lg-right">Upload Assesment:</label>
                        <div class="col-lg-10">
                            <div class="uppy" id="kt_uppy_5">
                                <div class="uppy-wrapper">
                                    <div class="uppy-Root uppy-FileInput-container"><input
                                            class="uppy-FileInput-input uppy-input-control" type="file" name="files[]"
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



                  
                    <div class="form-group row">
                        <label for="code" class="col-2 col-form-label">Students Name</label>
                        <div class="col-10">
                            <select class="form-control select2" name="student_id[]" id="student" multiple required>
                                <optgroup label="select member ">
                                <option value="">Select Course</option>
                                @foreach($assignment_types as $assignment_type)
                                    <option value="{{ $assignment_type }}">{{ $assignment_type }}</option>
                                @endforeach
                            </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="close" type="button" class="btn btn-light-primary font-weight-bold"
                        data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-primary font-weight-bold">Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@section('additional_javascript')
<script>
    // Class definition
    var KTSelect2 = function() {
        // Private functions
        var demos = function() {
            // multi select
            $('.select2').select2({
                placeholder: "Select ",
                width: '100%'
            });
        }
        return {
            init: function() {
                demos();
            }
        };
    }();
    // Initialization
    jQuery(document).ready(function() {
        KTSelect2.init();
    });
</script>
@endsection
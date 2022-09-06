@extends('Teacher.index')

@section('content')
    <div class="card-body p-6">
        <!-- begin: Invoice-->
        <!-- begin: Invoice body-->
        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
            <div class="col-md-12">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Assesment
                            <span class="d-block text-muted pt-2 font-size-sm">All Assesment</span>
                        </h3>
                    </div>
                  

                    <div class="card-toolbar justify-content-left ">
        
                        
                        <!--end::Button-->


                        <form class="form-inline my-2 my-lg-0"type="get"action="{{url('/searchA')}}">
                        <input class="form-control mr-sm-2"name="query"type="search"placeholder="search here">
                        <button class="btn btn-outline-light my-2 my-sm-0"type="submit">Search</button>
                    </form>
                    <a data-toggle="modal" data-target="#staticBackdrop" class="btn btn-primary font-weight-bolder">
        
                            <span class="fa fa-plus"></span> </a>
                        @include('Teacher.upload')
                    
</div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-default">
                            <tr>
                               
                                <th>Name</th>
                                <th>TID</th>
                                <th>Mark</th>
                                <th>Assignment Type</th>
                                <th>Deadline</th>
                               <th>File</th>
                                <th>Department</th>
                                <th>Course Id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php
                            $i = 1;
                            $tprice = 0;
                            $lastprice = 0;
                        @endphp

                        <tbody>
@foreach($assignments as $assignment)
                          
                                <tr>
                                     
                          

                                    <td>
                                       {{ $assignment->fullname}} 
                                    <td>
                                       {{ $assignment->TID}} 
                                    </td>
                                    <td>{{$assignment->mark}}</td>
                                    <td>
                                        {{ $assignment->assignment_type}} 
                                    </td>
                                    <td>
                                      {{ $assignment->deadline}}   
                                    </td>
                                      <td>
                                      {{ $assignment->file}}   
                                    </td>
                                    
                                    <td>
                                        {{ $assignment->department}} 
                                    </td>
                                    <td>
                                        {{ $assignment->course_id}} 
                                           </td>
                                    <td>
                                        <form action="{{route('asses.destroy',$assignment->id)}}"method="post">
                                           

                                          
                                         <a class="btn btn-primary"href="{{url('asses/edit',$assignment->id)}}">Edit</a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"class="btn btn-danger">Delete</button>
                                        </form>


                                       

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $stockrecorduni->links() }} --}}
                </div>
            </div>
        </div>

    </div>
@endsection

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
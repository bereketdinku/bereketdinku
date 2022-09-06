@extends('base');

@section('content')
    <div class="card-body p-6">
        <!-- begin: Invoice-->
        <!-- begin: Invoice body-->
        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
            <div class="col-md-12">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Courses
                            <span class="d-block text-muted pt-2 font-size-sm">All Courses</span>
                        </h3>
                    </div>
                    <div class="card-toolbar justify-content-left ">
                    <form class="form-inline my-2 my-lg-0"type="get"action="{{url('/searchCO')}}">
                        <input class="form-control mr-sm-2"name="query"type="search"placeholder="search here">
                        <button class="btn btn-outline-light my-2 my-sm-0"type="submit">Search</button>
                    </form>
                        <a data-toggle="modal" data-target="#staticBackdrop" class="btn btn-primary font-weight-bolder">
        
                            <span class="fa fa-plus"></span></a>
                        @include('course.create')
                        <!--end::Button-->
                    </div>
                   
                        
                    
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Action</th>
                        
                        </tr>
                        </thead>
                        @php
                            $i=1;
                            $tprice=0;
                            $lastprice=0;
                        @endphp

                        <tbody>

                        @foreach ($courses as $course)

                            <tr>
                                <td>
                                    {{-- {{ ($stockrecorduni->perPage() * $stockrecorduni->currentPage()) - ($stockrecorduni->perPage() - ($loop->index + 1)) }} --}}
                                    {{   $i++}} </td>
                              
                                <td>
                                    {{ $course->name }} 
                                <td>
                                    {{ $course->code }} 
                                </td>
                                <td>
                                   {{ $course->description }} 
                                </td>

                                <td>

                                   
                                    <form action="{{route('course.destroy',$course->id)}}"method="post">
                                                                                  <a href="{{url('course/edit',$course->id)}}"class="btn btn-primary">Edit</a>
                                    

                                             @csrf
                                            @method('DELETE')
                                            <button type="submit"class="btn btn-danger">Delete</button>
                                       </form>
                                
                                </td>
                                
                                     
                                



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
                    placeholder: "select Collage",
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
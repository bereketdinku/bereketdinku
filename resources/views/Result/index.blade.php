@extends('admin.layout.admin')

@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Grade System</h3>
              </div>
              <div class="card-header">
                @foreach ($grades as $grade)
                <h3 class="card-title">{{$grade->fullname}}</h3>
                @endforeach
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  	<th>#</th>
                    <th>CID</th>
                    <th>Course</th>
                    <th>Mark</th>
                    <th>Grade </th>
                    
                  </tr>
                  </thead>
                  @php
                            $i=1;
                            $tprice=0;
                            $lastprice=0;
                        @endphp
                  <tbody>
                  	 @foreach ($grades as $grade)
                  <tr>
                  	 <td>
                                    {{-- {{ ($stockrecorduni->perPage() * $stockrecorduni->currentPage()) - ($stockrecorduni->perPage() - ($loop->index + 1)) }} --}}
                                    {{   $i++}} </td>
                    <td>{{$grade->course_id}}</td>
                    <td>{{$grade->course}}</td>
                    <td>{{$grade->mark}}</td>
                    <td>{{$grade->grade}}</td>
                    <td>X</td>
                  </tr>
                  @endforeach
                   </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            @endSection
@extends('admin.layout.admin')


@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Grade Result</h3>
              </div>
              <div class="card-header">
                @foreach($grades as $grade)
                <h3 class="card-title">{{$grade->fullname}}</h3>
                @endforeach
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                     
                  <tr>
                    
                    <th>Course ID</th>
                    <th>course</th>
                    <th>Mark</th>
                    <th> grade</th>
                  </tr>
                  </thead>
                  <tbody>
                     @foreach ($grades as $grade)
                  <tr>
                    
                    <td>{{$grade->course_id}}
                    </td>
                    <td>{{$grade->course}}</td>
                    <td> {{$grade->mark}}</td>
                    <td>{{$grade->grade}}</td>
                  </tr>
                  @endforeach
                   </tbody>
                  <tfoot>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            @endSection
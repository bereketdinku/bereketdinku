@extends('admin.layout.admin')
@section('title','Dashboard')
@section('content')



@endsection
 /* @foreach ($assignments as $assignment)*/
 {{-- {{ ($stockrecorduni->perPage() * $stockrecorduni->currentPage()) - ($stockrecorduni->perPage() - ($loop->index + 1)) }} --}}
                                        {{ $i++ }}


    {{ $assignment->name }}



     {{ $assignment->code }}


     {{ $assignment->description }}



     {{ $assignment->assignment_type }}

     {{ $assignment->deadline }}


     {{ $assignment->mark }}


      @include('assignment.upload', $assignments)
                                            <!--end::Button-->


@endforeach
                                             @if ($assignment->assignment_type == 'Group')
                                            <a href="{{ route('assignment.group', $assignment->id) }}"
                                                class="btn btn-sm btn-clean btn-success btn-icon" title="Assign Group">
                                                <i class="ki ki-eye"></i>
                                            </a>
                                        @else
                                            All Member Can Do!
                                        @endif
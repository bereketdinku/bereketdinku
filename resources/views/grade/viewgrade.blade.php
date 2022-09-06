
@extends('admin.layout.admin')


@section('content')

 <form class="form-inline my-2 my-lg-0"type="get"action="{{url('/searchGR')}}">
                        <input class="form-control mr-sm-2"name="query"type="search"placeholder="Enter your SID">
                        <button class="btn btn-outline-light my-2 my-sm-0"type="submit">Search</button>
                    </form>

                       @endSection
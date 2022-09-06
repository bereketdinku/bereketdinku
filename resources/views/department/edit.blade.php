//@extends('base');
<!--<div class="card">
	<div class="card-header">update student $data->id}</div>
	@if(session('status'))
	<div class="alert alert-success"role="alert">
		{session{'status'}}
	</div>
   @endif
   <div class="card-body">
   	<form method="post"action="{{ url('department/update',$data->id) }}">

   		@csrf
        @method('post')
   		<div class="form-group row">
   			<label for='name'class='col-md-4-form-label text-md-right'>name</label>
   			<div class="col-md-6">
   				<input id='name'type='text'class="form-control{{$errors->has('name')? 'is-invalid':''}}"name="name" value="{{$data->name}}"required autofocus>
   				@if($errors->has('name'))
   					<span class="invalid-feedback"role='alert'>
   						<strong>{{$errors->first('title')}}</strong></span>@endif</div></div>
   				<div class="form-group row">
   			<label for='code'class='col-md-4-form-label text-md-right'>code</label>
   			<div class="col-md-6">
   				<input id='code'type='text'class="form-control{{$errors->has('code')? 'is-invalid':''}}"name='code' value="{{$data->code}}"required autofocus>
   				@if($errors->has('code'))
   					<span class="invalid-feedback"role='alert'>
   						<strong>{{$errors->first('title')}}</strong></span>@endif</div></div>
   						
   				<div class="form-group row">
   			<label for='description'class='col-md-4-form-label text-md-right'>Description</label>
   			<div class="col-md-6">
   				<input id='description'type='text'class="form-control{{$errors->has('name')? 'is-invalid':''}}"name='description'value="{{$data->description}}" required autofocus>
   				@if($errors->has('description'))
   					<span class="invalid-feedback"role='alert'>
   						<strong>{{$errors->first('title')}}</strong></span>@endif</div>
 <div class="modal-footer">
                        <button id="close" type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-primary font-weight-bold" >Save
                        </button>
                    </div>
   					</div></form>
   				
   </div>
</div>



--->







@Section('content')

<div class="" id="" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form name="new_branch" method="post" action="{{ url('department/update',$data->id) }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Department </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        @method('post')
                        <div class="form-group row">
                            <label for="name" class="col-2 col-form-label">Name</label>
                            <div class="col-10">
                                <input class="form-control" name="name" type="text" value="{{$data->name}}" id="name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-2 col-form-label">Code</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="{{$data->code}}" placeholder="Code"
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
                        <button id="close" type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-primary font-weight-bold" >Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endSection





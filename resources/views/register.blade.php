@extends('base')

@section('content')
<h1>Register new user</h1>
<form method="post" action="{{ url('/register') }}">
	@csrf
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control"placeholder="enter your name">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control"placeholder="enter your email">
	</div>
	<div class="form-group">
		<label>password</label>
		<input type="password" name="password" class="form-control"placeholder="enter your password">
	</div>
	<div class="form-group">
		<label>Contact</label>
		<input type="number" name="contact" class="form-control"placeholder="enter your contact">
	</div>
	<button type="submit" class="btn btn-primary">Register</button></form>
	@stop
<html>
	<head></head>
	


	<body class="login-img3-body">
		<div class="container">
          @if ($message=Session::get('error'))
          <div class="alert alert-danger alert-block">
            <button type="button"class="close" data-dismiss="alert">
            	X
            </button>
             <strong>{{$message}}</strong>
           </div>
           @endif
			@if (count($errors)>0)
             <div class="alert alert-danger">
              <ul>
              	@foreach($errors->all() as $error)
                  <li>{{$error}}</li>
              	@endforeach
              </ul>
             </div>
			@endif
			<form class="login-form" action="{{url('/login')}}" method="post">
				{!! csrf_field()!!}
				<div class="login-wrap">
                <p class="input-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group"><span class="input-group-addon"><i class="icon_profile"></i></span>
                	<input type="text" name="email" class="form-control"placeholder="username"autofocus></div>
                <div class="input-group">
                 <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                 <input type="password" name="password"class="form-control"placeholder="password">

                </div>
                <label class="checkbox">
                	<input type="checkbox"value="remember-me">Remember me
                	<span class="pull-right"><a herf="#">Forgot Password</a></span>
                </label>
                <button class="btn btn-primary btn-lg btn-block"type="submit">login</button>
                <button class="btn btn-primary btn-lg btn-block"type="submit">signUp</button>

				</div>
			</form>
		</div>	
	</body>
</html>
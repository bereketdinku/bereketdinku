@extends('Teacher.index')

@section('content')





<html>
<head>
<style type="text/css">body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</style></head>
<body>
<div class="container">
    <h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action=" storeT " method="post">
				@csrf
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 form-group">
								<legend>First Name</legend>
								<input type="text"name="first" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<legend>Middle Name</legend>
								<input type="text" name="middle" placeholder="Enter Middle Name Here.." class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<legend>Last Name</legend>
								<input type="text" name="last" placeholder="Enter Last Name Here.." class="form-control">
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<legend>Father name</legend>
								<input type="text"name="father" placeholder="Enter Father Name Here.." class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<legend>Father Phone</legend>
								<input type="text" name="father_phone" placeholder="Enter Father Phone Here.." class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<legend>Mother name</legend>
								<input type="text" name="mother" placeholder="Enter Mother name Here.." class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
						<legend>Mother phone</legend>
						<input type="text" name="mother_phone"placeholder="Enter  mother Phone Here.." class="form-control">
					</div>
							<div class="col-sm-4 form-group">
								<fieldset>
									<table>
									<legend for="gender">Gender</legend>
									<table style="width:100%;margi-top:14px;">
										<tr style="border-bottom:1px solid #ccc;">
											<td><label>
												<input type="radio"name="gender"id="gender">
												Male
											</label></td>
											<td>
												<label>
													<input type="radio"name="gender"id="gender">Female
												</label>
											</td>
										</tr></table>
								</fieldset>
							</div>
							<div class="col-sm-4 form-group">
								<legend>Date of Birth</legend>
								<input type="date" name="dob" placeholder="Enter Date of birth Here.." class="form-control">
							</div>
						</div>
							<div class="row">
							<div class="col-sm-4 form-group">
								<legend>Age</legend>
								<input type="text"name="age" placeholder="Enter Age Here.." class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<legend>Email</legend>
								<input type="email" name="email" placeholder="Enter Email Here.." class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<fieldset>
									<table>
									<legend for="gender">Status</legend>
									<table style="width:100%;margi-top:14px;">
										<tr style="border-bottom:1px solid #ccc;">
											<td><label>
												<input type="radio"name="status"id="status">
												Married
											</label></td>
											<td>
												<label>
													<input type="radio"name="status"id="status">Single
												</label>
											</td>
										</tr></table>
								</fieldset>
							</div>
						</div>	
						<div class="row">					
						<div class="col-sm-4 form-group">
							<legend>Address</legend>
							<textarea placeholder="Enter Address Here.." name="address" class="form-control"></textarea>
						</div>
            			<div class="col-sm-4 form-group">
								<legend>Date Of Register</legend>
								<input type="date"name="dor" placeholder="Enter Date og register Here.." class="form-control">
							</div>
							<div class="col-sm-4 form-group">
						<legend> Phone</legend>
						<input type="text" name="phone"placeholder="Enter  phone Here.." class="form-control">
					</div>
					</div>	
						<div class="row">
									
							<div class="col-sm-4 form-group">
								
								<select name="faculity" class="form-control" >
									<option value="0"selected="true" disabled="true">Choose Faculity</option>
								@foreach($collages as $collage)
                 <option value="{{$collage->name}}">{{$collage->name}}</option>
                 @endforeach
								</select>
										
						</div>
								
<div class="col-sm-4 form-group">
								
								<select name="department" class="form-control" >
									<option value="0"selected="true" disabled="true">Choose department</option>
								@foreach($departments as $department)
                 <option value="{{$department->name}}">{{$department->name}}</option>
                 @endforeach
								</select>
										
						</div>
						<div class="col-sm-4 form-group">
								
								<select name="" class="form-control" >
									<option value="0"selected="true" disabled="true">Choose Academic Year</option>
								@foreach($academic_years as $academic_year)
                 <option value="{{$academic_year->id}}">{{$academic_year->name}}</option>
                 @endforeach
								</select>
										
						</div>
						<div class="row">
									
								
						</div>
<div class="row">
					<div class="col-sm-4 form-group">
						<legend>Nationality</legend>
						<input type="text"name="nationality" placeholder="Enter Nationality Here.." class="form-control">
					</div>		
					<div class="col-sm-4 form-group">
						<legend>Country</legend>
						<input type="text" name="country"placeholder="Enter Country Here.." class="form-control">
					</div>	
					</div>
					<button type="submit" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
	</body></html>
	@endsection

 
  

  
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<title>Registration Form</title>
</head>

<body>
<form action="student_register_input.php" method="post">
	<div class="container bg-info">
		<h3>Student Registration Form </h3>
		<div class="row">
			<div class="col-lg-3"> Student ID </div>
			<div class="col-lg-3">
				<input type="text" name="sid" id="sid" class="form-control" required /></div>
			<div class="col-lg-3">First Name</div>
			<div class="col-lg-3">
				<input type="text" name="fn" id="fn" class="form-control" required /> 
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-3">Surname</div> 
			<div class="col-lg-3"> 
				<input type="text" name="sn" id="sn" class="form-control" required/>
			</div> 
			<div class="col-lg-3">Date of Birth</div> 
			<div class="col-lg-3"> 
				<input type="date" name="dob" required id="dob" class="form-control" /> 
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-3">Gender</div> 
			<div class="col-lg-3 form-inline"> 
				<input type="radio" name="gender" value="Male" id="gender_0" required/> Male 
				<input type="radio" name="gender" value="Female" id="gender_1" required/>
			Female </div>
			<div class="col-lg-3">Degree</div> <div class="col-lg-3"> <input type="text" name="degree" id="degree" required class="form-control"/> </div>
		</div>
		</br>
		<div class="row">
			<div class="col-lg-3">Address:</div> 
			<div class="col-lg-3">
				<input type="text" name="address" id="address" class="form-control" required/>
			</div>
			<div class="col-lg-3">Cellphone:</div>
			<div class="col-lg-3">
				<input type="text" name="cellphone" id="cellphone" class="form-control" required/>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-3"> E-mail</div> 
			<div class="col-lg-3">
				<input type="email" name="email" id="email" class="form-control" required/>
			</div>
			<div class="col-lg-3">Department</div>
			<div class="col-lg-3">
				<input type="text" name="dept" id="dept" class="form-control" required />
			</div>
		</div>
	<br/>
	<div class="row">
		<div class="col-lg-4">
			<button class="btn btn-info btn-sm formcontrol" id="button" name="save">Save </button>
		</div>
		<div class="col-lg-4">
			<button class="btn btn-info btn-sm form-control" id="button2" name="open">Open</button>
		</div>
		<div class="col-lg-4">
			<button class="btn btn-info btn-sm form-control" id="button3" name="search">Search</button>
		</div>
	</div>
	<br/>
	</div>
</form>
<script src="bootstrap/js/jquery.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>
	
    <!-- Bootstrap core CSS -->
    <link href="homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="login.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="homepage/css/shop-homepage.css" rel="stylesheet">
	<link href="homepage/css/shop-homepage.css" rel="stylesheet">
	<link href="font-awesome.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	  <div class="row">
	  <div class="col-md-1">
        <a class="navbar-brand" href="index.php">online shopping</a>
        
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<form action="list.php" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search" required>
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
		</button></a>
      </div>
    </div>
  </form>
			  </div>
			  <div class="col-md-1"></div>
			  <div class="col-md-1">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
		</div>
      </div>
    </nav>
	</div>
	<div class="row">
		<div class="col-lg-4"></div>
		<div class="col-lg-8">
		<h3> Registration</h3>	
		
	<hr/>

	<div class="loginFrm">
	<form action="registr.php" method="post" class="form-horizontal">
		<h3>Your Personal Details</h3>
		<div class="control-group">
		<div class="controls">
		<label class="control-label">Title &nbsp;&nbsp;&nbsp;<sup>*</sup></label>
		
		<select name="title" class="span1" name="days">
			<option value="">-</option>
			<option value="1">Mr.</option>
			<option value="2">Mrs</option>
			<option value="3">Miss</option>
		</select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup> </label>
			  <input type="text" name="fname" id="inputFname" placeholder="First Name" required>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			  <input type="text" name="lname" id="inputLname" placeholder="Last Name" required>
		 </div><br/>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <sup>*</sup></label>
		  <input type="email" name="email" placeholder="Email" required>
	  </div>	  <br/>
		<div class="control-group">
		<label class="control-label">Password&nbsp; <sup>*</sup></label>
		  <input type="password" name="password" placeholder="Password" required>
	  </div>
	  <br/>
	  <h3>Your Billing Details</h3>
		<div class="control-group">
			<label class="control-label">Street name&nbsp;&nbsp;<sup>*</sup></label>
			  <input type="text" name="street" placeholder="street name" required>
		</div><br/>
		<div class="control-group">
			<label class="control-label">House NO: &nbsp;&nbsp;&nbsp;<sup>*</sup></label>
			  <input type="text" name="hno" placeholder="House  no:" required>
		</div><br/>
		 <div class="control-group">
			<label class="control-label">CITY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<sup>*</sup></label>
			  <input type="text" name="city" placeholder=" Field name" required>
		</div>
		<br/>
		<div class="control-group">
			<label class="control-label">PINCODE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <sup></sup></label>
			  <input type="text" name="pin" placeholder="PINCODE:" required>
</div>
	  <div class="control-group">
		<div class="controls">
		&nbsp;<input type="submit" name="submitAccount" value="Register" class="exclusive shopBtn" onclick="myFunction()">
		
		</div>
	</div>
	<?php
  //variable declaration
  $fname="";
  $lname="";
  $title="";
  $email="";
  $password="";
  $street="";
  $hno="";
  $city="";
  $pin="";
  $errors=array();
  $epin=1;
  $success=9;
  //connecting database
  $db=mysqli_connect('localhost','root','','online shopping');


  if(isset($_POST['submitAccount']))  //Checking if buttong ic clicked
  {
    $fname=$_POST['fname'];       //getting values for variables
    $lname=$_POST['lname'];
    $title=$_POST['title'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $street=$_POST['street'];
    $hno=$_POST['hno'];
    $city=$_POST['city'];
    $pin=$_POST['pin'];
	
    //checking for empty fields
    if(empty($fname)) {array_push($errors,"fname");}
    if(empty($lname)) {array_push($errors,"lname");}
    if(empty($title)) {array_push($errors,"title");}
    if(empty($email)) {array_push($errors,"email");}
    if(empty($password)) {array_push($errors,"password");}
    if(empty($street)) {array_push($errors,"street");}
    if(empty($hno)) {array_push($errors,"hno");}
    if(empty($city)) {array_push($errors,"city");}
	$query="INSERT INTO REGISTER(FIRST_NAME,LAST_NAME,EMAIL,PASSWORD,STREET_NAME,HOUSE_NO,CITY,PIN) VALUES('$fname','$lname','$email','$password','$street','$hno','$city','$pin');";
	if (mysqli_query($db,$query)) {$success=0;}
	else{
		echo "<script>alert('Existing EMAIL ID')</script>";
	}
            if($success == 0) {
			echo'<script>alert("Your acoount has been registered")
			window.location.href="index.php"
			</script>';
			}
  }
?>
	
	
	</form>
</div>
</div>	
</div>
</br>
	
	  <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white" id="about">
	<br>An website by:</br>
		Mathul paul
		Vinu joy
		Sreehari S
		Vasudev R.
		</p>
		<p class="m-0 text-center text-white">Copyright &copy; ASD LAB 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
  </body>
</html>
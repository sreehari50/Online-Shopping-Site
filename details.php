<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Details</title>
	
    <!-- Bootstrap core CSS -->
    <link href="homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="login.css" rel="stylesheet">
    <!-- Custom styles for this template -->
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
        <a class="navbar-brand" href="index.html">online shopping</a>
        
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<form action="list.php" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search">
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
		<div class="col-lg-3"></div>
			
			<span>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/><?php
			 $p=$_GET['i'];
				  $db=mysqli_connect('localhost','root','','online shopping');
				  $qey = mysqli_query($db,"SELECT * FROM PRODUCT WHERE PID=$p");
				  while($row=mysqli_fetch_array($qey))
				  {
					  $_SESSION['price']=$row['PRICE'];
					  $_SESSION['bname']=$row['PNAME'];
			echo '<div class="span5">
			<img src="'.$row['IMG'].'" alt="" style="width:100%">
			</span></img>
			</div>
				 <div class="span7">
				<br><h3><b>'.$row['PNAME'].'</b></h3>
				<hr class="soft"/>
				  <div class="control-group">
					<label class="control-label"><span><b>'.$row['PRICE'].'</b></span></label>
					<br/>
					<label class="control-label"><span><b>'.$row['BRAND'].'</b></span></label>
					<div class="controls">
					</div>
				  </div>
				  <div class="control-group">
				  </div>
				  <br/>
				  <br/>
				  <form method="post" action="validation.php">
				  <input type="number" name="qty" class="span6" placeholder="Qty." required>
				  </br>
				  </br>
				  <input type="submit" value="placeorder" name="order" class="shopBtn">
				  </form>
				  
				<h4>Product Information</h4>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">Color:</td><td class="techSpecTD2">'.$row['COLOR'].'</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Usage:</td><td class="techSpecTD2">'.$row['USES'].'</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Brand:</td><td class="techSpecTD2">'.$row['BRAND'].'</td></tr>
				</tbody>
				</table>
			</div>
				  </div>';
				  }
				  ?>
				  

	
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
	<script src="login.js"></script>
  </body>

</html>

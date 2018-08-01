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

    <title>Home Page</title>
	
    <!-- Bootstrap core CSS -->
    <link href="homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="login.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="homepage/css/shop-homepage.css" rel="stylesheet">
	
  </head>

  <body>

    <!-- Navigation -->
	
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
	  <div class="row">
	  <div class="col-md-1">
        <a class="navbar-brand" href="index.html">KAIMA CART</a>
        
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<form action="list.php" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search" required>
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search" ></i>
		</button></a>
      </div>
    </div>
  </form>
  <script>
			  document.getElementById("logout").style.visibility = "hidden";</script>
			  </div>
			  <div class="col-md-1"></div>
			  <div class="col-md-1">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">i
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
           <div id ="logout"> <li class="nav-item">
              <a class="nav-link" href="admin/pages/">Admin</a>
			</div>
		   </li>
          </ul>
        </div>
		</div>
      </div>
    </nav>
	</div>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- /.col-lg-3 -->

        <div class="col-lg-12">
		<div class="row">
		<div class="col-sm-8">
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/bna.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
			</div>
			<div class="col-sm-4">
			<br></br>
			<div class="container">
			<div class="row">
			<div class="col-md-12 col-md-offset-4">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-sm-6">
								<a href="#login-form-link" class="active" >Login</a>
							</div>
							<div class="col-sm-6">
								<a href="registr.php" >Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="index.php" method="post" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Email id" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
										<div class="col-sm-3"></div>
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
							</div>	
								<?php
			$_SESSION['authuser']=0;
	  $db=mysqli_connect('localhost','root','','online shopping');
	 if(isset($_POST['login']))
	 {
	$uname=$_POST['username'];
	 $password=$_POST['password'];
	$query="SELECT * FROM REGISTER WHERE EMAIL='$uname' AND PASSWORD='$password'";
	$res = mysqli_query($db,$query);
		$count=mysqli_num_rows($res);
	if ($count==1) {
		$_SESSION['authuser']=1;
		$_SESSION['uname']=$uname;
		echo'<script>
			  document.getElementById("logout").style.visibility = "visible";</script>';
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>You are logged in</b>";
} else {
    echo "<b>&nbsp;&nbsp;&nbsp;Invalid username and password</b>";
	$_SESSION['authuser']=0;
	}
	 }
	 ?>
	 </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
			</div>
			</div>
          
		  <div class="row">
		  <div class= "col-lg-12"><h2>OUR TRENDING PRODUCTS OF THE DAY</h3>
		  </div>
		  </div>
		  <div class="row">
		  <?php
			$db=mysqli_connect('localhost','root','','online shopping');
		  $qey = mysqli_query($db,"SELECT * FROM PRODUCT WHERE RATING>=4.5");
		  while($row=mysqli_fetch_array($qey))
		  {
			  $_SESSION['pid']=$row['PID'];
           echo '<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="details.php?i='.$row['PID'].'">	
				<img class="card-img-top" src="'.$row['IMG'	].'"></a>
                <div class="card-body">
                  <h4 class="card-title"><a href="details.php?i='.$row['PID'].'">
                    '.$row['PNAME'].'
                 </h4></a>
                  <h5>RS.
				  '.$row['PRICE'].'
				  </h5>
				  '.$row['BRAND'].'
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>';
		  }
            
			?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
	
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product list</title>
	
    <!-- Bootstrap core CSS -->
    <link href="homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="login.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="homepage/css/shop-homepage.css" rel="stylesheet">
	
  </head>

  <body>
	<?php
	if(($_POST['search'])==NULL)
	{
		header('location: index.php');
	}
	?>
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
      <input type="text" class="form-control" placeholder="Search" name="search" required>
      <div class="input-group-btn">
        <button class="btn btn-default" name="ser" type="submit"><i class="glyphicon glyphicon-search"></i></button>
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
	<br></br>
	<div class="container">
	<div class="row">
	<div class="col-lg-3">
	<h2 class="my-4">Sort by</h2>
          <div class="radio">
		  <form action="list.php" method="post">
  <label><input type="radio" name="optradio" value='pop' checked>Popularity</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value='low'>Low to High</label>
</div>
<div class="radio disabled">
  <label><input type="radio" name="optradio" value='high'>High to Low</label>
</div>
	</div>
	</form>
	<div class="col-lg-9">
		<div class="row">
		<?php
		$s=" ";
		$op='pop';
		  $db=mysqli_connect('localhost','root','','online shopping');
		  $s=$_POST['search'];
		  if(isset($_POST['optradio']))
		  { $op = $_POST['optradio'];}
		  if($op == 'pop')
		  {
			  $qey = mysqli_query($db,"SELECT * FROM `product` WHERE PNAME LIKE '%$s%' OR COLOR LIKE '%$s%' OR BRAND LIKE '%$s%' OR USES LIKE '%$s%' ORDER BY RATING");
		  }
		  else if($op == 'low')
		  {
			 $qey = mysqli_query($db,"SELECT * FROM `product` WHERE PNAME LIKE '%$s%' OR COLOR LIKE '%$s%' OR BRAND LIKE '%$s%' OR USES LIKE '%$s%' ORDER BY PRICE ASC"); 
		  }
		  else if($op == 'high')
		  {
			 $qey = mysqli_query($db,"SELECT * FROM `product` WHERE PNAME LIKE '%$s%' OR COLOR LIKE '%$s%' OR BRAND LIKE '%$s%' OR USES LIKE '%$s%' ORDER BY PRICE DESC"); 
		  }
		  else{
		  $qey = mysqli_query($db,"SELECT * FROM `product` WHERE PNAME LIKE '%$s%' OR COLOR LIKE '%$s%' OR BRAND LIKE '%$s%' OR USES LIKE '%$s%'");}
		  $count=mysqli_num_rows($qey);
		  if($count==0){echo"<h1>No results found</h1>";}
		  else{
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
                  <h5>Rs.
				  '.$row['PRICE'].'
				  </h5>
				  '.$row['BRAND'].'
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>';
		  }}
            
			
            /*<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="details.php"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="details.html">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Three</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
	
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Four</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
			<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
			<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
			<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
			<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
			<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
			<div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item One</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Six</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
            
            </div>
			</div>
          </div>
		  </div>*/?>
          <!-- /.row -->
		  </div>
        </div>
		
        <!-- /.col-lg-9 -->
		
		</div>
      </div>
      <!-- /.row -->

    </div>
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

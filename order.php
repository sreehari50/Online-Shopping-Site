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
      <input type="text" class="form-control" placeholder="Search" name="search" required>
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search" ></i>
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
	<h2 align="center">REVIEW YOUR ORDER
	</h2>
			<?php
			$bid=$_SESSION['bid'];
			$db=mysqli_connect('localhost','root','','online shopping');
			//$qey = mysqli_query($db,"SELECT * FROM BOOKING B WHERE PID=$pid");
			$res=mysqli_query($db,"SELECT BNAME,QTY,BPRICE FROM booking B WHERE BID=$bid");
			while($row=mysqli_fetch_array($res))
			{
			echo '<div class="row">
		<div class="col-lg-3"></div>
			<div class="span5">
			<span>
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			</span>
			</div>
			<div class="span7">
				<br><h3>'.$row['BNAME'].'</h3>
				<hr class="soft"/>
				
				<form action="order.php" method="post" class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label">PRICE:<span>'.$row['BPRICE'].'</span></label>
					<div class="controls">
					<input type="number" name="qty" class="span6" placeholder="'.$row['QTY'].'">
					</div>
				  </div>
				  <br/>
				  <br/>
				  <div class="control-group">
				  </div>
				  <br/>
				  <br/>
			  <input type="submit" name="update" value="update order" class="shopBtn"><span class=" icon-shopping-cart"></span>
			   <input type="submit" name="delete" value="delete order" class="shopBtn">
				  </form>
				  <br/>
				  <br/><br/><br/><br/><br/>
				  <a href ="index.php"><h3 align="center">Keep Shopping</h3></a>
			</div>
			</div>
			'; }
					if(isset($_POST['update']))
					{
						$q=$_POST['qty'];
						$query=mysqli_query($db,"UPDATE BOOKING SET QTY=$q WHERE BID=$bid");
						$qu=mysqli_query($db,"UPDATE BOOKING SET BPRICE=BPRICE*$q WHERE BID=$bid");
						if($query)
						{
							echo '<script>
    alert("Your order has been updated");
</script>';
			header("Refresh:0");
						}
						else 
						{echo "<h1>Enter new quantity</h1>";}
					} 
					if (isset($_POST['delete']))
					{
						$res=mysqli_query($db,"DELETE FROM BOOKING WHERE BID=$bid");
					echo '<script>
						alert("Your order has been deleted");
						window.location.href="index.php";
					</script>';
						}
					?>
	 <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white" id="about">
	<br>A website by:</br>
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

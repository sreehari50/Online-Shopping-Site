<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if($_SESSION['authuser']!=1)
					  {
					header('location: index.php');
					  }
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i>MODIFY</a>
							<ul class="nav-nav-second-level">
							<li>
                                    <a href="forms.php?i=1">INSERT</a>
                                </li>
								<li>
                                    <a href="forms.php?i=2">UPDATE</a>
                                </li>
								<li>
                                    <a href="forms.php?i=3">DELETE</a>
                                </li>
							</ul>
                        </li>
						<li>
						<a href="forms.html"><i class="fa fa-table fa-fw"></i>VIEW ALL</a>
						<ul class="nav-nav-second-level">
							<li>
                                    <a href="tables.php?i=1">VIEW REGISTERED USERS</a>
                                </li>
								<li>
                                    <a href="tables.php?i=2">VIEW BOOKED PRODUCTS</a>
                                </li>
								<li>
                                    <a href="tables.php?i=3">VIEW ALL PRODUCTS</a>
                                </li>
							</ul>
						</li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		</div>
		</div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<?php
								$db=mysqli_connect('localhost','root','','online shopping');
								if($_GET['i']==1)
								{
                                    echo '<form role="form" action="forms.php?i='.$_GET['i'].'" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>PRODUCT NAME</label>
                                            <input type="text"name="pname" class="form-control" placeholder="Enter text" required>
                                        </div>
										<div class="form-group">
                                            <label>ENTER price</label>
                                            <input type="text"name="price" class="form-control" placeholder="Enter text" required>
                                        </div>
										<div class="form-group">
                                            <label>Color</label>
                                            <input type="text" name="color" class="form-control" placeholder="Enter text" required>
                                        </div>
										<div class="form-group">
                                            <label>USES</label>
                                            <input type="text" name="uses" class="form-control" placeholder="Enter text" required>
                                        </div>
										<div class="form-group">
                                            <label>BRAND</label>
                                            <input type="text" name="brand" class="form-control" placeholder="Enter text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Choose image</label>
                                            <input type="file" name="fileToUpload">
                                        </div>
                                        <div class="form-group">
                                            <label>RATING</label>
                                            <input type="text" name="rate" class="form-control" placeholder="RATE" required>
                                        </div>
                                        <input type="submit" name="insert" value="INSERT" class="btn btn-default">
                                    </form>';?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    <!-- /#wrapper -->';
	<?php
if(isset($_POST['insert']))
{
$pname=$_POST['pname'];
$price=$_POST['price'];
$color=$_POST['color'];
$uses=$_POST['uses'];
$brand=$_POST['brand'];
$rate=$_POST['rate'];
$target_dir = "C:/wamp64/www/ASD LAB/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$res=mysqli_query($db,"INSERT INTO PRODUCT (PNAME,PRICE,COLOR,USES,BRAND,IMG,RATING) VALUES('$pname',$price,'$color','$uses','$brand','$c',$rate)");
		echo '<h3 align="center">Image uploaded</h3>';
		$c=substr($target_file,22);
   } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
if($res)
{
	echo '<h3 align="center">PRODUCT INSERTED</h3>';
}
else{
	echo mysqli_error($db);
	echo '<h3 align="center">ENTER VALID DETAILS</h3>';
}
}}
if($_GET['i']==2)
{	
	include 'update.php';
	if(isset($_POST['updpid']))
	{
	$pid=$_POST['pid'];
	$res=mysqli_query($db,"SELECT * FROM PRODUCT WHERE PID=$pid");
	while($row=mysqli_fetch_array($res))
	{
	echo '<form role="form" action="forms.php?i='.$_GET['i'].'" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>PRODUCT ID</label>
                                            <input type="text"name="pid" value="'.$row['PID'].'" class="form-control" placeholder="Enter only Number" required>
                                        </div>
										<div class="form-group">
                                            <label>PRODUCT NAME</label>
                                            <input type="text"name="pname" value="'.$row['PNAME'].'" class="form-control" placeholder="Enter text" required>
                                        </div>
										<div class="form-group">
                                            <label>ENTER price</label>
                                            <input type="text"name="price" value="'.$row['PRICE'].'" class="form-control" placeholder="Enter text" required>
                                        </div>
										<div class="form-group">
                                            <label>Color</label>
                                            <input type="text" name="color" value="'.$row['COLOR'].'" class="form-control" placeholder="Enter text" required>
                                        </div>
										<div class="form-group">
                                            <label>USES</label>
                                            <input type="text" name="uses" value="'.$row['USES'].'" class="form-control" placeholder="Enter text" required>
                                        </div>
										<div class="form-group">
                                            <label>BRAND</label>
                                            <input type="text" name="brand" value="'.$row['BRAND'].'" class="form-control" placeholder="Enter text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>RATING</label>
                                            <input type="text" value="'.$row['rating'].'" name="rate" class="form-control" placeholder="RATE" required>
                                        </div>
                                        <input type="submit" name="update" value="UPDATE" class="btn btn-default">
                                    </form>';

	}
	}
	if(isset($_POST['update']))
	{
	$pid=$_POST['pid'];
$pname=$_POST['pname'];
$price=$_POST['price'];
$color=$_POST['color'];
$uses=$_POST['uses'];
$brand=$_POST['brand'];
$rate=$_POST['rate'];
		$res=mysqli_query($db,"UPDATE PRODUCT SET PNAME='$pname',PRICE=$price,COLOR='$color',USES='$uses',BRAND='$brand',rating=$rate WHERE PID=$pid");
		if($res)
		{echo '<script>alert("PRODUCT has been updated")
			</script>';}
		else{
			echo '<script>alert("ENter valid details")
			</script>';}
			echo mysqli_error($db);
}}
if($_GET['i']==3)
{	
	include 'delete.php';
	if(isset($_POST['delete']))
	{
	$pid=$_POST['pid'];
	$res=mysqli_query($db,"SELECT * FROM PRODUCT WHERE PID=$pid");
	while($row=mysqli_fetch_array($res))
	{
	echo '<form role="form" action="forms.php?i='.$_GET['i'].'" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>PRODUCT ID</label>
                                            <input type="text"name="pid" class="form-control" value="'.$row['PID'].'">
                                        </div>
										<div class="form-group">
                                            <label>PRODUCT NAME</label>
                                            <input type="text"name="pname" class="form-control" placeholder="'.$row['PNAME'].'">
                                        </div>
										<div class="form-group">
                                            <label>ENTER price</label>
                                            <input type="text"name="price" class="form-control" placeholder="'.$row['PRICE'].'">
                                        </div>
										<div class="form-group">
                                            <label>Color</label>
                                            <input type="text" name="color" class="form-control" placeholder="'.$row['COLOR'].'">
                                        </div>
										<div class="form-group">
                                            <label>USES</label>
                                            <input type="text" name="uses" class="form-control" placeholder="'.$row['USES'].'">
                                        </div>
										<div class="form-group">
                                            <label>BRAND</label>
                                            <input type="text" name="brand" class="form-control" placeholder="'.$row['BRAND'].'">
                                        </div>
                                        <div class="form-group">
                                            <label>RATING</label>
                                            <input type="text" name="rate" class="form-control" placeholder="'.$row['rating'].'">
                                        </div>
                                        <input type="submit" name="deleted" value="DELETE" class="btn btn-default">
                                    </form>';

	}
	}
	if(isset($_POST['deleted']))
	{
		$pid=$_POST['pid'];
		$res=mysqli_query($db,"DELETE FROM PRODUCT WHERE PID=$pid");
		if($res)
		{echo '<script>alert("PRODUCT has been DELETED")
			</script>';}
		else{
			echo '<script>alert("Some thing went wrong")
			</script>';}
			echo mysqli_error($db);
}}
?>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

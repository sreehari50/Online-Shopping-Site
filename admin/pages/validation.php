<?php
session_start();
$db=mysqli_connect('localhost','root','','online shopping');
$_SESSION['authuser']=0;
if(isset($_POST['login']))
	 {
	$uname=$_POST['email'];
	 $password=$_POST['password'];
	$query="SELECT * FROM login WHERE USERNAME='$uname' AND PASSWORD='$password'";
	$res = mysqli_query($db,$query);
		$count=mysqli_num_rows($res);
	if ($count==1) {
		$_SESSION['authuser']=1;
		$_SESSION['uname']=$uname;
		header('location: home.php');
} else {
    header('location: index.php');
	$_SESSION['authuser']=0;
	}
	 }
	 ?>
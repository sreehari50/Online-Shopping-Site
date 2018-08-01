<?php
session_start();
if(isset($_POST['order']))
				  {
					  if($_SESSION['authuser']==1)
					  {
				$db=mysqli_connect('localhost','root','','online shopping');
				$res=mysqli_query($db,"SELECT CID FROM REGISTER WHERE EMAIL='".$_SESSION['uname']."'");
				$pid=$_SESSION['pid'];
				$qty=$_POST['qty'];
				$price=$_SESSION['price'];
				$name=$_SESSION['bname'];
				while($row=mysqli_fetch_array($res))
				{
					$c=$row['CID'];
				}
				$qey=mysqli_query($db,"INSERT INTO BOOKING (CID,PID,BNAME,QTY,BPRICE) VALUES ($c,$pid,'$name',$qty,$qty*$price)");
				$res=mysqli_query($db,"SELECT BID FROM BOOKING");
				while($row=mysqli_fetch_array($res))
				{
					$_SESSION['bid']=$row['BID'];
				}
						echo "<script>
alert('Thanks for your order order placed');
window.location.href='order.php';
</script>";

					  }
					  else {
						  echo "<script>
	alert('You must login first');
	window.location.href='index.php';
</script>";
					  }
				  }
	?>
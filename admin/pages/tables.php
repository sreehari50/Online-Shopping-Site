<!DOCTYPE html>
<?php
session_start();
if($_SESSION['authuser']!=1)
					  {
						  header('location: index.php');
					  }
?>
<html lang="en">

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

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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
        <!-- Navigation -->
        <div id="wrapper">

        <!-- Navigation -->
		
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
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i>MODIFY</a>
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
                                    <a href="tables.php?i=2">VIEW REGISTERED USERS</a>
                                </li>
								<li>
                                    <a href="tables.php?i=1">VIEW BOOKED PRODUCTS</a>
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
                    <h1 class="page-header">DETAILS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<?php
						$db=mysqli_connect('localhost','root','','online shopping');
								$i=$_GET['i'];
								if($i==1)
								{
                            echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>BID</th>
                                        <th>PID</th>
                                        <th>FIRST_NAME</th>
                                        <th>PRODUCT NAME</th>
                                        <th>QTY</th>
										<th>PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>';
							
							$res=mysqli_query($db,"SELECT * FROM BOOKING B,REGISTER R WHERE B.CID=R.CID");
							while($row=mysqli_fetch_array($res))
							{  echo '<tr class="odd gradeX">
                                        <td>'.$row['BID'].'</td>
                                        <td>'.$row['PID'].'</td>
                                        <td>'.$row['FIRST_NAME'].'</td>
										<td>'.$row['BNAME'].'</td>
                                        <td>'.$row['QTY'].'</td>
                                        <td>'.$row['BPRICE'].'</td>
                                    </tr>';
							}
								}
								else if($i==2)
								{
									echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>CID</th>
                                        <th>FIRST NAME</th>
                                        <th>LAST NAME</th>
                                        <th>EMAIL</th>
                                        <th>PASSWORD</th>
										<th>STREET NAME</th>
										<th>HOUSE NO</th>
										<th>CITY</th>
										<th>PIN</th>
                                    </tr>
                                </thead>
                                <tbody>';
								
							$res=mysqli_query($db,"SELECT * FROM REGISTER");
							while($row=mysqli_fetch_array($res))
							{  echo '<tr class="odd gradeX">
                                        <td>'.$row['CID'].'</td>
                                        <td>'.$row['FIRST_NAME'].'</td>
                                        <td>'.$row['LAST_NAME'].'</td>
										<td>'.$row['EMAIL'].'</td>
                                        <td>'.$row['PASSWORD'].'</td>
										<td>'.$row['STREET_NAME'].'</td>
										<td>'.$row['HOUSE_NO'].'</td>
										<td>'.$row['CITY'].'</td>
                                        <td>'.$row['PIN'].'</td>
                                    </tr>';
							}
								}
								if($i==3)
								{
                            echo '<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>PID</th>
                                        <th>PRODUCT NAME</th>
                                        <th>PRICE</th>
                                        <th>COLOR</th>
                                        <th>USES</th>
										<th>BRAND</th>
										<th>IMAGE Location</th>
										<th>RATING</th>
                                    </tr>
                                </thead>
                                <tbody>';
							
							$res=mysqli_query($db,"SELECT * FROM PRODUCT");
							while($row=mysqli_fetch_array($res))
							{  echo '<tr class="odd gradeX">
                                        <td>'.$row['PID'].'</td>
                                        <td>'.$row['PNAME'].'</td>
                                        <td>'.$row['PRICE'].'</td>
										<td>'.$row['COLOR'].'</td>
                                        <td>'.$row['USES'].'</td>
                                        <td>'.$row['BRAND'].'</td>
										<td>'.$row['IMG'].'</td>
										<td>'.$row['rating'].'</td>
                                    </tr>';
							}
								}
								?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>

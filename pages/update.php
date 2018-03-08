<?php
  session_start();
  require ('../include/db.php');
  if(isset($_SESSION['email']) && isset($_SESSION['logged_in']))
  {
      /*if($_SESSION['username']!='admin')
      {
        $message = "You are not authorized to edit employee details!";
        echo "<script>alert('$message');</script>";
        header('Refresh:0;url=home.php');
      }*/
	  $id=$_GET['id'];
	  $query1="select * from pregnant_details where id='$id'";
	  $result=mysqli_query($con,$query1);

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Employee</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../dist/css/skins/skin-purple.min.css">

        <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition skin-purple layout-boxed sidebar-mini">
        <div class="wrapper">
            <?php
            require ('../include/dashboard.php');
        ?>



                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>Womens Details
                        <!-- <small>Control panel</small> -->
                    </h1>
												<ul class="list-inline" >
							<li><a href="update.php?id=<?php echo $id; ?>" class="active">womens details</a></li>
							<li><a href="update_medi1.php?id=<?php echo $id; ?>">medical record1</a></li>
							<li><a href="updateMedi2.php?id=<?php echo $id; ?>">medical record2</a></li>
							<li><a href="updated_delivery.php?id=<?php echo $id; ?>">delivery details</a></li>

							</ul>

                       <!-- <ol class="breadcrumb">
                            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Add New Member</li>

                        </ol>-->
                    </section>

                    <!-- Main content -->
                    <section class="content">


                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Enter the details of the new woman</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
							<?php
							while($row=mysqli_fetch_array($result))
							{
								?>
                            <form action="insertmember.php" method="POST" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group col-xs-4">
                                            <label for="id">ID</label>
                                            <input type="number" class="form-control"  value="<?php echo $row['ID']; ?>" name="id" readonly />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="full_name">Full Name</label>
                                            <input type="text" class="form-control" value="<?php echo $row['full_name']; ?>" name="full_name" readonly >
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="husband_name">Husband Name</label>
                                            <input type="text" class="form-control " value="<?php echo $row['husband_name']; ?>"  name="husband_name" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="kycimg">KYC Image</label>
                                        <img  id="kycimg" name="kycimg"  height="200" width="150" src="<?php echo $row['kycimg']; ?>"  />
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-lg-4">
                                            <label>Expected Delivery Date</label><br>
                                            <input class="form-control" value="<?php echo $row['dod']; ?>" type="date" name="dod" readonly />

                                        </div>


                                        <div class="form-group col-xs-4">
                                            <label for="age">Age:</label>
                                            <input value="<?php echo $row['age']; ?>" type="number" class="form-control " name="age" readonly >
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control " value="<?php echo $row['phone']; ?>" name="phone" readonly >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="images">Capture Person Image</label>
                                        <img id="images" name="images" height="200" width="150"src="<?php echo $row['taluka']; ?>" />
                                    </div>
										<div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="Taluka">Taluka</label>
                                            <input type="text" class="form-control " value="<?php echo $row['taluka']; ?>" name="phone" readonly>
                                        </div>
                                    </div>
									<div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="cluster">Cluster</label>
                                            <input type="text" class="form-control " value="<?php echo $row['cluster']; ?>" name="phone" readonly>
                                        </div>
                                    </div>

                                   <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="cluster">Village</label>
                                            <input type="text" class="form-control " value="<?php echo $row['village']; ?>" name="phone" readonly>
                                        </div>
                                    </div>







                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

<?php
							}
?>


                                    <!-- form end -->
                            </form>
                            </div>
                    </section>
                    <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->

                    <!-- /.content -->
                </div>


                <?php
        include  ('../include/footer.php');
    ?>





                    <!-- ./wrapper -->

                    <!-- jQuery 3 -->
                    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
                    <!-- jQuery UI 1.11.4 -->
                    <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
                    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                    <script>
                        $.widget.bridge('uibutton', $.ui.button);
                    </script>
                    <!-- Bootstrap 3.3.7 -->
                    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

                    <!-- Bootstrap WYSIHTML5 -->
                    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
                    <!-- Slimscroll -->
                    <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
                    <!-- FastClick -->
                    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
                    <!-- AdminLTE App -->
                    <script src="../dist/js/adminlte.min.js"></script>
                    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                    <script src="../dist/js/pages/dashboard.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <script src="../dist/js/demo.js"></script>

    </body>

    </html>


    <?php
}
else
{
    $message = "Please login to access this page!";
    echo "<script>alert('$message');</script>";
    header('Refresh:0;url=../index.php');
}
?>

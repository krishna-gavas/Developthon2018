<?php
  session_start();
  if(isset($_SESSION['email']) && isset($_SESSION['logged_in']))
  {
     
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Engagement</title>
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
                        <h1>Visit Details
                        <!-- <small>Control panel</small> -->
                    </h1>
                        <ol class="breadcrumb">
                            <li><a href="home.php"><i class="fa fa-dashboard"></i>Home</a></li>
                            <li class="active">Add Employee</li>

                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">


                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Fill visit Details</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form action="insert_engagement.php" method="POST" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group col-xs-4">
                                        <input type="hidden" class="form-control " radonly value="<?php echo $_GET['id'] ?>" name="id">
                                            <label for="topic">Topic</label>
                                            <select class="form-control" name="topic" >
											
											<option value="Registration with Anganwadi and Asha">Registration with Anganwadi and Asha</option>
											<option value="Importance of 3 ANC Checkups">Importance of 3 ANC Checkups</option>
											<option value="TT Injection">TT Injection</option>
											<option value="Iron Tablets">Iron Tablets</option>
											<option value="Nutritious Food">Nutritious Food</option>
											<option value="High Risk Pregnancy">High Risk Pregnancy</option>
											<option value="Preparation for Delivery">Preparation for Delivery</option>
											<option value="Institutional Delivery">Institutional Delivery</option>
											<option value="Signs of Danger Post Delivery">Signs of Danger Post Delivery</option>
											<option value="New Born Care">New Born Care</option>
											</select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="high_risk">High Risk</label>
                                            <select  class="form-control " name="high_risk">
											<option value="yes">yes</option>
											<option value="no">no</option>
											</select>
											
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="Criteria">Criteria</label>
                                            <select  class="form-control " name="criteria">
											<option value="Below 40KG (Weight)" >Below 40KG (Weight)</option>
											<option value="BP Below 100/60" >BP Below 100/60</option>
											<option value="BP Above 140/100" >BP Above 140/100</option>
											<option value="HB Below 8" >HB Below 8</option>
											</select>


                                        </div>
                                    </div>
										<div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="symptoms">Any Other symptoms</label>
                                            <textarea  class="form-control" name="symptoms">
										
											</textarea>


                                        </div>
                                    </div>
										<div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="Time_spent">Time Spent</label>
                                             <select  class="form-control " name="time_spent">
											<option value="15 Mins">15 Mins</option>
											<option value="15 - 30 Mins">15 - 30 Mins</option>
											<option value="30 - 45 Mins">30 - 45 Mins</option>
											
											</select>
											</div>
                                    </div>



                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>




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

<?php
  session_start();
  if(isset($_SESSION['email']) && isset($_SESSION['logged_in']))
  {
      /*if($_SESSION['username']!='admin')
      {
        $message = "You are not authorized to edit employee details!";
        echo "<script>alert('$message');</script>";
        header('Refresh:0;url=home.php');
      }*/
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
                        <h1>Medi Care
                        <!-- <small>Control panel</small> -->
                    </h1>
                        <ol class="breadcrumb">
                            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">medical info</li>

                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">


                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Enter the details </h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form action="carry.php" method="POST" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group col-xs-4">
                                            <label for="id">ID</label>
                                            <input type="number" class="form-control " readonly value="<?php echo $_SESSION['id'] ?>" name="id">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="hb">HB(hemo globin)</label>
                                            <input required type="number" step="any" class="form-control " name="hb">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="bp">BP(Blood prresure)</label>
                                            <input  type="text" class="form-control " name="bp">
                                        </div>
                                    </div>
                                    <div class="row">
									<div class="form-group col-xs-4">
                                            <label for="weight">Weight</label>
                                            <input required type="number" class="form-control " name="weight">
                                        </div>
                                    
										
									
                                        <div class="col-md-3 form-group">
                                            <label>Urine Test</label><br>
                                            <select name="urine" />
                                            <option value=''>Select option</option>
                                            <option value='yes'>Yes</option>
                                            <option value='no'>No</option>
                                            
                                            
                                            </select>
                                        </div>
                                    </div>	
                                   

                                        <div class="row">
                                    <div class="form-group">

                                        <div class="col-lg-4">
                                            <label>First Scaning Date</label><br>
                                            <input required type="date" name="fd" />

                                        </div>
                                        
   

                                        <div class="col-lg-4">
                                            <label>Second Scaning Date</label><br>
                                            <input required type="date" name="sd" />

                                        </div>
        </div>
                                    </div>

                                    



                                    <br><br><br><br>



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

<?php
  session_start();
/*  if(isset($_SESSION['email']) && isset($_SESSION['logged_in']))
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
                        <h1>Add Member
                        <!-- <small>Control panel</small> -->
                    </h1>
                        <ol class="breadcrumb">
                            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Add New Member</li>

                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">


                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Enter the details of the new woman</h3>
                            </div>

                            <div class="col-lg-12">
                              <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3847.3108168331732!2d75
                              .10756284989657!3d15.359644189270258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1517598272958"
                               frameborder="0" style="border:0" allowfullscreen></iframe></p>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form action="insertother_info.php" method="POST" enctype="multipart/form-data">

                              <button type="button" name="button" onclick="getLocation()">Get Location</button>

                              <div id="output"></div>
                              <input type="number" step="any" name="latitude" id="latitude" />
                              <input type="number" step="any" name="longitude" id="longitude" >

                                <script>
                                    var x = document.getElementById('output');

                                    function getLocation(){
                                      if (navigator.geolocation) {

                                        navigator.geolocation.getCurrentPosition(showPosition);
                                      }
                                      else{
                                        alert("Not supporting");
                                      }
                                    }

                                    function showPosition(position){

                                        document.getElementById('latitude').value = position.coords.latitude;
                                        document.getElementById('longitude').value = position.coords.longitude;

                                    /*    var locAPI = "http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","
                                        +position.coords.longitude+"&sensor=true"

                                        $.get = ({
                                          url : locAPI,
                                          success : function(data){
                                            console.log(data);
                                            x.innerHTML = data.results[0].address_componenets[4].long_name;
                                          }
                                        });

                                    */
                                    }

                                </script>

                              </div>
                                <div class="box-body">
                                  <div class="row">
                                      <div class="form-group col-xs-4">
                                          <label for="username">Name Of The Field Facilitator</label>
                                          <input type="text" value="<?php echo $_SESSION['name'] ?>" readonly class="form-control" name="username">
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class="form-group col-xs-4">
                                          <label for="remarks">Remarks</label>
                                          <textarea rows="4" cols="50" class="form-control" name="remarks">
                                          </textarea>
                                      </div>
                                  </div>


                                    <br><br>



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



    <!-- jQuery for location -->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
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
/*}
else
{
    $message = "Please login to access this page!";
    echo "<script>alert('$message');</script>";
    header('Refresh:0;url=../index.php');
}*/
?>

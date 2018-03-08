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
        <title>Search Bill</title>
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
                        <h1>Search Members

                    </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Search Members</li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Enter the details of the member you want to search for</h3>
                            </div>

                            <div class="box-body">
                                <form method="post">
                                    <div class="row">


                                        <div class="form-group col-md-4">
                                            <label for="">ID</label>
                                            <input class="form-control" type="number" name="id" id="id" onkeyup="idresult()">
                                        </div>

                                        <div class="form-group col-md-2"></div>

                                        <div class="form-group col-md-4">
                                            <label for="">Name</label>
                                            <input class="form-control" type="text" name="name" id="name" onkeyup="nameresult()">
                                        </div>
                                    </div>
                                </form>


                                <div class="box-body table-responsive no-padding">
                                    <table id="tableresult" class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Add an engagement</th>
                                        </tr>


                                    </table>
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

                        <script type="text/javascript">
                            function idresult() {
                                if (document.getElementById('id').value != '') {
                                    var address = 'searchmemberajax.php?value=' + document.getElementById('id').value + '&state=1';
                                    //console.log(address);
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('GET', address, true);

                                    xhr.onload = function() {
                                        if (this.status == 200) {
                                            document.getElementById('tableresult').innerHTML = '<tr><th>ID</th><th>Name</th><th>Add an engagement</th></tr>';
                                            var resultvar = JSON.parse(this.responseText);
                                            var resultstring = '';
                                            var i = 0;
                                            while (resultvar[i]) {
                                                //resultstring+="<a href='location.php?name="+resultvar[i]+"'>"+resultvar[i]+'</a><br>';
                                                resultstring +=
                                                    '<tr><td>' + resultvar[i].ID +
                                                    '</td><td>' + resultvar[i].full_name +
                                                    '</td><td><span class="label label-success"><a style="text-decoration:none;color:black;" href="add_engagement.php?id=' + resultvar[i].ID + '">View</a></span>' +
                                                    '</td></tr>';
                                                i += 1;
                                            }
                                            document.getElementById('tableresult').innerHTML += resultstring;
                                        }
                                    }
                                    xhr.send();
                                } else {
                                    document.getElementById('tableresult').innerHTML = '';
                                }

                            }


                            function nameresult() {
                                if (document.getElementById('name').value != '') {
                                    var address = 'searchmemberajax.php?value=' + document.getElementById('name').value + '&state=0';
                                    //console.log(address);
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('GET', address, true);

                                    xhr.onload = function() {
                                        if (this.status == 200) {
                                            document.getElementById('tableresult').innerHTML = '<tr><th>ID</th><th>Name</th><th>Add an engagement</th></tr>';
                                            var resultvar = JSON.parse(this.responseText);
                                            var resultstring = '';
                                            var i = 0;
                                            while (resultvar[i]) {
                                                //resultstring+="<a href='location.php?name="+resultvar[i]+"'>"+resultvar[i]+'</a><br>';
                                                resultstring +=
                                                '<tr><td>' + resultvar[i].ID +
                                                '</td><td>' + resultvar[i].full_name +
                                                '</td><td><span class="label label-success"><a style="text-decoration:none;color:black;" href="add_engagement.php?id=' + resultvar[i].ID + '">View</a></span>' +
                                                '</td></tr>';
                                                i += 1;
                                            }
                                            document.getElementById('tableresult').innerHTML += resultstring;
                                        }
                                    }
                                    xhr.send();
                                } else {
                                    document.getElementById('tableresult').innerHTML = '';
                                }

                            }
                        </script>




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

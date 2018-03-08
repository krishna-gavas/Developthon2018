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
        <!-- Select2 -->
        <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
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
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form action="insertmember.php" method="POST" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="form-group col-xs-4">
                                            <label for="id">ID</label>
                                            <input type="number" required class="form-control " name="id">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="full_name">Full Name</label>
                                            <input type="text" pattern="[A-Za-z]+" class="form-control " name="full_name">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="husband_name">Husband Name</label>
                                            <input type="text" pattern="[A-Za-z]+" class="form-control " name="husband_name">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="kycimg">Capture KYC Image</label>
                                        <input type="file" id="kycimg" name="kycimg" accept="image/*" capture="camera">
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-lg-4">
                                            <label>Expected Delivery Date</label><br>
                                            <input type="date" required name="dod" />

                                        </div>

                                        
                                        <div class="form-group col-xs-4">
                                            <label for="age">Age:</label>
                                            <input type="number" required class="form-control " name="age">
                                        </div>
                                
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control " pattern="[789][0-9]{9}" name="phone">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="images">Capture Person Image</label>
                                        <input type="file" id="images" name="images" accept="image/*" capture="camera" >
                                    </div>


                                    <div class="row">

                                        <div class="col-md-3 form-group">
                                            <label>Taluka</label>
                                            <select class="form-control select2" name="taluka" style="width: 100%;">
                                            <option value=''>Select Taluka</option>
                                            <option value='Gadag'>Gadag</option>
                                            <option value='Shirahatti'>Shirahatti</option>
                                            <option value='Mundaragi'>Mundaragi</option>
                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                        
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label>Cluster</label><br>
                                            <select class="form-control select2" name="cluster" style="width: 100%;"/>
                                            <option value=''>Select Cluster</option>
                                            <option value="Huilagola">Huilagola</option>
<option value="Hulkoti">Hulkoti</option>
<option value="Lakkundi">Lakkundi</option>
<option value="Harti">Harti</option>
<option value="Soratur">Soratur</option>
<option value="Bhagewadi">Bhagewadi</option>
<option value="Korlahalli">Korlahalli</option>
<option value="Petalur">Petalur</option>
<option value="Dambala">Dambala</option>
<option value="Adralli">Adralli</option>
<option value="Suranagi">Suranagi</option>
<option value="Chabbi">Chabbi</option>
<option value="Magadi">Magadi</option>
<option value="Machanahalli">Machanahalli</option>                            
                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                        
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label>Village</label><br>
                                            <select class="form-control select2" style="width: 100%;" name="village" />
                                            <option value=''>Select Village</option>
                                            <option value="Hirekoppa">Hirekoppa</option>
<option value="Nagasamudra">Nagasamudra</option>
<option value="Kiratageri">Kiratageri</option>
<option value="Huilagola">Huilagola</option>
<option value="Chikoppa">Chikoppa</option>
<option value="Kadadi">Kadadi</option>
<option value="Balaganur">Balaganur</option>
<option value="Ghawarvada">Ghawarvada</option>
<option value="Benakoppa">Benakoppa</option>
<option value="Niralagi">Niralagi</option>
<option value="Kotamuchugi">Kotamuchugi</option>
<option value="Narayanapur">Narayanapur</option>
<option value="Hulkoti">Hulkoti</option>
<option value="Hombala">Hombala</option>
<option value="Shagoti">Shagoti</option>
<option value="Madaganur">Madaganur</option>
<option value="Belahod">Belahod</option>
<option value="Chikkahandigola">Chikkahandigola</option>
<option value="Dundoor">Dundoor</option>
<option value="Hirehandigola">Hirehandigola</option>
<option value="Hosalli">Hosalli</option>
<option value="Lingadala">Lingadala</option>
<option value="Venkatapur">Venkatapur</option>
<option value="Lakkundi">Lakkundi</option>
<option value="Sambapur">Sambapur</option>
<option value="Adavisomapur">Adavisomapur</option>
<option value="Hatalgeri">Hatalgeri</option>
<option value="Timmapur">Timmapur</option>
<option value="Haralapur">Haralapur</option>
<option value="Hallikeri">Hallikeri</option>
<option value="Halligudi">Halligudi</option>
<option value="Narasapur">Narasapur</option>
<option value="Kanaginahala">Kanaginahala</option>
<option value="Harti">Harti</option>
<option value="Chinchali">Chinchali</option>
<option value="Kanavi">Kanavi</option>
<option value="Hosur">Hosur</option>
<option value="AnturBentur">AnturBentur</option>
<option value="Nilgunda">Nilgunda</option>
<option value="Kallur">Kallur</option>
<option value="Malasamudra">Malasamudra</option>
<option value="Asundi">Asundi</option>
<option value="Binkadakatti">Binkadakatti</option>
<option value="Kurthakoti">Kurthakoti</option>
<option value="Shirunja">Shirunja</option>
<option value="Yalishirunja">Yalishirunja</option>
<option value="Soratur">Soratur</option>
<option value="Nagavi">Nagavi</option>
<option value="Malingapura">Malingapura</option>
<option value="Hanganakatti">Hanganakatti</option>
<option value="KabaLadalatti">KabaLadalatti</option>
<option value="Nabhapur">Nabhapur</option>
<option value="Beladadi">Beladadi</option>
<option value="Shirola">Shirola</option>
<option value="Kalasapur">Kalasapur</option>
<option value="Bhagewadi">Bhagewadi</option>
<option value="Chikvaddatti">Chikvaddatti</option>
<option value="Murudi">Murudi</option>
<option value="Mallikarjunpur">Mallikarjunpur</option>
<option value="GuddadBudhihal">GuddadBudhihal</option>
<option value="Bidaralli">Bidaralli</option>
<option value="Mundawad">Mundawad</option>
<option value="Jaalawadagi">Jaalawadagi</option>
<option value="Harogeri">Harogeri</option>
<option value="Basapur">Basapur</option>
<option value="Vitalapur">Vitalapur</option>
<option value="Hammigi">Hammigi</option>
<option value="Bidanal">Bidanal</option>
<option value="Singatalur">Singatalur</option>
<option value="Maktampur">Maktampur</option>
<option value="Korlahalli">Korlahalli</option>
<option value="Bennihalli">Bennihalli</option>
<option value="Gangapur">Gangapur</option>
<option value="Shiranahalli">Shiranahalli</option>
<option value="Gummagola">Gummagola</option>
<option value="Nagarhalli">Nagarhalli</option>
<option value="Hesarur">Hesarur</option>
<option value="Kakkur">Kakkur</option>
<option value="Petalur">Petalur</option>
<option value="Baradur">Baradur</option>
<option value="Eklasapur">Eklasapur</option>
<option value="Narayanapur">Narayanapur</option>
<option value="Tamragundi">Tamragundi</option>
<option value="Haitaapur">Haitaapur</option>
<option value="Mevunid">Mevunid</option>
<option value="Venkatapur">Venkatapur</option>
<option value="Ramenahalli">Ramenahalli</option>
<option value="Dambla">Dambla</option>
<option value="Jantli">Jantli</option>
<option value="Kadampur">Kadampur</option>
<option value="Singatrayankeri">Singatrayankeri</option>
<option value="Doni">Doni</option>
<option value="Hirevaddatti">Hirevaddatti</option>
<option value="Kalakeri">Kalakeri</option>
<option value="Tippapur">Tippapur</option>
<option value="Mustikoppa">Mustikoppa</option>
<option value="Boodihal">Boodihal</option>
<option value="Virapapur">Virapapur</option>
<option value="Dindoor">Dindoor</option>
<option value="Churchihal">Churchihal</option>
<option value="Attikatti">Attikatti</option>
<option value="Papanashi">Papanashi</option>
<option value="Battur">Battur</option>
<option value="Shettikeri">Shettikeri</option>
<option value="Akkigunda">Akkigunda</option>
<option value="Kundralli">Kundralli</option>
<option value="Badni">Badni</option>
<option value="Adralli">Adralli</option>
<option value="Nadigatti">Nadigatti</option>
<option value="Sankadala">Sankadala</option>
<option value="Sogihala">Sogihala</option>
<option value="Ramgeri">Ramgeri</option>
<option value="Gulaganjikoppa">Gulaganjikoppa</option>
<option value="Mallapur">Mallapur</option>
<option value="Suranagi">Suranagi</option>
<option value="Hullur">Hullur</option>
<option value="Yallapur">Yallapur</option>
<option value="Ullatti">Ullatti</option>
<option value="Undenahalli">Undenahalli</option>
<option value="Doddur">Doddur</option>
<option value="Nellogalla">Nellogalla</option>
<option value="Shabala">Shabala</option>
<option value="Balihosur">Balihosur</option>
<option value="Amarapur">Amarapur</option>
<option value="Mallapur">Mallapur</option>
<option value="Shigli">Shigli</option>
<option value="Chabbi">Chabbi</option>
<option value="Varavi">Varavi</option>
<option value="Guddadpur">Guddadpur</option>
<option value="Majjur">Majjur</option>
<option value="Kusalapur">Kusalapur</option>
<option value="Devihal">Devihal</option>
<option value="Shrimanthagada">Shrimanthagada</option>
<option value="Hosalli">Hosalli</option>
<option value="Kadkol">Kadkol</option>
<option value="Ranatoor">Ranatoor</option>
<option value="Jelligeri">Jelligeri</option>
<option value="Shivajinagar">Shivajinagar</option>
<option value="Magadi">Magadi</option>
<option value="Yalavatti">Yalavatti</option>
<option value="Holalapur">Holalapur</option>
<option value="Madalli">Madalli</option>
<option value="Adarkatti">Adarkatti</option>
<option value="Parasapur">Parasapur</option>
<option value="Gojanur">Gojanur</option>
<option value="Yattinahalli">Yattinahalli</option>
<option value="Kondikoppa">Kondikoppa</option>
<option value="Channapattana">Channapattana</option>
<option value="Haradgatti">Haradgatti</option>
<option value="Bassapur">Bassapur</option>
<option value="Machanahalli">Machanahalli</option>
<option value="Tegginbavanur">Tegginbavanur</option>
<option value="Navebavanur">Navebavanur</option>
<option value="Hadagali Bavanur">Hadagali Bavanur</option>
<option value="Hadagali">Hadagali</option>
<option value="Bannikoppa">Bannikoppa</option>
<option value="Sugnalli">Sugnalli</option>
<option value="Chicksavanur">Chicksavanur</option>
<option value="Narayanpur">Narayanpur</option>
<option value="Tarikoppa">Tarikoppa</option>
<option value="Vadavi">Vadavi</option>
<option value="Hosur">Hosur</option>            
                                            </select>
                                        </div>
                                        <div class="col-md-1"></div>
                                        
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

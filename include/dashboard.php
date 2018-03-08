  <header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ST</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Medi Care</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $_SESSION['photo'] ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['name'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $_SESSION['photo'] ?>" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                  <div class="pull-left">
                    <a href="changepassword.php" class="btn btn-default btn-flat">Change Password</a>
                  </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION['photo'] ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['name'] ?></p>

        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <?php
          if($_SESSION['email']!='admin@admin.com')
          {
        ?>

        <li><a href="addmember.php"><i class="fa fa-edit"></i> Add New Member</a></li>

        <li><a href="searchmember.php"><i class="fa fa-edit"></i> Add an engagement</a></li>
        <li><a href="searchmember2.php"><i class="fa fa-edit"></i> Update woman details</a></li>

        <?php
          }
          else
          {
        ?>

<li><a href="adduser.php"><i class="fa fa-edit"></i> Add New User</a></li>

<?php
          }
          ?>



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

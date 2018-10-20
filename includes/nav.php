  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['user_email']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
          <?php
            if($_SESSION['role']=="user"){
          ?>
          <li class="treeview <?php if($currentPage =='dashboard_user' ){echo 'active';}?>">
          <a href="dashboard_user.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
          <?php
            } else if($_SESSION['role']=="admin"){
          ?>
        <li class="treeview <?php if($currentPage =='dashboard_admin' ){echo 'active';}?>">
          <a href="dashboard_admin.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview <?php if($currentPage =='createBook' ){echo 'active';}?>">
          <a href="createBook.php">
            <i class="fa fa-edit"></i> <span>Create Book</span>
          </a>
        </li>


        <?php } ?>
          
             <li class="treeview <?php if($currentPage =='logout' ){echo 'active';}?>">
          <a href="logout.php">
            <i class="fa fa-dashboard"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

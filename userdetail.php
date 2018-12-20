
<?php include ("includes/header.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User details </li>
      </ol>
    </section>
<div class="container-fluid">
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->


      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div>
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">User details </h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
              <table id="dcpallclaims" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Password</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT members.id, members.username, members.email,members.role ,members.password,members.salt FROM `members`";

                if($stmt1 = $mysqli->prepare($sql)){
                    $stmt1->execute();
                    $stmt1->store_result();
                    $stmt1->bind_result( $id, $username, $email, $role, $password,$salt);

                }else if(DEBUG) echo $mysqli->error();

                while($stmt1->fetch())
                {
                ?>
                <tr>
                      <td>
                          
                           <span class="label label-warning"><?php echo $id; ?></span>
                           
                    </td>  
    
                   <td><?php echo $username; ?></td>
                  <td><?php echo $email; ?></td>
                  <td><?php echo $role; ?></td>
                  <td><?php echo $password; ?></td>
                <td><a class="btn btn-block btn-default" href="editBook.php?id=<?php echo $id; ?>"><i class="fa fa-edit"></i>change password</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Status</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Details</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
     
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<?php include ("includes/footer.php"); ?>
<?php include ("includes/header.php");?>
<?php 

$query = "SELECT user_name, `time`, action, diary_no FROM logs";

if($stmt1 = $mysqli->prepare($query)){
  
    $stmt1->execute();
    $stmt1->store_result();
    $stmt1->bind_result( $user_name, $time, $action, $diary_no);
}else if(DEBUG) echo $mysqli->error();
    
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Logs
 <br>
       
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Home</li>
        <li class="active">Logs</li>
      </ol>
    </section>

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
              <h3 class="box-title">Results</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                    <table id="logs" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>User</th>
                  <th>Diary No</th>
                  <th>Time</th>
                  <th>Action</th>
                   
                </tr>
                </thead>
                <tbody>
                <?php
               
                while($stmt1->fetch())
                {
                ?>
                <tr>
                  <td><?php echo $user_name; ?></td>
                  <td><?php echo $diary_no; ?></td>
                  <td><?php echo date("d-m-Y h:i:s a", strtotime($time)); ?></td>
                  <td><?php echo $action; ?></td>
                </tr>
                <?php 
                   
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                   <th>User</th>
                  <th>Diary No</th>
                  <th>Time</th>
                  <th>Action</th>
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
<?php include ("includes/footer.php"); ?>

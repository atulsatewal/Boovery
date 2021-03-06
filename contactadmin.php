
<?php include ("includes/header.php");?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Feedback by users
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Feedback by users</li>
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
                        <h3 class="box-title">feedback by users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="dcpallclaims" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Date & Time Of Message </th>
                               
                                
                               
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT * FROM contact_form";

                            if($stmt1 = $mysqli->prepare($sql)){
                                $stmt1->execute();
                                $stmt1->store_result();
                                $stmt1->bind_result( $id, $name, $LastName, $email, $message,$time );

                            }else if(DEBUG) echo $mysqli->error();

                            while($stmt1->fetch())
                            {
                                ?>
                                <tr>
                                                                        
                                    <td><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $LastName; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $message; ?></td>
                                    <td><?php echo $time; ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Message</th>
                               <th>Date & Time Of Message </th>
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
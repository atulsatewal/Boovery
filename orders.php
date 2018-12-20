
<?php include ("includes/header.php");?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All Orders
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">All Orders</li>
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
                        <h3 class="box-title">All Orders</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="dcpallclaims" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Phone Number</th>
                                <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sql = "SELECT orders.cart_id, orders.name, orders.country, orders.city, orders.phoneNo, orders.status, cart.id FROM  orders, cart WHERE orders.cart_id=cart.id";

                            if($stmt1 = $mysqli->prepare($sql)){
                                $stmt1->execute();
                                $stmt1->store_result();
                                $stmt1->bind_result( $id, $name, $country, $city, $phoneNo , $status, $id);

                            }else if(DEBUG) echo $mysqli->error();

                            while($stmt1->fetch())
                            {
                                ?>
                                <tr>
                                    <td>

                                        <?php

                                            $label = null;
                                            $value = null;

                                            switch ($status){
                                                case 'N':
                                                    $label = "label-primary";
                                                    $value = "New";
                                                    break;
                                                case 'R':
                                                    $label = "label-warning";
                                                    $value = "Rejected";
                                                    break;
                                                case 'F':
                                                    $label = "label-danger";
                                                    $value = "Failed";
                                                    break;
                                                case 'D':
                                                    $label = "label-success";
                                                    $value = "Delivered";
                                                    break;
                                                case 'C':
                                                    $label = "label-info";
                                                    $value = "Cancelled";
                                                    break;
                                            }

                                        ?>

                                        <span class="label <?php echo $label; ?>"><?php echo $value; ?></span>

                                    </td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $country; ?></td>
                                    <td><?php echo $city; ?></td>
                                    <td><?php echo $phoneNo; ?></td>
                                    <td><a class="btn btn-block btn-default" href="viewOrder.php?id=<?php echo $id; ?>"><i class="fa fa-edit"></i> View</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                               <th>Status</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Phone Number</th>
                                <th>View</th>
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
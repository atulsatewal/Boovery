
<?php include ("includes/header.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
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
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
            
            <?php $sql = "SELECT * FROM orders WHERE cart_id = ?";
            if($stmt1 = $mysqli->prepare($sql)){
                    $stmt1->bind_param('s', $_GET['id']);
                    $stmt1->execute();
                    $stmt1->store_result();
                    $stmt1->bind_result(  $order_ID, $cart_id, $name, $country, $addressLine1, $addressLine2, $zipCode, $city, $phoneNo, $payementMethod,  $email, $status );

                }else echo mysqli_error($mysqli);

                if($stmt1->fetch())
                {
            ?>

                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?php echo  $addressLine1."<br>".$addressLine2."<br>".$city."<br>".$zipCode."<br>".$country;?></td>
                        </tr>
                        <tr>
                            <th>Phone number</th>
                            <td><?php echo $phoneNo; ?></td>
                        </tr>
                        </tbody>
                    </table>


            <?php } else {?>

                No record Found.

            <?php } ?>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

          <div>
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Items</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <!-- Order details -->
                      <div class="order_list_container">

                          <table class="table">
                              <thead>
                              <th>Name</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Total</th>
                              </thead>
                              <tbody>
                              <?php
                              $sql = "SELECT items.id, cart.id, items.name, items.description, items.price, cart_items.quantity , items.author, items.isbn, category.category_name, items.img_url 
                        FROM items, category, cart_items, cart 
                        WHERE cart.id = ? 
                        AND cart.id = cart_items.cart_id 
                        AND items.id = cart_items.item_id 
                        AND items.category_id = category.id ";

                              $total = 0;

                              if($stmt1 = $mysqli->prepare($sql)){
                                  $stmt1->bind_param('s', $_GET['id']);
                                  $stmt1->execute();
                                  $stmt1->store_result();
                                  $stmt1->bind_result( $id, $cartId,  $name, $description,  $price, $quantity, $author, $isbn, $category_name, $img_url );

                              }else if(DEBUG) echo $mysqli->error();

                              while($stmt1->fetch())
                              {
                                  ?>

                                  <tr>
                                      <td><?php echo $name; ?></td>
                                      <td><?php echo $quantity; ?></td>
                                      <td><?php echo $price; ?></td>
                                      <td><?php echo $price * $quantity; ?></td>
                                  </tr>

                                  <?php
                                  $total += $price * $quantity;

                              }?>


                              </tbody>
                          </table>
                      </div>

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
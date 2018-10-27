
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

    <?php

    if(isset($_GET['success'])){
      ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Record Updated successfully!
        </div>
      <?php
    } else if(isset($_GET['error'])){

?>

<div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong> Could not update Record
        </div>


<?php

    }

    ?>

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
              <h3 class="box-title">Edit Book</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
            
            <?php $sql = "SELECT * FROM items WHERE id = ?"; 
            if($stmt1 = $mysqli->prepare($sql)){
                    $stmt1->bind_param('s', $_GET['id']);
                    $stmt1->execute();
                    $stmt1->store_result();
                    $stmt1->bind_result( $id, $category_id,  $name, $description, $isbn, $author, $price, $img_url, $created_at, $updated_at );

                }else if(DEBUG) echo $mysqli->error();

                if($stmt1->fetch())
                {
            ?>
              
            <form action="app_functions/createOrUpdateBook.php" method="post">

              <input type="hidden" name = "id" value = "<?php echo $id; ?>"/>

              <input type="hidden" name = "type" value = "update"/>
              <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $name; ?>">
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="<?php echo $description; ?>">
    </div>

    <div class="form-group">
      <label for="isbn">ISBN:</label>
      <input type="number" class="form-control" id="isbn" placeholder="Enter isbn" name="isbn" value="<?php echo $isbn; ?>">
    </div>

    <div class="form-group">
      <label for="author">Author:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter author" name="author" value="<?php echo $author; ?>">
    </div>

    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" value="<?php echo $price; ?>">
    </div>

    <div class="form-group">
      <label for="img_url">Image URL:</label>
      <input type="text" class="form-control" id="img_url" placeholder="Enter img_url" name="img_url" value="<?php echo $img_url; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

            </form>




            <?php } else {?>

                No record Found.

            <?php } ?>

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
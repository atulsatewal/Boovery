
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
              <h3 class="box-title">Create Book</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
            
            <?php $sql = "SELECT id, category_name FROM category"; 
            if($stmt1 = $mysqli->prepare($sql)){
                    $stmt1->execute();
                    $stmt1->store_result();
                    $stmt1->bind_result( $id, $category_name );

                }


            ?>
              
            <form action="app_functions/createOrUpdateBook.php" method="post">

              <input type="hidden" name = "id" value = "<?php echo $id; ?>"/>

              <input type="hidden" name = "type" value = "create"/>
              <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="catogory" name="category_id">
    <?php 
      while($stmt1->fetch()){
      ?>

        <option value="<?php echo $id; ?>"> <?php echo $category_name; ?> </option>


          <?php
      }
    ?>
  </select>
</div>

    <div class="form-group">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
    </div>

    <div class="form-group">
      <label for="isbn">ISBN:</label>
      <input type="number" class="form-control" id="isbn" placeholder="Enter isbn" name="isbn">
    </div>

    <div class="form-group">
      <label for="author">Author:</label>
      <input type="text" class="form-control" id="author" placeholder="Enter author" name="author">
    </div>

    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>

    <div class="form-group">
      <label for="img_url">Image URL:</label>
      <input type="text" class="form-control" id="img_url" placeholder="Enter img_url" name="img_url">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

            </form>

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
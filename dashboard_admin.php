
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
              <h3 class="box-title">All Books</h3>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
              <table id="dcpallclaims" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Category</th>
                  <th>Name</th>
                  <th>Author</th>
                  <th>ISBN</th>
                  <th>Price</th>
                  <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT items.id, items.name, items.price, items.author, items.isbn, category.category_name FROM items, category WHERE items.category_id = category.id";

                if($stmt1 = $mysqli->prepare($sql)){
                    $stmt1->execute();
                    $stmt1->store_result();
                    $stmt1->bind_result( $id, $name, $price, $author, $isbn, $category_name );

                }else if(DEBUG) echo $mysqli->error();

                while($stmt1->fetch())
                {
                ?>
                <tr>
                       <td>
                          
                           <span class="label label-warning"><?php echo $category_name; ?></span>
                           
                    </td>  
                   <td><?php echo $name; ?></td>
                  <td><?php echo $author; ?></td>
                  <td><?php echo $isbn; ?></td>
                  <td><?php echo $price; ?></td>
                <td><a class="btn btn-block btn-default" href="editBook.php?id=<?php echo $id; ?>"><i class="fa fa-edit"></i> Edit</a></td>
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
<?php include ("includes/footer.php"); ?>
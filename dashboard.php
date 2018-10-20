<?php include ("includes/header.php");?>
<?php 
 $sql1 = "SELECT s_no, diaryNo, diaryType, diaryDate, rank, applicantName, idNo, treatment_by, type FROM register WHERE diaryType='Individual' AND  Month(timestamp) = Month(CURRENT_TIMESTAMP)  ORDER BY timestamp DESC";
$sql2 = "SELECT s_no, diaryNo, diaryType, diaryDate, rank, applicantName, idNo, treatment_by, type FROM register_hospital WHERE diaryType='Hospital' AND  Month(timestamp) = Month(CURRENT_TIMESTAMP) ORDER BY timestamp DESC";
$ind_objection = "SELECT s_no, diaryNo, diaryType, diaryDate, rank, applicantName, idNo, treatment_by, type FROM register WHERE objection='1' AND diaryType='Individual' ORDER BY timestamp DESC";
$hos_objection = "SELECT s_no, diaryNo, diaryType, diaryDate, rank, applicantName, idNo, treatment_by, type FROM register_hospital WHERE objection='1' AND diaryType='Hospital' ORDER BY timestamp DESC";
$pending_ind = "SELECT s_no, diaryNo, diaryType, diaryDate, rank, applicantName, idNo, treatment_by, type FROM register WHERE sanction_no=''  ORDER BY timestamp DESC";
$pending_hos = "SELECT s_no, diaryNo, diaryType, diaryDate, rank, applicantName, idNo, treatment_by, type FROM register_hospital WHERE sanction_no=''  ORDER BY timestamp DESC";

$num_ind =  0;
$num_hosp = 0;



if($stmt1 = $mysqli->prepare($sql1)){
    $stmt1->execute();
    $stmt1->store_result();
    $stmt1->bind_result( $s_no, $diaryNo, $diaryType, $diaryDate, $rank, $applicantName, $idNo, $treatment_by, $type);
    $num_ind = $stmt1->num_rows;
}else if(DEBUG) echo $mysqli->error();

if($stmt2 = $mysqli->prepare($sql2)){
    $stmt2->execute();
     $stmt2->store_result();
    $stmt2->bind_result( $s_no2, $diaryNo2, $diaryType2, $diaryDate2, $rank2, $applicantName2, $idNo2, $treatment_by2, $type2);
    $num_hosp = $stmt2->num_rows;
}else if(DEBUG) echo $mysqli->error();

if($stmt3 = $mysqli->prepare($ind_objection)){
    $stmt3->execute();
     $stmt3->store_result();
    $stmt3->bind_result( $s_no3, $diaryNo3, $diaryType3, $diaryDate3, $rank3, $applicantName3, $idNo3, $treatment_by3, $type3);
 
}else if(DEBUG) echo $mysqli->error();

if($stmt4 = $mysqli->prepare($hos_objection)){
    $stmt4->execute();
     $stmt4->store_result();
    $stmt4->bind_result( $s_no4, $diaryNo4, $diaryType4, $diaryDate4, $rank4, $applicantName4, $idNo4, $treatment_by4, $type4);

}else if(DEBUG) echo $mysqli->error();

if($stmt5 = $mysqli->prepare($pending_ind)){
    $stmt5->execute();
     $stmt5->store_result();
    $stmt5->bind_result( $s_no5, $diaryNo5, $diaryType5, $diaryDate5, $rank5, $applicantName5, $idNo5, $treatment_by5, $type5);
   
}else  if(DEBUG) echo $mysqli->error();

if($stmt6 = $mysqli->prepare($pending_hos)){
    $stmt6->execute();
     $stmt6->store_result();
    $stmt6->bind_result( $s_no6, $diaryNo6, $diaryType6, $diaryDate6, $rank6, $applicantName6, $idNo6, $treatment_by6, $type6);

}else if(DEBUG) echo $mysqli->error();

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Register
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Register</li>
      </ol>
    </section>
    <!-- Main content -->

    <section class="content">
      <!-- Info boxes -->
    

        <div class="row">
            <?php if($_SESSION['role'] == 'dealinghand'){ ?>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-list-ol"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Add New <br>Register Entry</span>
                 <a href="new_register.php" class="btn btn-sm btn-danger btn-flat pull-left">ADD</a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

            <?php } ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Hospital App.</span>
              <span class="info-box-number"><?php echo  $num_hosp; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
             <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Individual App.</span>
              <span class="info-box-number"><?php echo  $num_ind; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
             <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-pie-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">View Statistics</span>
                 <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#launch_query">
  View
</button>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
            </div>
      <!-- /.row -->
   
         <div class=" nav-tabs-custom">
   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">Individual</a></li>
    <li><a data-toggle="tab" href="#menu2">Hospital</a></li>
        <li><a data-toggle="tab" href="#menu3">Individual Objection</a></li>
       <li><a data-toggle="tab" href="#menu4">Hospital Objection</a></li>
        <li><a data-toggle="tab" href="#menu5">Pending Individual</a></li>
        <li><a data-toggle="tab" href="#menu6">Pending Hospital</a></li>
  </ul>
        
<div class="tab-content">
    <div id="menu1" class="tab-pane fade in active">
      <h3>Individual</h3>
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- TABLE: LATEST -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Applications</h3>
            </div>
            <!-- /.box-header -->
      
           
                
                 <div class="box-body">
              <table id="individual" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>S No</th>
                    <th>Status</th>
                  <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                    <th>Claim</th>
                </tr>
                </thead>
                <tbody>
                <?php
               
                while($stmt1->fetch())
                { 

                   if($s=$mysqli->prepare("select app_id, status FROM form WHERE diary_no = ? AND diary_date = ?")){
                        $s->bind_param('ss',$diaryNo, $diaryDate );
                        $s->execute();
                        $s->store_result();
                        $s->bind_result($app_id, $status);
                        $s->fetch();
                    }else if(DEBUG) echo $mysqli->error();


                ?>
                <tr><td><?php echo $num_ind; ?></td>
                 <td>
                          
                           <span class="label label-default"><?php echo $status; ?></span>
                           
                    </td> 
                       <td>
                      <?php echo $diaryNo."/".$diaryType."/Gen Br./SED/Dated/".$diaryDate; ?>    
                    </td>  
                    
                    
                  <td><?php echo $rank." ".$applicantName." No.".$idNo; ?></td>
                     <td><?php echo $treatment_by; ?></td>
                    <td><?php echo $type ?></td>
                <td><a class="btn btn-block btn-default" href="viewregister.php?id=<?php echo $s_no; ?>&type=<?php echo $diaryType; ?>"><i class="fa fa-eye"></i> View</a></td>
                    <td>
                    <?php 
                    
                    if($app_id=='')
                    { ?>
                 <div class="input-group-btn">
                     <?php if($_SESSION['role'] == 'dealinghand'){ ?>
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Make Claim
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="form_referral.php?id=<?php echo $s_no; ?>&table=register">Referral/Govt</a></li>
                    <li><a href="form_emg_individual.php?id=<?php echo $s_no; ?>&table=register">Emergency Claim</a></li>
                    <li><a href="form_emg_credit.php?id=<?php echo $s_no; ?>&table=register">Emergency Credit</a></li>
                  </ul>
                     <?php } else echo "<button class='btn btn-warning'>Pending</button>";?>
                </div>
                         
                    <?php }
                    elseif(is_numeric($app_id)) {
                    ?>
                        
                    <a class="btn btn-block btn-primary" href="viewclaim.php?id=<?php echo $app_id; ?>"><i class="fa fa-eye"></i> View</a>
                    <?php
                    }
                    $s->close();
                        
                        ?>
                    
                    </td>
                </tr>
                <?php 
                    $num_ind--;
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                     <th>S No</th>
                    <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                  <th>Claim</th>
                </tr>
                </tfoot>
              </table>
            </div>
      
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
   
        <!-- /.col -->
      </div>
    </div>
    <div id="menu2" class="tab-pane fade">
            <h3>Hospital</h3>
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Applications</h3>
            </div>
            <!-- /.box-header -->
      
           
                
                 <div class="box-body">
            <table id="hospital" class="table table-bordered table-hover">
                <thead>
                <tr>
                     <th>S No</th>
                  <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                  <th>Claim</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($stmt2->fetch())
                {
                ?>
         
                    <tr><td><?php echo $num_hosp; ?></td>
                       <td>
                      <?php echo $diaryNo2."/".$diaryType2."/Gen Br./SED/Dated/".$diaryDate2; ?>    
                    </td>  
                    
                    
                  <td><?php echo $rank2." ".$applicantName2." No.".$idNo2; ?></td>
                     <td><?php echo $treatment_by2; ?></td>
                    <td><?php echo $type2; ?></td>
                <td><a class="btn btn-block btn-default" href="viewregister.php?id=<?php echo $s_no2; ?>&type=<?php echo $diaryType2; ?>"><i class="fa fa-eye"></i> View</a></td>
                 <td>
                    <?php 
                  
                    
                    if($s=$mysqli->prepare("select app_id FROM form WHERE diary_no = ? AND diary_date = ?")){
                        $s->bind_param('ss',$diaryNo2, $diaryDate2 );
                        $s->execute();
                        $s->store_result();
                        $s->bind_result($app_id);
                        $s->fetch();
                    }else if(DEBUG) echo $mysqli->error();
                    
                    if($app_id=='')
                    { ?>
                         <div class="input-group-btn">
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Make Claim
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="form_referral.php?id=<?php echo $s_no2; ?>&table=register_hospital">Referral/Govt</a></li>
                    <li><a href="form_emg_individual.php?id=<?php echo $s_no2; ?>&table=register_hospital">Emergency Claim</a></li>
                    <li><a href="form_emg_credit.php?id=<?php echo $s_no2; ?>&table=register_hospital">Emergency Credit</a></li>
                  </ul>
                </div>
                    <?php }
                    elseif(is_numeric($app_id)) {
                    ?>
                        
                    <a class="btn btn-block btn-primary" href="viewclaim.php?id=<?php echo $app_id; ?>"><i class="fa fa-eye"></i> View</a>
                    <?php
                    }
                    $s->close();
                        
                        ?>
                    
                    </td>
                </tr>
                <?php 
                    $num_hosp--;
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                     <th>S No</th>
                    <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                  <th>Claim</th>
                </tr>
                </tfoot>
              </table>
            </div>
      
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
   
        <!-- /.col -->
      </div>
    </div>
        <div id="menu3" class="tab-pane fade">
            <h3>Individual Objection</h3>
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Applications</h3>
            </div>
            <!-- /.box-header -->           
                 <div class="box-body">
            <table id="individualObj" class="table table-bordered table-hover">
                <thead>
                <tr>
                   
                  <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($stmt3->fetch())
                {
                ?>
            
                    <tr>
                       <td>
                      <?php echo $diaryNo3."/".$diaryType3."/Gen Br./SED/Dated/".$diaryDate3; ?>    
                    </td>  
                    
                    
                  <td><?php echo $rank3." ".$applicantName3." No.".$idNo3; ?></td>
                     <td><?php echo $treatment_by3; ?></td>
                    <td><?php echo $type3; ?></td>
                <td><a class="btn btn-block btn-default" href="viewregister.php?id=<?php echo $s_no3; ?>&type=<?php echo $diaryType3; ?>"><i class="fa fa-eye"></i> View</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                    
                    <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                </tr>
                </tfoot>
              </table>
            </div>
      
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
   
        <!-- /.col -->
      </div>
    </div>
        <div id="menu4" class="tab-pane fade">
            <h3>Hospital Objection</h3>
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Hospital Objection</h3>
            </div>
            <!-- /.box-header -->           
                
                 <div class="box-body">
            <table id="hospitalObj" class="table table-bordered table-hover">
                <thead>
                <tr>
                     
                  <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($stmt4->fetch())
                {
                ?>
               
                    <tr>
                       <td>
                      <?php echo $diaryNo4."/".$diaryType4."/Gen Br./SED/Dated/".$diaryDate4; ?>    
                    </td>  
                    
                    
                  <td><?php echo $rank4." ".$applicantName4." No.".$idNo4; ?></td>
                     <td><?php echo $treatment_by4; ?></td>
                    <td><?php echo $type4; ?></td>
                <td><a class="btn btn-block btn-default" href="viewregister.php?id=<?php echo $s_no4; ?>&type=<?php echo $diaryType4; ?>"><i class="fa fa-eye"></i> View</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                    
                    <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                </tr>
                </tfoot>
              </table>
            </div>
      
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
   
        <!-- /.col -->
      </div>
    </div>
      <div id="menu5" class="tab-pane fade">
            <h3>Pending Individual</h3>
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Applications</h3>
            </div>
            <!-- /.box-header -->
      
           
                
                 <div class="box-body">
            <table id="pendingInd" class="table table-bordered table-hover">
                <thead>
                <tr>
                    
                  <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($stmt5->fetch())
                {
                ?>
     
                   <tr>
                       <td>
                      <?php echo $diaryNo5."/".$diaryType5."/Gen Br./SED/Dated/".$diaryDate5; ?>    
                    </td>  
                    
                    
                  <td><?php echo $rank5." ".$applicantName5." No.".$idNo5; ?></td>
                     <td><?php echo $treatment_by5; ?></td>
                    <td><?php echo $type5; ?></td>
                <td><a class="btn btn-block btn-default" href="viewregister.php?id=<?php echo $s_no5; ?>&type=<?php echo $diaryType5; ?>"><i class="fa fa-eye"></i> View</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                   
                    <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                </tr>
                </tfoot>
              </table>
            </div>
      
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
   
        <!-- /.col -->
      </div>
    </div>
     <div id="menu6" class="tab-pane fade">
            <h3>Pending Hospital</h3>
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Applications</h3>
            </div>
            <!-- /.box-header -->
      
           
                
                 <div class="box-body">
            <table id="pendingHosp" class="table table-bordered table-hover">
                <thead>
                <tr>
                    
                  <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($stmt6->fetch())
                {
                ?>
    
                   <tr>
                       <td>
                      <?php echo $diaryNo6."/".$diaryType6."/Gen Br./SED/Dated/".$diaryDate6; ?>    
                    </td>  
                    
                    
                  <td><?php echo $rank6." ".$applicantName6." No.".$idNo6; ?></td>
                     <td><?php echo $treatment_by6; ?></td>
                    <td><?php echo $type6; ?></td>
                <td><a class="btn btn-block btn-default" href="viewregister.php?id=<?php echo $s_no6; ?>&type=<?php echo $diaryType6; ?>"><i class="fa fa-eye"></i> View</a></td>
                </tr>
                <?php 
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                     
                    <th>Diary No</th>
                  <th>Rank/Name/No</th>
                  <th>Treatment Taken By</th>
                    <th>Type</th>
                  <th>Details</th>
                </tr>
                </tfoot>
              </table>
            </div>
      
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
   
        <!-- /.col -->
      </div>
    </div>
     
      <!-- Modal -->
<div class="modal fade" id="launch_query" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Please Select</h4>
      </div>
      <div class="modal-body">
        <form action="show_query.php" method="get">
           <select class="custom-select form-control" name="month" required >
               <option value="" selected disabled>Please select</option>
               <option value="01">January</option>
               <option value="02">Februrary</option>
               <option value="03">March</option>
               <option value="04">April</option>
               <option value="05">May</option>
               <option value="06">June</option>
               <option value="07">July</option>
               <option value="08">August</option>
               <option value="09">September</option>
               <option value="10">October</option>
               <option value="11">November</option>
               <option value="12">December</option>
            </select>
          <select class="custom-select form-control" name="diaryType" required >
              <option value="" selected disabled>Please select</option>
            <option value="Hospital">Hospital</option>
             <option value="Individual">Individual</option>
                    </select>
            
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
          
          </form>
    </div>
  </div>
</div>
            
        </div>
            
        </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include ("includes/footer.php"); ?>

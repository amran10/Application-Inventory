<?php
include "include/connection.php";
if(isset($_POST["submit"]))    
{    
  $pname              = $_POST['pname'];
  $brand              = $_POST['brand'];
  $pdate              = $_POST['pdate'];
  $sn                 = $_POST['sn'];
  $po                 = $_POST['po'];
  $category           = $_POST['category'];
  $asset              = $_POST['asset'];
  $user_name        = $_POST['user_name'];
  $user_branch      = $_POST['user_branch'];
  $user_join        = $_POST['user_join'];
  $user_nik         = $_POST['user_nik'];
  $user_cc          = $_POST['user_cc'];
  $user_mail        = $_POST['user_mail'];
  $user_code        = $_POST['user_code'];

  $cek = mysql_query("SELECT * FROM tb_staff WHERE staff_mail ='$user_mail'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_staff values(' ','$user_name','$user_mail','$user_branch','$user_cc','$user_join','$user_nik','$user_code')");
    if ($query) {
      header("Location: ./inv_tran_transaction.php?ntf=1");  
    } else {
      header("Location: ./inv_tran_transaction.php?ntf=3");
    }
  } else {
    header("Location: ./inv_tran_transaction.php?ntf=2");
  }

} 

//UPDATE TRANSACTION
if(isset($_POST["update"]))    
{    
  $pr_id        = $_POST['pr_id'];
  $staff_username   = $_POST['staff_username'];
  $pr_name          = $_POST['pr_name'];
  $req_joindate     = $_POST['req_joindate'];
  $serial_no        = $_POST['serial_no'];
  $asset_no         = $_POST['asset_no'];
  $assetof          = $_POST['assetof'];

  $cek = mysql_query("SELECT * FROM tb_request_item WHERE pr_id ='$pr_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_request_item SET staff_username ='$staff_username', 
      pr_name = '$pr_name', 
      req_joindate = '$req_joindate',
      serial_no = '$serial_no',
      asset_no = '$asset_no',
      assetof = '$assetof'
      WHERE pr_id='$pr_id'");
  //var_dump($query);die();
    if($query){
      header("Location: ./inv_tran_transaction.php?ntf=5");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}


if(isset($_POST["his_remark1"]))    
{    
  $staff_username  = $_POST['staff_username'];
  $pr_id           = $_POST['pr_id'];
  $pr_name         = $_POST['pr_name'];
  $pr_status       = $_POST['pr_status'];
  $date            = date('Y-m-d H:i:s');

  $query = mysql_query("INSERT INTO tb_log_history (his_id,his_task, his_user, his_product, his_date_time, his_remark) 
    VALUES ('','Set Product','".$staff_username."','".$pr_name."', '".$date."', 'Approve' )");
  $query .= mysql_query("UPDATE tb_product SET pr_status ='$pr_status'
   WHERE pr_id='$pr_id'");
  if($query){
    header("Location: ./inv_tran_transaction.php?ntf=1");                                                  
  } else {
    echo "Updated Failed - Please contact your administrator";
  }

}

//DELETE TRANSACTION
if(isset($_POST['delete'])) 
{
  $pr_id  = $_POST['pr_id'];

  echo $pr_id;

  if($pr_id){
    $query = mysql_query("DELETE FROM tb_request_item WHERE pr_id = '$pr_id' ");
    if($query){
     header("Location: ./inv_tran_transaction.php?ntf=4");                    
   } else {
    echo "Operation Failed! Please contact your administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your administrator".mysql_errno();
}

}

if(isset($_POST["pick"]))   
{   
  $uid                = $_POST['uid'];
  $user_name          = $_POST['user_name'];
  $unit_name          = $_POST['unit_name'];
  $datenow            = date('Y-m-d');

  $cek = mysql_query("SELECT * FROM tb_logbook WHERE log_id ='$uid'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_logbook set status_dmtl = 'Submit', process_by = '$user_name', process_date = '$datenow' WHERE log_id ='$uid'");

    if($query){
      header("Location: ./mdr_working_paper.php?unit=$unit_name");                                            
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;

  }
}

if(isset($_POST["search1"]))
{    
  $query1 = '';
  if ($_POST['pr_nm']) {
    $query1 = "pr_name ='$_POST[pr_nm]'";
  } else {
    if ($_POST['sn']) {
      if ($query1 != '') {
        $query1 .= ' and ';
      }
      $query1 .= "pr_sn ='$_POST[sn]'";
    }
  }
} else {
  $query1 = "pr_name ='No Data' ";
  $query1 .= "and pr_sn ='No Data' ";
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>
<body>
  <section id="container" >
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- <h5><i class="fa fa-angle-right"></i> Transaction Page</h5> -->
        <div class="row mt">
          <div align="center">
            <div class="sub-heard-part">
              <ol class="rebadcrumb m-b-0">
                <label><h4>Transaction for Device Owner</h4></label>
              </ol>
            </div>      
          </div>
        </div>
        <?php //include 'include/alert/success.php';?>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <form method="post" action=" ">
                <div class="col-lg-12">
                  <div class="form-group"> 
                    <label>Search by Product Name</label>
                    <input type="text" name="pr_nm" class="form-control" placeholder="input Product Name"> 
                  </div>
                </div>
                <div align="center">
                  <b>OR</b>
                </div>
                <div class="col-lg-12">
                  <div class="form-group"> 
                    <label>Search by Serial No.</label>
                    <input type="text" name="sn" class="form-control" placeholder="input Serial no.">
                    <!-- <input type="hidden" name="pr_sn" class="form-control" value="0" placeholder="input Product Name"> -->
                  </div>
                </div>
                <button class="form-control btn btn-primary" name="search1" value="search1" type="submit">Search!</button>
              </form>
            </div>
          </div>
        </div>
        <div class="row mt">
         <div class="col-lg-12">
          <div class="content-panel">
            <!-- <h4><i class="fa fa-angle-right"></i> Responsive Table</h4> -->
            <section id="unseen" style="padding: 10px">
              <div class="table-responsive">
                <table  id="example12" class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Id Product</th>
                      <!-- <th>Name/Type</th> -->
                      <!-- <th>Brand</th> -->
                      <th>S/N</th>
                      <!-- <th>Categoty</th> -->
                      <!-- <th>Asset of</th> -->
                      <th>Status</th>
                      <th>Status Monitoring</th>
                      <th>Current User</th>
                      <!-- <th>Branch/Location</th> -->
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php
               // $pr_sn = $_GET['pr_sn'];
               // $pr_name = $_GET['pr_name'];
                   $con=mysqli_connect("localhost","root","","inventory");
                        // Check connection
                   if (mysqli_connect_errno())
                   {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                  }

                  $result = mysqli_query($con,"SELECT * FROM tb_product");
                // $result = mysqli_query($con,"SELECT * FROM tb_product ". (($query1 != '') ? " where $query1 " : "where pr_id is null and pr_status='Ready'") );
                // $result = mysqli_query($con,"SELECT * FROM tb_product WHERE pr_name LIKE '%query1%' OR pr_sn LIKE '%$query1%'");

                  if(mysqli_num_rows($result)>0){
                    $no=0;
                    while($row = mysqli_fetch_array($result))
                    {
                      $no++;
                      echo "<tr>";
                      echo "<td>" . $no . ".</td>";
                      echo "<td>" . $row['pr_id'] . "</td>";
                    // echo "<td>" . $row['pr_name'] . "</td>";
                    // echo "<td>" . $row['pr_brand'] . "</td>";
                      echo "<td>" . $row['pr_sn'] . "</td>";
                    // echo "<td>" . $row['pr_category'] . "</td>";
                    // echo "<td>" . $row['pr_asset_of'] . "</td>";
                      echo "<td>" . $row['pr_status'] . "</td>";
                      echo "<td>" . $row['monitoring'] . "</td>";
                      echo "<td>" . $row['user_id'] . "</td>";
                    // echo "<td>" . $row['branch'] . "</td>"; 
                      echo "<td align= ''>";
                    // <a href='#' data-toggle='modal' data-target='#update$row[pr_id]' title='Edit'><span class='label label-success'>Edit</span></a>
                    // <a href='#' data-toggle='modal' data-target='#delete$row[pr_id]' title='Delete'><span class='label label-success'>Delete</span></a>
                      echo "
                      <a href='#' data-toggle='modal' data-target='#set_users$row[pr_id]' title='set_users'><span class='label label-success'>Set Users</span></a>
                      </td>";
                      echo "</tr>";
                      ?>
                      <!-- Set User Transaction Page -->
                      <?php
                      $staff = mysql_query("SELECT * FROM tb_user");
                      ?>
                      <div class="modal fade" id="set_users<?php echo $row['pr_id'];?>" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>[Transaction Page] </b> Set Users Record</h4>
                            </div>
                            <div class="modal-body">
                              <form method="post" action=" ">
                                <div class="form-group">
                                  <input type="hidden" name="pr_name" value="<?php echo $row['pr_name']; ?>" />
                                  <input type="hidden" name="serial_no" value="<?php echo $row['pr_sn']; ?>" />
                                  <input type="hidden" name="pr_id" value="<?php echo $row['pr_id']; ?>" />
                                  <input type="hidden" name="pr_status" value="In Use" />
                                  <label>Owner</label>
                                  <select id="dropdown" name="staff_username" class="form-control" required>
                                    <option value="">-- SELECT --</option>
                                    <?php 
                                    while ($row = mysql_fetch_assoc($staff)) {
                                      ?>
                                      <option value="<?= $row['user_name'] ?>"><?= $row['user_name'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Asset of</label>
                                  <select id="dropdown1" name="assetof" class="form-control" required>
                                    <option value="">--- SELECT ---</option>
                                    <option value="Seafreight">Seafreight</option>
                                    <option value="Airfreight">Airfreight</option>
                                    <option value="PROM">PROM</option>
                                    <option value="ContractLog.">ContractLog.</option>
                                    <option value="Customs">Customs</option>
                                    <option value="IT">IT</option>
                                    <option value="No Bisnis Unit">No Bisnis Unit</option>
                                  </select>
                                </div>
                                <button type="submit" name="his_remark1" value="Approve" class="btn btn-default">Set Users</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cencel</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php

                    }
                  }
                  mysqli_close($con);
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->

<!--main content end-->

</section>

<?php include 'include/thirdparty.php';?>


</body>
</html>

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
      header("Location: ./trans_main.php?ntf=1");  
    } else {
      header("Location: ./trans_main.php?ntf=3");
    }
  } else {
    header("Location: ./trans_main.php?ntf=2");
  }

} 

//UPDATE TRANSACTION
if(isset($_POST["update"]))    
{    
  $id_req_item        = $_POST['id_req_item'];
  // $staff_username     = $_POST['staff_username'];
  // $staff_mail         = $_POST['staff_mail'];
  // $staff_branch       = $_POST['staff_branch'];
  // $staff_cc           = $_POST['staff_cc'];
  // $staff_join         = $_POST['staff_join'];
  // $staff_nik          = $_POST['staff_nik'];
  // $staff_code         = $_POST['staff_code'];
  $staff_username   = $_POST['staff_username'];
  $pr_name          = $_POST['pr_name'];
  $req_joindate     = $_POST['req_joindate'];
  $serial_no        = $_POST['serial_no'];
  $asset_no         = $_POST['asset_no'];
  $assetof          = $_POST['assetof'];

  $cek = mysql_query("SELECT * FROM tb_request_item WHERE id_req_item ='$id_req_item'");
  $num = mysql_num_rows($cek);
  if($num == 1){
  $query = mysql_query("UPDATE tb_request_item SET staff_username ='$staff_username', 
                                              pr_name = '$pr_name', 
                                              req_joindate = '$req_joindate',
                                              serial_no = '$serial_no',
                                              asset_no = '$asset_no',
                                              assetof = '$assetof'
                                              WHERE id_req_item='$id_req_item'");
  //var_dump($query);die();
    if($query){
      header("Location: ./trans_main.php?ntf=5");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}


if(isset($_POST["his_remark"]))    
{    
  $staff_username  = $_POST['staff_username'];
  $date            = date('Y-m-d H:i:s');

  $query = mysql_query("INSERT INTO tb_log_history (his_task, his_user, his_product, his_date_time, his_remark) VALUES ('".$pr_name."', '".$staff_username."', '".$pr_id."', '".$date."', '".$his_remark."' )");
    if($query){
      header("Location: ./trans_main.php?ntf=6");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }

}

//DELETE TRANSACTION
if(isset($_POST['delete']))
{

  $id_req_item  = $_POST['id_req_item'];

  echo $id_req_item;

  if($id_req_item){
    $query = mysql_query("DELETE FROM tb_request_item WHERE id_req_item = '$id_req_item' ");
    if($query){
     header("Location: ./trans_main.php?ntf=4");                    
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
    $query = mysql_query("UPDATE tb_logbook set status_dmtl = 'Submit', process_by = '$user_name', process_date = '$datenow' where log_id ='$uid'");

    if($query){
      header("Location: ./mdr_working_paper.php?unit=$unit_name");                                            
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;

  }
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
       <h3><i class="fa fa-angle-right"></i> Transaction Page</h3>       
       <?php include 'include/alert/success.php';?>
      <div class="row mt">
       <div class="col-lg-12">
        <div class="content-panel">
          <!-- <h4><i class="fa fa-angle-right"></i> Responsive Table</h4> -->
          <section id="unseen" style="padding: 10px">
            <table  id="example1" class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>UserID</th>
                  <th>UserName</th>
                  <th>JoinDate</th>
                  <th>Product</th>
                  <th>S/N</th>
                  <th>Email</th>
                  <th>Asset Of</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $con=mysqli_connect("localhost","root","","inventory");
                        // Check connection
                if (mysqli_connect_errno())
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con,"SELECT * FROM tb_request_item WHERE set_status='No Action'");

                if(mysqli_num_rows($result)>0){

                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>".$row['id_req_item']."</td>";
                    echo "<td>".$row['staff_username'] . "</td>";
                    echo "<td>".$row['req_joindate'] . "</td>";
                    echo "<td>".$row['pr_name'] . "</td>";
                    echo "<td>".$row['serial_no'] . "</td>";
                    echo "<td>".$row['asset_no'] . "</td>";
                    echo "<td>".$row['assetof'] . "</td>";
                    echo "<td><b><i>".$row['req_status'] . "</i></b></td>";
                    echo "<td>".$row['date'] . "</td>";
                    echo "<td align= ''>
                    <a href='#' data-toggle='modal' data-target='#update$row[id_req_item]' title='Edit'><span class='label label-success'>Edit</span></a>
                    <a href='#' data-toggle='modal' data-target='#delete$row[id_req_item]' title='Delete'><span class='label label-success'>Delete</span></a>
                    <a href='#' data-toggle='modal' data-target='#set_users$row[id_req_item]' title='set_users'><span class='label label-success'>Set Users</span></a>
                    </td>";
                    echo "</tr>";
                    ?>
                    <?php
                    $staff = mysql_query("SELECT * FROM tb_staff");

                    $product = mysql_query("SELECT * FROM tb_product");

                    $req = mysql_query("SELECT * FROM tb_request_item");
                    ?>
                    <!-- Update Transaction Page -->
                    <div class="modal fade" id="update<?php echo $row['id_req_item'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Transaction Page] </b> Update Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>UserName</label>
                                <input type="text" name="staff_username" class="form-control" placeholder="Username" value="<?php echo $row['staff_username'];?>" required >
                                <input type="hidden" name="id_req_item" class="form-control" placeholder="" value="<?php echo $row['id_req_item'];?>" required>
                              </div>
                              <div class="form-group">
                                <label>JoinDate</label>
                                <input type="date" name="req_joindate" class="form-control" placeholder="Join Date" value="<?php echo $row['req_joindate'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Product</label>
                                <select name="pr_name" class="form-control" required>
                                  <option value="<?= $row['pr_name'] ?>"><?= $row['pr_name'] ?></option>
                                  <option value=""></option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>S/N</label>
                                <input type="text" name="serial_no" class="form-control" placeholder="S/N" value="<?php echo $row['serial_no'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label> Asset No</label>
                                <input type="text" name="asset_no" class="form-control" placeholder="Asset No" value="<?php echo $row['asset_no'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Asset Of</label>
                                <select name="assetof" class="form-control" required>
                                <option value="<?php echo $row['assetof'];?>"><?php echo $row['assetof'];?></option>
                                <option value="Seafreight">Seafreight</option>
                                <option value="Airfreight">Airfreight</option>
                                <option value="PROM">PROM</option>
                                <option value="ContractLog.">ContractLog.</option>
                                <option value="Customs">Customs</option>
                                <option value="IT">IT</option>
                                <option value="NO BU">NO BU</option>
                              </select>
                              </div>
                              <div class="form-group">
                                <label>Status Option</label>
                                <select name="req_status" class="form-control" readonly>
                                  <option value="<?php echo $row['req_status'];?>"><?php echo $row['req_status'];?></option>
                                  <option value="Make New Users">Make Users</option>
                                  <option value="Temporary">Temporary</option>
                                  <option value="Back Up">Back Up</option>
                              </select>
                              </div>
                              <button type="submit" name="update" class="btn btn-default">Update</button>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Delete Transaction Page -->
                    <div class="modal fade" id="delete<?php echo $row['id_req_item'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Transaction Page] </b> Delete Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Are you sure delete this record?</label>
                                <h6>UserName : <?php echo $row['staff_username'];?></h6>
                                <input type="hidden" name="id_req_item" class="form-control" placeholder="client name" value="<?php echo $row['id_req_item'];?>" required>
                              </div>
                              <button type="submit" name="delete" class="btn btn-default">Yes</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Set User Transaction Page -->
                    <div class="modal fade" id="set_users<?php echo $row['id_req_item'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Transaction Page] </b> Set Users Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" name="id_req_item" class="form-control" placeholder="client name" value="<?php echo $row['id_req_item'];?>" required readonly>
                              </div>
                              <div class="form-group">
                                <label>UserName</label>
                                <input type="text" name="staff_username" class="form-control" placeholder="client name" value="<?php echo $row['staff_username'];?>" required readonly>
                              </div>
                              <div class="form-group">
                                <label>Asset Of</label>
                                <input type="text" name="assetof" class="form-control" placeholder="client name" value="<?php echo $row['assetof'];?>" required readonly>
                              </div>
                              <button type="submit" name="his_remark" value="Approve" class="btn btn-default">Approve</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Dicline</button>
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
          </section>
        </div><!-- /content-panel -->
      </div><!-- /col-lg-4 -->			
    </div><!-- /row -->
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
<!--main content end-->
</section>
<?php include 'include/thirdparty.php';?>
</body>
</html>

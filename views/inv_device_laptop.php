<?php

include "include/connection.php";
if(isset($_POST["submit"]))    
{    

$pr_id         = $_POST['pr_id'];
$his_task       = $_POST['his_task'];
$his_user       = $_POST['his_user'];
$his_product      = $_POST['his_product'];
$his_date_time  = $_POST['his_date_time'];
$his_remark     = $_POST['$his_remark'];

  $cek = mysql_query("SELECT * FROM tb_log_history WHERE pr_id ='$pr_id'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_log_history values(' ','$his_task','$his_user','$his_product','$his_date_time','$his_remark')");
    if ($query) {
      header("Location: ./user_list.php?ntf=1");  
    } else {
      header("Location: ./user_list.php?ntf=3");
    }
  } else {
    header("Location: ./user_list.php?ntf=2");
  }

} 

// if(isset($_POST["update"]))    
// {    
//   $cid                = $_POST['cid'];
//   $cname              = $_POST['cname'];
//   $caddress           = $_POST['caddress'];
//   $cphone             = $_POST['cphone'];
//   $pic                = $_POST['pic'];

//   $cek = mysql_query("SELECT * FROM tb_client WHERE client_id ='$cid'");
//   $num = mysql_num_rows($cek);
//   if($num == 1){
//     $query = mysql_query("update tb_client set client_address ='$caddress', client_phone = '$cphone' , client_pic = '$pic' where client_id='$cid'");
//     if($query){
//       header("Location: ./admin_clmanage.php");                                                  
//     } else {
//       echo "Updated Failed - Please contact your administrator";
//     }
//   } else {
//     echo "Records cannot be found!! Please contact your System Administrator" ;
//   }

// }

// if(isset($_POST['delete']))
// {

//   $cid                = $_POST['cid'];

//   echo $cid;

//   if($cid){
//     $query = mysql_query("DELETE FROM tb_client WHERE client_id = '$cid' ");
//     if($query){
//      header("Location: ./admin_clmanage.php");                    
//    } else {
//     echo "Operation Failed! Please contact your administrator".mysql_errno();
//   }
// } else {
//   echo "Operation Failed! Please contact your administrator".mysql_errno();
// }

// }

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
       <h3><i class="fa fa-angle-right"></i> DEVICE LAPTOP</h3>
       <?php include 'include/alert/success.php';?>
      <div class="row mt">
       <div class="col-lg-12">
        <div class="content-panel">
          <!-- <h4><i class="fa fa-angle-right"></i> Responsive Table</h4> -->
          <section id="unseen" style="padding: 10px">
            <table  id="example1" class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Product Brand</th>
                  <th>Product Purchase</th>
                  <th>S/N</th>
                  <th>Category</th>
                  <th>Asset</th>
                  <th>Monitoring</th>
                  <th>Status</th>
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

                $result = mysqli_query($con,"SELECT * FROM tb_product WHERE pr_category = 'Laptop' AND pr_status = 'Ready' AND monitoring = 'New Entry' ORDER BY pr_id ASC");

                if(mysqli_num_rows($result)>0){

                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>".$row['pr_id']."</td>";
                    echo "<td>".$row['pr_name'] . "</td>";
                    echo "<td>".$row['pr_brand'] . "</td>";
                    echo "<td>".$row['pr_purchase'] . "</td>";
                    echo "<td>".$row['pr_sn'] . "</td>";
                    echo "<td>".$row['pr_category'] . "</td>";
                    echo "<td>".$row['pr_asset_of'] . "</td>";
                    echo "<td>".$row['monitoring'] . "</td>";
                    echo "<td align= ''>
                    <a href='#' data-toggle='modal' data-target='#myModal$row[pr_id]' title='Edit'><span class='label label-success'>Edit</span></a>
                    <a href='#' data-toggle='modal' data-target='#delete$row[pr_id]' title='Delete'><span class='label label-success'>Delete</span></a>
                    </td>";
                    echo "</tr>";
                    ?>
                    <div class="modal fade" id="myModal<?php echo $row['pr_id'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Client List] </b> Update Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Client Name</label>
                                <input type="text" name="cname" class="form-control" placeholder="client name" value="<?php echo $row['client_name'];?>" required readonly>
                                <input type="hidden" name="cid" class="form-control" placeholder="client name" value="<?php echo $row['client_id'];?>" required>
                              </div>
                              <div class="form-group">
                                <label>Client Address</label>
                                <input type="text" name="caddress" class="form-control" placeholder="client address"  value="<?php echo $row['client_address'];?>" required>
                              </div>
                              <div class="form-group">
                                <label>Client Phone</label>
                                <input type="text" name="cphone" class="form-control" placeholder="client phone" value="<?php echo $row['client_phone'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>PIC</label>
                                <input type="text" name="pic" class="form-control" placeholder="PIC Name" value="<?php echo $row['client_pic'];?>"  required>
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

                    <div class="modal fade" id="delete<?php echo $row['client_id'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Client List] </b> Delete Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Are you sure delete this record?</label>
                                <h6>Client Name : <?php echo $row['client_name'];?></h6>
                                <input type="hidden" name="cid" class="form-control" placeholder="client name" value="<?php echo $row['client_id'];?>" required>
                              </div>
                              <button type="submit" name="delete" class="btn btn-default">Yes</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
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

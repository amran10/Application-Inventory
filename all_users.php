<?php

include "include/connection.php";
if(isset($_POST["submit"]))    
{    
  $user_id                    = $_POST['user_id'];
  $id_req                   = $_POST['id_req'];
  $pr_name                  = $_POST['pr_name'];
  $pr_purchase              = date('Y-m-d');
  $pr_sn                    = $_POST['pr_sn'];
  $department               = $_POST['department'];
  $pr_po_no                 = $_POST['pr_po_no'];
  $pr_status                = $_POST['pr_status'];
  $monitoring               = $_POST['monitoring'];
  $machine_id               = $_POST['machine_id'];
  $remark                   = $_POST['remark'];
  $status_label             = $_POST['status_label'];

  $cek = mysql_query("SELECT * FROM tb_product WHERE user_id='$user_id'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT INTO tb_product 
      (user_id, 
      id_req,
      pr_name,
      pr_purchase,
      pr_sn,
      department,
      pr_po_no,
      pr_status,
      monitoring,
      machine_id,
      remark,
      status_label) 
      VALUES 
      ('',
      '$id_req',
      '$pr_name',
      '$pr_purchase',
      '$pr_sn',
      '$department',
      '$pr_po_no',
      '$pr_status',
      '$monitoring',
      '$machine_id',
      '$remark',
      '$status_label')");

    if ($query) {
      header("Location: ./prod_list.php?ntf=1");  
    } else {
      header("Location: ./prod_list.php?ntf=3");
    }
  } else {
    header("Location: ./prod_list.php?ntf=2");
  }
} 

if(isset($_POST["update"]))    
{    
  $user_id                    = $_POST['user_id'];
  $id_req                   = $_POST['id_req'];
  $user_id                  = $_POST['user_id'];
  $pr_status                = $_POST['pr_status'];
  $pr_purchase              = $_POST['pr_purchase'];
  $pr_sn                    = $_POST['pr_sn'];
  $pr_po_no                 = $_POST['pr_po_no'];
  $monitoring               = $_POST['monitoring'];
  $remark                   = $_POST['remark'];
  $machine_id               = $_POST['machine_id'];
  $id_proset                = $_POST['id_proset'];

  $cek = mysql_query("SELECT * FROM tb_product WHERE user_id ='$user_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_product SET pr_name ='$pr_name', 
     pr_status = '$pr_status', 
     pr_purchase = '$pr_purchase', 
     pr_sn = '$pr_sn', 
     pr_po_no = '$pr_po_no', 
     pr_category ='$pr_category', 
     pr_asset_of = '$pr_asset_of', 
     pr_status = '$pr_status', 
     monitoring = '$monitoring', 
     crnt_user = '$crnt_user', 
     branch = '$branch', 
     remark = '$remark', 
     machine_id = '$machine_id', 
     no_barcode = '$no_barcode'
     WHERE user_id='$user_id'");

    if($query){
      header("Location: ./prod_list.php?ntf=");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST["AttachLabel"]))    
{    
  $user_id                    = $_POST['user_id'];
  $status_label             = $_POST['status_label'];

  $cek = mysql_query("SELECT * FROM tb_product WHERE user_id ='$user_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_product SET status_label ='$status_label'
     WHERE user_id='$user_id'");
    if($query){
      header("Location: ./prod_list.php?ntf=4");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST['delete']))
{
  $user_id = $_POST['user_id'];

  echo $user_id;

  if($user_id){
    $query = mysql_query("DELETE FROM tb_product WHERE user_id = '$user_id' ");
    if($query){
     header("Location: ./prod_list.php?ntf=3");                    
   } else {
    echo "Operation Failed! Please contact your administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your administrator".mysql_errno();
}

}

?>

<?php 
$department = mysql_query("SELECT * FROM tb_department");
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>
<link href="assets2/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets2/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
<body>
  <section id="container" >
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div align="center">
            <div class="sub-heard-part">
              <ol class="rebadcrumb m-b-0">
                <label><h4>Product Device</h4></label>
              </ol>
            </div>      
          </div>
        </div>
        <div align="right">
          <button class="btn btn-blue btn-block" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus-sign"></i> Add Product</button>
        </div>

        <!-- Modal Add Product -->
        <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>[Users Page] </b> Add Users</h4>
            </div>
            <div class="modal-body">
              <form method="post" action=" ">
                <div class="col-md-12">
                  <div class="col-md-6"><br><br>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="hidden" name="user_id" class="form-control">
                      <input type="text" name="user_name" class="form-control" placeholder="Username" required="required">
                      <input type="hidden" name="user_password" class="form-control" value="<?php echo $access['user_password'] ?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <input type="hidden" name="user_created" class="form-control" value="<?php echo (date('Y-m-d')) ?>">
                      <input type="text" name="user_role" class="form-control" placeholder="Role" required="required">
                    </div>
                    <div class="form-group">
                      <label>Region</label>
                      <input type="text" name="user_region" class="form-control" placeholder="Region" required="required">
                    </div>
                    <div class="form-group">
                      <label>Department</label>
                      <input type="text" name="user_dept" class="form-control" placeholder="Department" required="required">
                    </div>
                    <div class="form-group">
                      <label>Branch</label>
                      <input type="text" name="branch" class="form-control" placeholder="Branch" required="required">
                    </div>
                    <div class="form-group">
                      <label>Join Date</label>
                      <input type="date" name="jointdate" class="form-control">
                    </div>
                  </div>

                  <!-- 2nd colomn -->
                  <div class="col-md-6"><br><br>
                    <div class="form-group">
                      <label>NIK</label>
                      <input type="text" name="nik" class="form-control" placeholder="NIK">
                    </div>
                    <div class="form-group">
                      <label>Cost Center</label>
                      <input type="text" name="costcenter" class="form-control" placeholder="Ex : xxxxxxxx">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="emailuser" class="form-control" placeholder="Ex : xxxxxxxx">
                    </div>
                    <div class="form-group">
                      <label>KN Code</label>
                      <input type="text" name="kncode" class="form-control" placeholder="Ex : xxxxxxxx">
                    </div>
                    <div class="form-group">
                      <label>Status Users</label>
                      <select name="user_status" class="form-control">
                        <option value="">-- Select Status --</option>
                        <option value="Resign">Resign</option>
                        <option value="Leave">Leave</option>
                      </select>
                    </div><br>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-success btn-block">Save</button>
                <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Modal Add Product -->

      <!-- Page Table -->
      <div class="row mt">
       <div class="col-lg-12">
        <div class="content-panel">
          <?php include 'include/alert/success.php' ?>
          <section id="unseen" style="padding: 10px">
            <div class="table-responsive">
              <form id="frm-example" action="" method="POST">
                <table id="example1" class="table">
                  <thead>
                    <tr>
                      <th><i class="glyphicon glyphicon-sort"></i> ID Users</th>
                      <th><i class="glyphicon glyphicon-sort"></i> Username</th>  
                      <th><i class="glyphicon glyphicon-sort"></i> Password</th>
                      <!-- <th><i class="glyphicon glyphicon-sort"></i> Join Date</th>  -->
                      <th><i class="glyphicon glyphicon-sort"></i> Role</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Region</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Department</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Branch</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Join Date</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> NIK</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Cost Center</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Email</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> KNCode</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Status User</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Action</th> 
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

                    $result = mysqli_query($con,"SELECT * FROM tb_user ORDER BY user_id DESC");

                    if(mysqli_num_rows($result)>0){

                      while($row = mysqli_fetch_array($result))
                      {
                        echo "<tr>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['user_name'] . "</td>";
                        echo "<td>************</td>";
                        // echo "<td>" . $row['user_created'] . "</td>";
                        echo "<td>" . $row['user_role'] . "</td>";
                        echo "<td>" . $row['user_region'] . "</td>";
                        echo "<td>" . $row['user_dept'] . "</td>"; 
                        echo "<td>" . $row['branch'] . "</td>"; 
                        echo "<td>" . $row['jointdate'] . "</td>"; 
                        echo "<td>" . $row['nik'] . "</td>"; 
                        echo "<td>" . $row['costcenter'] . "</td>"; 
                        echo "<td>" . $row['emailuser'] . "</td>"; 
                        echo "<td>" . $row['kncode'] . "</td>"; 
                        echo "<td>" . $row['user_status'] . "</td>"; 
                        echo "<td align= ''>
                        <a href='#' data-toggle='modal' data-target='#myModal$row[user_id]' title='Edit'><span class='label label-primary'>Edit</span></a>
                        <a href='#' data-toggle='modal' data-target='#delete$row[user_id]' title='Delete'><span class='label label-primary'>Delete</span></a>
                        <a href='#' data-toggle='modal' data-target='#AttachLabel$row[user_id]' title='Attach Label'><span class='label label-primary'>Attach Label</span></a>
                        </td>";
                        echo "</tr>";
                        ?>
                        <div class="modal fade" id="myModal<?php echo $row['user_id'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><b>[Users List] </b> Update Users</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" action=" ">
                                  <div class="col-md-12">
                                    <div class="col-md-6"><br><br>
                                      <div class="form-group">
                                        <label>Username</label>
                                        <input type="hidden" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
                                        <input type="text" name="user_name" class="form-control" value="<?php echo $row['user_name'];?>"required="required">
                                        <input type="text" name="user_password" class="form-control" value="<?php echo $row['user_password']; ?>" required="required">
                                      </div>
                                      <div class="form-group">
                                        <label>Role</label>
                                        <input type="hidden" name="user_created" class="form-control" value="<?php echo $row['user_created']; ?>">
                                        <input type="text" name="user_role" class="form-control" value="<?php echo $row['user_role']; ?>" required="required">
                                      </div>
                                      <div class="form-group">
                                        <label>Region</label>
                                        <input type="text" name="user_region" class="form-control" value="<?php echo $row['user_region']; ?>" readonly="readonly">
                                      </div>
                                      <div class="form-group">
                                        <label>Department</label>
                                        <input type="text" name="user_dept" class="form-control" value="<?php echo $row['user_dept']; ?>" required="required">
                                      </div>
                                      <div class="form-group">
                                        <label>Branch</label>
                                        <input type="text" name="branch" class="form-control" value="<?php echo $row['branch']; ?>" required="required">
                                      </div>
                                      <div class="form-group">
                                        <label>Join Date</label>
                                        <input type="text" name="jointdate" class="form-control" value="<?php echo $row['jointdate']; ?>" readonly="readonly">
                                      </div>
                                    </div>

                                    <!-- 2nd colomn -->
                                    <div class="col-md-6"><br><br>
                                      <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" class="form-control" value="<?php echo $row['nik']; ?>" >
                                      </div>
                                      <div class="form-group">
                                        <label>Cost Center</label>
                                        <input type="text" name="costcenter" class="form-control" value="<?php echo $row['costcenter']; ?>" placeholder="Ex : xxxxxxxx">
                                      </div>
                                      <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="emailuser" class="form-control" value="<?php echo $row['emailuser']; ?>" placeholder="Ex : xxxxxxxx">
                                      </div>
                                      <div class="form-group">
                                        <label>KN Code</label>
                                        <input type="text" name="kncode" class="form-control" value="<?php echo $row['kncode']; ?>" placeholder="Ex : xxxxxxxx">
                                      </div>
                                      <div class="form-group">
                                        <label>Status Users</label>
                                        <select name="user_status" class="form-control">
                                          <option value="<?php echo $row['user_status']; ?>"><?php echo $row['user_status']; ?></option>
                                          <option value="">-- Select Status --</option>
                                          <option value="Resign">Resign</option>
                                          <option value="Leave">Leave</option>
                                        </select>
                                      </div><br>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" name="submit" class="btn btn-success btn-block">Update</button>
                                  <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="delete<?php echo $row['user_id'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><b>[Product List] </b> Delete Record</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" action=" ">
                                  <div class="form-group">
                                    <div align="center">
                                      <img src="assets/images/icons/JD-07-512.png" width="150px">
                                    </div>
                                    <label>Are you sure delete this record?</label>
                                    <h6>Product Name : <?php echo $row['user_id'];?></h6>
                                    <input type="hidden" name="user_id" class="form-control" placeholder="Product name" value="<?php echo $row['user_id'];?>" required>
                                  </div>
                                  <button type="submit" name="delete" class="btn btn-warning btn-block">Yes</button>
                                  <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">No</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="AttachLabel<?php echo $row['user_id'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><b>[Product List] </b> Delete Record</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" action=" ">
                                  <div class="form-group">
                                    <div align="center">
                                      <p>ID Product : <b><?php echo $row['user_id']; ?></b></p>
                                      <p>Name/Type Device : <b><?php echo $row['pr_name']; ?></b></p>
                                      <p>Serial Number : <b><?php echo $row['pr_sn']; ?></b></p>
                                      <p>Assets Department : <b><?php echo $row['department']; ?></b></p>
                                      <span class="btn btn-block btn-warning btn-lg"><i class="glyphicon glyphicon-qrcode"></i> 
                                        <?php echo $row['barcode'];?>-ID<?php echo $row['user_id'];?>
                                      </span>
                                      <input type="hidden" name="status_label" class="form-control" value="<?php echo $row['barcode'];?>-ID<?php echo $row['user_id'];?>">
                                      <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
                                    </div><br>
                                    <div class="modal-footer">
                                      <button type="submit" name="AttachLabel" class="btn btn-success btn-block">Attach Label</button>
                                      <button type="button" class="btn btn-default btn-block" data-dismiss="modal">No</button>
                                    </div>
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
                </form>
              </div>
            </section>
          </div><!-- /content-panel -->
        </div><!-- /col-lg-4 -->      
      </div><!-- /row -->
    </section><!--/wrapper -->
  </section><!-- /MAIN CONTENT -->
  <!--main content end-->
</section>
<?php include 'include/thirdpartselect.php';?>
<?php include 'include/thirdparty.php';?>
</body>
</html>

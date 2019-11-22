<?php

include "include/connection.php";
if(isset($_POST["submit"]))    
{    
  $pr_id                    = $_POST['pr_id'];
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

  $cek = mysql_query("SELECT * FROM tb_product WHERE pr_id='$pr_id'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT INTO tb_product 
      (pr_id, 
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
  $pr_id                    = $_POST['pr_id'];
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

  $cek = mysql_query("SELECT * FROM tb_product WHERE pr_id ='$pr_id'");
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
     WHERE pr_id='$pr_id'");

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
  $pr_id                    = $_POST['pr_id'];
  $status_label             = $_POST['status_label'];

  $cek = mysql_query("SELECT * FROM tb_product WHERE pr_id ='$pr_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_product SET status_label ='$status_label'
     WHERE pr_id='$pr_id'");
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
  $pr_id = $_POST['pr_id'];

  echo $pr_id;

  if($pr_id){
    $query = mysql_query("DELETE FROM tb_product WHERE pr_id = '$pr_id' ");
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
                <label><h4>Owner Device</h4></label>
              </ol>
            </div>      
          </div>
        </div>
       <!--  <div align="right">
          <button class="btn btn-blue btn-block" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus-sign"></i> Add Product</button>
        </div> -->

        <!-- Modal Add Product -->
        <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>[Products Page] </b> Add Product</h4>
            </div>
            <div class="modal-body">
              <form method="post" action=" ">
                <div class="col-md-12">
                  <div class="col-md-6"><br><br>
                    <div class="form-group">
                      <label>Name/Type Device</label>
                      <input type="hidden" name="pr_id" class="form-control">
                      <input type="text" name="pr_name" class="form-control" placeholder="Name/Type Device" required="required">
                      <input type="hidden" name="id_req" value="No Action" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Purchase Date</label>
                      <input type="Date" name="pr_purchase" class="form-control" >
                    </div>  
                    <div class="form-group">
                      <label>Serial Number</label>
                      <input type="text" name="pr_sn" class="form-control" placeholder="Ex : xxxxxxxx">
                    </div>
                    <div class="form-group">
                      <label>Assets Department</label>
                      <select name="department" class="js-example-placeholder-single form-control" style="width: 100%">
                        <option value="">-- SELECT --</option>
                        <?php 
                        while ($row = mysql_fetch_assoc($department)) {
                          ?>
                          <option value="<?= $row['department'] ?>"><?= $row['id_department'] ?> | <?= $row['department'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <!-- 2nd colomn -->
                  <div class="col-md-6"><br><br>
                    <div class="from-group">
                      <label>PO. NO</label>
                      <input type="text" name="pr_po_no" class="form-control" placeholder="Ex : xxxxxxxx">
                    </div>
                    <div class="from-group">
                      <label>Status</label>
                      <select name="pr_status" class="form-control" >
                        <option value="">--Select Status--</option>
                        <option value="Ready">Ready</option>
                        <option value="On Process">On Process</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Monitoring</label>
                      <select name="monitoring" class="form-control" >
                        <option value="">--Select Monitoring--</option>
                        <option value="New Entry">New Entry</option>
                        <option value="Service">Service</option>
                        <option value="Temporary">Temporary</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Machine ID</label>
                      <input type="text" name="machine_id" class="form-control" placeholder="Ex : xxxxxxxx">
                    </div>
                    <div class="form-group">
                      <label>Remarks</label>
                      <input type="text" name="remark" class="form-control" placeholder="Ex : xxxxxxxx">
                      <input type="hidden" name="barcode" class="form-control" value="FAIT-<?php echo (date('ym')); ?>">
                      <input type="hidden" name="status_label" class="form-control" value="No Action">
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
                      <th><i class="glyphicon glyphicon-sort"></i> ID Product</th>
                      <th><i class="glyphicon glyphicon-sort"></i> ID Request</th>
                      <th><i class="glyphicon glyphicon-sort"></i> Current Users</th>
                      <th><i class="glyphicon glyphicon-sort"></i> Name/Type Device</th>
                      <th><i class="glyphicon glyphicon-sort"></i> Serial Number</th>  
                      <th><i class="glyphicon glyphicon-sort"></i> Assets Department</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Status</th> 
                      <th><i class="glyphicon glyphicon-eye-open"></i> Monitoring</th>
                      <th><i class="glyphicon glyphicon-link"></i> Remarks</th>  
                      <th><i class="glyphicon glyphicon-sort"></i> Machine ID</th> 
                      <th><i class="glyphicon glyphicon-qrcode"></i> Barcode</th>
                      <th><i class="glyphicon glyphicon-cog"></i> Action</th> 
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

                    $result = mysqli_query($con,"SELECT tb_product.pr_id, 
                        tb_product.user_id, 
                        tb_product.id_req, 
                        tb_product.pr_status, 
                        tb_product.pr_purchase, 
                        tb_product.pr_name, 
                        tb_product.pr_sn, 
                        tb_product.pr_po_no, 
                        tb_product.monitoring, 
                        tb_product.machine_id, 
                        tb_product.department, 
                        tb_product.remark, 
                        tb_product.barcode, 
                        tb_product.status_label, 
                        tb_user.user_name,
                        tb_user.user_password,
                        tb_user.user_created,
                        tb_user.user_role,
                        tb_user.user_region,
                        tb_user.user_dept,
                        tb_user.branch,
                        tb_user.jointdate,
                        tb_user.nik,
                        tb_user.costcenter,
                        tb_user.emailuser,
                        tb_user.kncode,
                        tb_user.user_status,
                        tb_user.foto,
                        tb_user.user_name AS USERS
                        FROM tb_product
                        LEFT JOIN tb_user ON tb_product.user_id = tb_user.user_id WHERE tb_product.user_id is NOT NULL ORDER BY pr_id DESC");

                    if(mysqli_num_rows($result)>0){

                      while($row = mysqli_fetch_array($result))
                      {
                        echo "<tr>";
                        echo "<td>" . $row['pr_id'] . "</td>";
                        echo "<td>" . $row['id_req'] . "</td>";
                        echo "<td>" . $row['user_name'] . "</td>";
                        echo "<td>" . $row['pr_sn'] . "</td>";
                        echo "<td>" . $row['pr_name'] . "</td>";
                        echo "<td>" . $row['department'] . "</td>";
                        echo "<td>" . $row['pr_status'] . "</td>";
                        echo "<td>" . $row['monitoring'] . "</td>";
                        echo "<td>" . $row['remark'] . "</td>";
                        echo "<td>" . $row['machine_id'] . "</td>"; 
                        if ($row['status_label']=='No Action'){
                          echo "<td>No Action</td>";
                        }else{
                          echo "<td><span class='btn btn-warning'><i class='glyphicon glyphicon-qrcode'></i> ". $row['barcode'] . "-ID". $row['pr_id'] ."</span></td>";
                        }
                        echo "<td align= ''>
                        <a href='#' data-toggle='modal' data-target='#AttachLabel$row[pr_id]' title='Attach Label'><span class='label label-primary'>Attach Label</span></a>
                        </td>";
                        echo "</tr>";
                        ?>
                        <div class="modal fade" id="myModal<?php echo $row['pr_id'];?>" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><b>[Products List] </b> Update Record</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" action=" ">
                                  <div class="col-md-12">
                                    <div class="col-md-6"><br><br>
                                      <div class="form-group">
                                        <label>Name/Type Device</label>
                                        <input type="hidden" name="pr_id" class="form-control" value="<?php echo $row['pr_id']; ?>">
                                        <input type="text" name="pr_name" class="form-control" value="<?php echo $row['pr_name'];?>" placeholder="Name/Type Device" required="required">
                                        <input type="hidden" name="id_req" value="<?php echo $row['id_req']; ?>" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label>Purchase Date</label>
                                        <input type="Date" name="pr_purchase" class="form-control" value="<?php echo $row['pr_purchase']; ?>" required="required">
                                      </div>  
                                      <div class="form-group">
                                        <label>Serial Number</label>
                                        <input type="text" name="pr_sn" class="form-control" value="<?php echo $row['pr_sn']; ?>" placeholder="Ex : xxxxxxxx" required="required">
                                      </div>
                                      <div class="form-group">
                                        <label>Assets Department</label>
                                        <!-- <input type="text" name="department" class="form-control" value="<?php echo $row['department']; ?>" readonly="readonly"> -->
                                        <select class="form-control" name="department" required="required">
                                          <option value="<?php echo $row['department']; ?>"><?php echo $row['department']; ?></option>
                                          <option value="">-- Select Department</option>
                                          <option value="CI Department">CI Department</option>
                                          <option value="Airfreight Import">Airfreight Import</option>
                                          <option value="Airfreight Export">Airfreight Export</option>
                                          <option value="Customs Department">Customs Department</option>
                                          <option value="Finance">Finance</option>
                                          <option value="Sales Airfreight">Sales Airfreight</option>
                                          <option value="Sales Seafreight">Sales Seafreight</option>
                                          <option value="Sales Support"> Sales Support</option>
                                          <option value="Seafreight Export Nike">Seafreight Export Nike</option>
                                          <option value="Seafreight Export Adidas">Seafreight Export Adidas</option>
                                          <option value="Seafreight Export General">Seafreight Export General</option>
                                          <option value="Seafreight Import General">Seafreight Import General</option>
                                          <option value="Seafreight OKAM">Seafreight OKAM</option>
                                        </select>
                                      </div>
                                    </div>

                                    <!-- 2nd colomn -->
                                    <div class="col-md-6"><br><br>
                                      <div class="from-group">
                                        <label>PO. NO</label>
                                        <input type="text" name="pr_po_no" class="form-control" value="<?php echo $row['pr_po_no']; ?>" required="required">
                                      </div>
                                      <div class="from-group">
                                        <label>Status</label>
                                        <select name="pr_status" class="form-control" required="required">
                                          <option value="<?php echo $row['pr_status']; ?>"><?php echo $row['pr_status']; ?></option>
                                          <option value="">--Select Status--</option>
                                          <option value="Ready">Ready</option>
                                          <option value="On Process">On Process</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label>Monitoring</label>
                                        <select name="monitoring" class="form-control" required="required">
                                          <option value="<?php echo $row['monitoring']; ?>"><?php echo $row['monitoring']; ?></option>
                                          <option value="">--Select Monitoring--</option>
                                          <option value="New Entry">New Entry</option>
                                          <option value="Service">Service</option>
                                          <option value="Temporary">Temporary</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label>Machine ID</label>
                                        <input type="text" name="machine_id" class="form-control" value="<?php echo $row['machine_id']; ?>" >
                                      </div>
                                      <div class="form-group">
                                        <label>Remarks</label>
                                        <input type="text" name="remark" class="form-control" value="<?php echo $row['remark']; ?>" placeholder="Ex : xxxxxxxx">
                                        <input type="hidden" name="barcode" class="form-control" value="FAIT-<?php echo (date('ym')); ?>">
                                        <input type="hidden" name="status_label" class="form-control" value="<?php echo $row['status_label']; ?>" readonly>
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

                        <div class="modal fade" id="delete<?php echo $row['pr_id'];?>" role="dialog">
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
                                    <h6>Product Name : <?php echo $row['pr_id'];?></h6>
                                    <input type="hidden" name="pr_id" class="form-control" placeholder="Product name" value="<?php echo $row['pr_id'];?>" required>
                                  </div>
                                  <button type="submit" name="delete" class="btn btn-warning btn-block">Yes</button>
                                  <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">No</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal fade" id="AttachLabel<?php echo $row['pr_id'];?>" role="dialog">
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
                                      <p>ID Product : <b><?php echo $row['pr_id']; ?></b></p>
                                      <p>Name/Type Device : <b><?php echo $row['pr_name']; ?></b></p>
                                      <p>Serial Number : <b><?php echo $row['pr_sn']; ?></b></p>
                                      <p>Assets Department : <b><?php echo $row['department']; ?></b></p>
                                      <span class="btn btn-block btn-warning btn-lg"><i class="glyphicon glyphicon-qrcode"></i> 
                                        <?php echo $row['barcode'];?>-ID<?php echo $row['pr_id'];?>
                                      </span>
                                      <input type="hidden" name="status_label" class="form-control" value="<?php echo $row['barcode'];?>-ID<?php echo $row['pr_id'];?>">
                                      <input type="hidden" name="pr_id" value="<?php echo $row['pr_id'];?>">
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

<?php
include "include/connection.php";
if(isset($_POST["submit"]))    
{    
  $id_req_item              = $_POST['id_req_item'];
  $user_name                = $_POST['user_name'];
  $pr_status                = $_POST['pr_status'];
  $pr_purchase              = $_POST['pr_purchase'];
  $pr_sn                    = $_POST['pr_sn'];
  $pr_po_no                 = $_POST['pr_po_no'];
  $monitoring               = $_POST['monitoring'];
  $remark                   = $_POST['remark'];
  $machine_id               = $_POST['machine_id'];
  $pr_name                = $_POST['pr_name'];
  $barcode                  = $_POST['barcode'];
  $department               = $_POST['department'];

  if($num == 0){
    $query = mysql_query("INSERT into tb_product (pr_id, id_req_item, user_name, pr_status, pr_purchase, pr_sn, 
      pr_po_no, monitoring, remark, machine_id, pr_name, barcode, department) 
      VALUES 
      ('','$id_req_item','$user_name','$pr_status','$pr_purchase',
      '$pr_sn','$pr_po_no','$monitoring','$remark','$machine_id','$pr_name','$barcode','$department')");
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
  $id_req_item              = $_POST['id_req_item'];
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
     header("Location: ./prod_list.php?ntf=4");                    
   } else {
    echo "Operation Failed! Please contact your administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your administrator".mysql_errno();
}

}

?>

<?php 
$users = mysql_query("SELECT * FROM tb_user");
$type = mysql_query("SELECT * FROM tb_type");
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
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div align="center">
            <div class="sub-heard-part">
              <ol class="breadcrumb m-b-0">
               <li><a href="#"><h4>Product Users</a></h4></li>
             </ol>
           </div>      
         </div>
       </div>
       <!-- <div class="col-md-12">
        <div class="box box-default">
          <div class="box-header with-border">
            <i class="glyphicon glyphicon-search"></i>
            <h5 class="box-title">Sreach Data</h5>
          </div>
          <div class="box-body">
            <div class="col-lg-3">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Sreach Serial Number...">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Sreach Current Users...">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Sreach Machine ID...">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Sreach QRCode...">
              </div>
            </div><br><br><br><br>
            <div>
              <button type="button" class="btn btn-primary btn-block">Sreach</button>
            </div>
          </div>
        </div>
      </div> -->
      <?php include 'include/alert/success.php';?>
      <!-- <p align="right"><button class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal"> +Add Product Users </button> -->
       <!-- <button class="btn btn-default" data-toggle="modal" data-target="#myModalCSV"> Upload CSV </button></p> -->
       <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>[Products List] </b> Create Record</h4>
            </div>
            <div class="modal-body">
              <form method="post" action=" ">
                <div class="col-md-12">
                  <div class="col-md-6"><br><br>
                    <div class="form-group">
                      <label>Username</label>
                      <select name="user_name" class="js-example-placeholder-single form-control" style="width: 100%">
                        <option value="">-- SELECT --</option>
                        <?php 
                        while ($row = mysql_fetch_assoc($users)) {
                          ?>
                          <option value="<?= $row['user_name'] ?>"><?= $row['user_id'] ?> | <?= $row['user_name'] ?></option>
                        <?php } ?>
                      </select>
                      <!-- <input type="hidden" name="pr_id" class="form-control" value="<?php echo $row['pr_id']; ?>" > -->
                    </div>
                    <div class="form-group">
                      <label>Name/Type Device</label>
                      <select name="pr_name" class="js-example-placeholder-single form-control" style="width: 100%">
                        <option value="">-- SELECT --</option>
                        <?php 
                        while ($row = mysql_fetch_assoc($type)) {
                          ?>
                          <option value="<?= $row['pr_name'] ?>"><?= $row['id_proset'] ?> | <?= $row['pr_name'] ?></option>
                        <?php } ?>
                      </select>
                      <input type="hidden" name="id_req_item" class="form-control" value="-" >
                      <!-- <input type="hidden" name="pr_id" class="form-control" value="<?php echo $row['pr_id']; ?>" > -->
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
                      <label>Department</label>
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
                        <option>--Select Status--</option>
                        <option value="In Use">In Use</option>
                        <option value="Ready">Ready</option>
                        <option value="On Process">On Process</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Monitoring</label>
                      <select name="monitoring" class="form-control" >
                        <option>--Select Monitoring--</option>
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
                    </div><br>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row mt">
       <div class="col-lg-12">
        <div class="content-panel">
          <!-- <h4><i class="fa fa-angle-right"></i> Responsive Table</h4> -->
          <section id="unseen" style="padding: 1px">
              <!-- <div class="input-group margin">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-info btn-flat" type="button"><i class="glyphicon glyphicon-search"></i> Sreach</button>
                </span>
              </div> --><!-- /input-group -->
              <div class="table-responsive">
                <table id="example1" class="table">
                  <thead>
                    <tr>
                      <th>
                        <input id='select_all' name='select_all' type='checkbox' onchange='selectAll()' />
                      </th>
                      <!-- <th>No.</th> -->
                      <th><i class="glyphicon glyphicon-sort"></i> ID</th>
                      <!-- <th>Name/Type Device</th> -->
                      <!-- <th>Purc. Date</th> -->
                      <th><i class="glyphicon glyphicon-sort"></i> Serial Number</th>  
                      <th><i class="glyphicon glyphicon-sort"></i> PO NO.</th> 
                      <th><i class="glyphicon glyphicon-sort"></i> Status</th> 
                      <th><i class="glyphicon glyphicon-eye-open"></i> Monitoring</th>
                      <th><i class="glyphicon glyphicon-users"></i> Current Users</th>
                      <th><i class="glyphicon glyphicon-link"></i> Remarks</th>  
                      <th><i class="glyphicon glyphicon-sort"></i> Machine ID</th> 
                      <th><i class="glyphicon glyphicon-qrcode"></i> Barcode</th>
                      <!-- <th><i class="glyphicon glyphicon-sort"></i> Status Label</th>  -->
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

                    $page_size = 10;
                    if (!empty($_GET['page']) && $_GET['page'] != 1) {
                      $page = $page_size*($_GET['page']-1);
                    } else {
                      $page = 0;
                    }
                    $result = mysqli_query($con,"SELECT tb_product.pr_id, 
                      tb_product.user_id, 
                      tb_product.pr_status, 
                      tb_product.pr_purchase, 
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
                      LEFT JOIN tb_user ON tb_product.user_id = tb_user.user_id ORDER BY pr_id LIMIT $page_size OFFSET $page");

                    $jumlah = mysqli_num_rows($result);
                    if($jumlah>0){
                      $no = $page;
                      while($row = mysqli_fetch_array($result))
                      {
                        $no++;
                        echo "<tr>";
                        echo "<td><input name='pick[]' value='".$row['pr_id']."' type='checkbox' ".(!empty($row['user_id']) ? 'checked readonly' : '')." /></td>";
                          // echo "<td>" . $no . ".</td>";
                        echo "<td>" . $row['pr_id'] . "</td>";
                          // echo "<td>" . $row['pr_name'] . "</td>";
                          // echo "<td>" . $row['pr_purchase'] . "</td>";
                        echo "<td>" . $row['pr_sn'] . "</td>";
                        if ($row['pr_po_no']=='-'){
                          echo "<td style='background-color: #F0FFFF;'>PO has not been entered</td>";
                        }else{
                          echo "<td>".$row['pr_po_no'] . "</td>";
                        }
                        echo "<td>" . $row['pr_status'] . "</td>";
                        echo "<td>" . $row['monitoring'] . "</td>";
                        // echo "<td>" . $row['USERS'] . "</td>";
                        echo "<td>" . $row['user_name'] . "</td>";
                        echo "<td>" . $row['remark'] . "</td>";
                        echo "<td>" . $row['machine_id'] . "</td>"; 
                        // echo "<td>" . $row['barcode'] . "-ID". $row['pr_id'] ."</td>"; 
                        if ($row['status_label']=='No Action'){
                          echo "<td>No Action</td>";
                        }else{
                          echo "<td><span class='btn btn-warning'><i class='glyphicon glyphicon-qrcode'></i> ". $row['barcode'] . "-ID". $row['pr_id'] ."</span></td>";
                        }
                          // echo "<td>" . $row['status_label']. "</td>"; 
                        // echo "<td>FAIT-" . date('ym') . "-ID". $row['pr_id'] ."</td>"; 
                        // echo "<td>" . $row['no_barcode'] . "</td>"; 
                        echo "<td align= ''>
                        <a href='#' data-toggle='modal' data-target='#myModal$row[pr_id]' title='Edit'><span class='label label-primary'>Edit</span></a>
                        <a href='#' data-toggle='modal' data-target='#delete$row[pr_id]' title='Delete'><span class='label label-primary'>Delete</span></a>
                        <a href='#' data-toggle='modal' data-target='#detail$row[pr_id]' title='Detail'><span class='label label-primary'>Detail</span></a>
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
                                        <label>Username</label>
                                        <select name="user_id" class="js-example-placeholder-single form-control" style="width: 100%">
                                          <option><?php echo $row['user_id'];?></option>
                                          <option>--Select Username--</option>
                                          <?php
                                          mysql_connect('localhost', 'root', '');
                                          mysql_select_db('inventory');
                                          $resultusers=mysql_query("SELECT * FROM tb_user ORDER BY user_id ASC");
                                          while($username=mysql_fetch_array($resultusers)) { ?>
                                            <!-- echo "<option value='$username[uk_name]'> $username[uk_name] </option>"; -->
                                            <option value="<?php echo $username['user_id']; ?> | <?php echo $username['user_name']; ?>"><?php echo $username['user_id']; ?> | <?php echo $username['user_name']; ?></option>
                                            <?php
                                          }
                                          ?>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label>Name/Type Device</label>
                                        <select name="user_dept" class="js-example-placeholder-single form-control"  style="width: 100%">
                                          <option><?php echo $row['user_dept'];?></option>
                                          <option>--Select Name/Type Device--</option>
                                          <?php
                                          mysql_connect('localhost', 'root', '');
                                          mysql_select_db('inventory');
                                          $resulttype=mysql_query("SELECT * FROM tb_type ORDER BY id_proset ASC");
                                          while($nametype=mysql_fetch_array($resulttype)) { ?>
                                            <!-- echo "<option value='$nametype[uk_name]'> $nametype[uk_name] </option>"; -->
                                            <option value="<?php echo $nametype['pr_name']; ?>"><?php echo $nametype['id_proset']; ?> | <?php echo $nametype['pr_name']; ?></option>
                                            <?php
                                          }
                                          ?>
                                        </select>
                                        <input type="hidden" name="id_req_item" class="form-control" value="-" >
                                        <!-- <input type="hidden" name="pr_id" class="form-control" value="<?php echo $row['pr_id']; ?>" > -->
                                      </div>
                                      <div class="form-group">
                                        <label>Purchase Date</label>
                                        <input type="Date" name="pr_purchase" class="form-control" >
                                      </div>  
                                      <div class="form-group">
                                        <label>Serial Number</label>
                                        <input type="text" name="pr_sn" class="form-control" placeholder="Ex : xxxxxxxx">
                                      </div>
                                      <div class="from-group">
                                        <select name="department" class="js-example-placeholder-single form-control"  style="width: 100%">
                                          <option>--Select Department--</option>
                                          <?php
                                          mysql_connect('localhost', 'root', '');
                                          mysql_select_db('inventory');
                                          $resultdepartment=mysql_query("SELECT * FROM tb_department ORDER BY id_department ASC");
                                          while($department=mysql_fetch_array($resultdepartment)) { ?>
                                            <!-- echo "<option value='$department[uk_name]'> $department[uk_name] </option>"; -->
                                            <option value="<?php echo $department['department']; ?>"><?php echo $department['id_department']; ?> | <?php echo $department['department']; ?></option>
                                            <?php
                                          }
                                          ?>
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
                                        <select name="pr_status" class="js-example-placeholder-single form-control"  style="width: 100%">
                                          <option value="<?php echo $row['pr_status']; ?>"><?php echo $row['pr_status']; ?></option>
                                          <option>--Select Status--</option>
                                          <option value="In Use">In Use</option>
                                          <option value="Ready">Ready</option>
                                          <option value="On Process">On Process</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label>Monitoring</label>
                                        <select name="monitoring" class="form-control" >
                                          <option>--Select Monitoring--</option>
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
                                      </div><br>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" name="update" class="btn btn-success">Update</button>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                                  <div class="modal-footer">
                                    <button type="submit" name="delete" class="btn btn-success">Yes</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                  </div>
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
                                      <!-- <img src="assets/images/icons/JD-07-512.png" width="150px">
                                      </div> -->
                                      <!-- <label>Are you sure delete this record?</label> -->
                                      <!-- <h6>Product Name : <?php echo $row['pr_id'];?></h6> -->
                                      <span class="btn btn-block btn-warning btn-lg"><i class="glyphicon glyphicon-qrcode"></i> 
                                        <?php echo $row['barcode'];?>-ID<?php echo $row['pr_id'];?>
                                      </span>
                                      <input type="hidden" name="status_label" class="form-control" value="<?php echo $row['barcode'];?>-ID<?php echo $row['pr_id'];?>">
                                    </div><br>
                                    <div class="modal-footer">
                                      <button type="submit" name="AttachLabel" class="btn btn-success">Yes</button>
                                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } } ?>
                      </tbody>
                    </table>
                    <div class="dataTables_paginate paging_bootstrap">
                      <ul class="pagination">
                        <li class="prev <?= !empty($_GET['page']) && $_GET['page'] == 1 ? 'disabled' : '' ?>">
                          <a href="?ntf=0&page=<?= !empty($_GET['page']) ? ($_GET['page'] == 1 ? $_GET['page'] : $_GET['page']-1) : 1 ?>">← Previous</a>
                        </li>
                        <?php 
                        $get = mysqli_query($con,"SELECT COUNT(pr_id) AS jumlah FROM tb_product ORDER BY pr_id DESC");
                        $get_jumlah = mysqli_fetch_array($get);
                        $count_page = ceil($get_jumlah['jumlah']/10);
                        $count_i = !empty($_GET['page']) ? ($_GET['page'] == $count_page ? ($count_page > 4 ? $_GET['page']-5 : 0) : $_GET['page']-1) : 0;
                        $count_for = !empty($_GET['page']) && $_GET['page'] == $count_page ? ($count_page > 4 ? $count_page : 1) : (($_GET['page']+5) > $count_page ? $count_page : $_GET['page']+5);
                        for ($i=$count_i; $i < $count_for; $i++) { 
                          ?>
                          <li class="<?= !empty($_GET['page']) && $_GET['page'] == $i+1 ? 'active' : '' ?>">
                            <a href="?ntf=0&page=<?= $i+1 ?>"><?= $i+1 ?></a>
                          </li>
                        <?php } ?>
                        <li class="next <?= !empty($_GET['page']) && $_GET['page'] == $count_page ? 'disabled' : '' ?>">
                          <a href="?ntf=0&page=<?= !empty($_GET['page']) ? ($_GET['page'] == $count_page ? $_GET['page'] : $_GET['page']+1) : 1 ?>">Next → </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </section>
            </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->      
        </div><!-- /row -->
      </section><!--/wrapper -->
    </section><!-- /MAIN CONTENT -->
  </section>
  <?php include 'include/thirdpartselect.php';?>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="assets/js/common-scripts.js"></script>
  <script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
  <script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
  <script>
    $("#datetime").datetimepicker({
      format: 'yyyy-mm-dd hh:ii'
    });
  </script>
  <script type="text/javascript">
  // $(function () {
  //   $('#example').dataTable({
  //     'bSort': true,
  //     'processing': true,
  //     'paging': false
  //   });
  // });

  function selectAll() {
    var select = document.getElementById("select_all");
    var pick = document.getElementsByName("pick[]");
    var jml = pick.length;
    var b = 0;
    for (b = 0;b < jml;b++) {
      if (select.checked) {
        pick[b].checked = true;
      } else {
        pick[b].checked = false;
      }
    }
  }
</script>
</body>
</html>

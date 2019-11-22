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
<!DOCTYPE HTML>
<html>
<?php include 'include/head.php';?>
<body class="cbp-spmenu-push">
  <div class="main-content">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <!-- main content start-->
      <div id="page-wrapper">
      <div class="main-page">
       <!-- <?php include 'include/alert/success.php';?> -->
      <div class="row mt">
        <div class="col-lg-12">
          <div class="col-lg-12">
            <div class="content-panel" style="padding: 10px">
              <form method="post" action=" ">
                <div class="form-group"> 
                  <label>Search by Product Name</label>
                  <input type="text" name="pr_nm" class="form-control" placeholder="input Product Name"> 
                </div>
                <div align="center"><b>OR</b></div>
                <div class="form-group"> 
                  <label>Search by Serial No.</label>
                  <input type="text" name="sn" class="form-control" placeholder="input Serial no.">
                  <!-- <input type="hidden" name="pr_sn" class="form-control" value="0" placeholder="input Product Name"> -->
                  <button class="form-control btn btn-primary" name="search1" value="search1" type="submit">Search!</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="content-panel" style="padding: 10px">
              <!--<label>Search by Serial No.</label>
               <form method="get" action=" ">
                <div class="form-group">                  
                  <input type="text" name="pr_sn" class="form-control" placeholder="input Serial no.">
                  <input type="hidden" name="pr_name" class="form-control" value="0" placeholder="input Product Name">
                  <button class="form-control btn btn-primary" name="search2" value="search2" type="submit">Search!</button>
                </div>
              </form> -->
            </div>
          </div>
        </div>
      </div>
        <div class="tables">
          <!-- <h2 class="title1">Tables</h2> -->
          <div class="panel-body widget-shadow">
            <!-- <?php include 'include/alert/success.php';?> -->
            <h4>Transaction</h4>
            <!-- <input id="myInput" type="text" placeholder="Search.."> -->
            <!-- <br><br> -->
            <table id="table_id" class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>UserID</th>
                  <th>Product Name</th>
                  <th>Product Brand</th>
                  <th>Product Pruchase</th>
                  <th>S/N</th>
                  <th>PO No.</th>
                  <th>Category</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="myTable">
               <?php
               // $pr_sn = $_GET['pr_sn'];
               // $pr_name = $_GET['pr_name'];
                $con=mysqli_connect("localhost","root","","inventory");
                        // Check connection
                if (mysqli_connect_errno())
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result = mysqli_query($con,"SELECT * FROM tb_product ". (($query1 != '') ? " where $query1 " : "where pr_id is null and pr_status='Ready'") );
                // $result = mysqli_query($con,"SELECT * FROM tb_product WHERE pr_name LIKE '%query1%' OR pr_sn LIKE '%$query1%'");

                if(mysqli_num_rows($result)>0){
                    $no=0;
                  while($row = mysqli_fetch_array($result))
                  {
                    $no++;
                    echo "<tr>";
                    echo "<td><b>" .$no. ".</b></td>";
                    echo "<td>".$row['pr_id']."</td>";
                    echo "<td>".$row['pr_name'] . "</td>";
                    echo "<td>".$row['pr_brand'] . "</td>";
                    echo "<td>".$row['pr_purchase'] . "</td>";
                    echo "<td>".$row['pr_sn'] . "</td>";
                    echo "<td>".$row['pr_po_no'] . "</td>";
                    echo "<td>".$row['pr_category'] . "</td>";
                    echo "<td>".$row['pr_status'] . "</td>";
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
                } else {
                  echo "<tr>";
                  echo "<td colspan='12' align='center'>"."<b>"."<i>" . "No Available Record" . "</i>". "</b>" . "</td>";
                  echo "</tr>";
                } 
                mysqli_close($con);
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php include 'include/footer.php';?>
</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );

$('.max.example .ui.normal.dropdown')
  .dropdown({
    maxSelections: 3
  })
;
$('.max.example .ui.special.dropdown')
  .dropdown({
    useLabels: false,
    maxSelections: 3
  })
</script>

<!-- <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<?php include 'include/thirdparty.php';?>
</html>
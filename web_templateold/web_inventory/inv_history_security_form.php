<?php

include "include/connection.php";

if(isset($_POST["Approve"]))    
{    
  $id_req_item     = $_POST['id_req_item'];
  $staff_username  = $_POST['staff_username'];
  $pr_name         = $_POST['pr_name'];
  $assetof         = $_POST['assetof'];
  $req_status      = $_POST['req_status'];
  $date            = date('Y-m-d H:i:s');

  $query = mysql_query("INSERT INTO tb_log_history (his_id,his_task, his_user, his_product, his_date_time, his_remark) VALUES 
                                                   ('','".$assetof."','".$staff_username."','".$pr_name."', '".$date."', 'Approve' )");
  $query .= mysql_query("UPDATE tb_request_item SET set_status = 'Approve' WHERE id_req_item ='$id_req_item'");
    if($query){
      header("Location: ./inv_tick_status_type.php?ntf=1");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
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
          <div class="tables">
          <!-- <h2 class="title1">Tables</h2> -->
          <div class="panel-body widget-shadow">
            <?php include 'include/alert/success.php';?>
            <h4>Status Request</h4>
            <!-- <input id="myInput" type="text" placeholder="Search.."> -->
            <!-- <br><br> -->
            <table id="table_id" class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>History ID</th>
                  <th>Username</th>
                  <th>Product Name</th>
                  <th>Date</th>
                  <!-- <th>S/N</th> -->
                  <!-- <th>PO NO.</th> -->
                  <th>Asset of</th>
                  <!-- <th>Status</th> -->
                  <th>Status</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>
              <tbody id="myTable">
                <?php
                $con=mysqli_connect("localhost","root","","inventory");
                // Check connection
                if (mysqli_connect_errno())
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con,"SELECT * FROM tb_log_history");

                if(mysqli_num_rows($result)>0){
                  $no=0;
                  while($row = mysqli_fetch_array($result))
                  {
                    $no++;
                    echo "<tr>";
                    echo "<td><b>" . $no . ".</b></td>";
                    echo "<td>" . $row['his_id'] . "</td>";
                    echo "<td>" . $row['his_user'] . "</td>";
                    echo "<td>" . $row['his_product'] . "</td>";
                    echo "<td>" . $row['his_date_time'] . "</td>";
                    // echo "<td>" . $row['serial_no'] . "</td>";
                    // echo "<td>" . $row['serial_no'] . "</td>";
                    echo "<td>" . $row['his_task'] . "</td>";
                    echo "<td><b><i>" . $row['his_remark'] . "</i></b></td>";
                    // echo "<td>" . $row['set_status'] . "</td>";
                    // echo "<td align= ''>
                    // <a href='#' data-toggle='modal' data-target='#Approve$row[id_req_item]' title='Approve'><span class='label label-success'>Approve</span></a>
                    // </td>";
                    echo "</tr>";
                 ?>
                <div class="modal fade" id="myModal<?php echo $row['id_req_item'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Products List] </b> Update Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="pname" class="form-control" placeholder="Product name" value="<?php echo $row['pr_name'];?>" required>
                                <input type="hidden" name="cid" class="form-control" placeholder="Product name" value="<?php echo $row['id_req_item'];?>" required>
                              </div>
                              <div class="form-group">
                                <label>Product Brand</label>
                                <input type="text" name="brand" class="form-control" placeholder="Purchase Date" value="<?php echo $row['pr_brand'];?>"  required>
                                <!-- <select name="brand" class="form-control" required="">
                                  <option value="<?php echo $row['pr_brand'];?>"><?php echo $row['pr_brand'];?></option>
                                  <option value="HP">HP</option>
                                  <option value="DELL">DELL</option>
                                  <option value="CANON">CANON</option>
                                  <option value="CISCO">CISCO</option>
                                  <option value="ACER">ACER</option>
                                  <option value="APPLE">APPLE</option>
                                </select> -->
                              </div>
                              <div class="form-group">
                                <label>Purchase Date</label>
                                <input type="Date" name="pdate" class="form-control" placeholder="Purchase Date" value="<?php echo $row['pr_purchase'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>S/N</label>
                                <input type="text" name="sn" class="form-control" placeholder="S/N" value="<?php echo $row['pr_sn'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>PO NO.</label>
                                <input type="text" name="po" class="form-control" placeholder="PO" value="<?php echo $row['pr_po_no'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Product Category</label>
                                <input type="Laptop" name="pr_category" class="form-control" value="<?php echo $row['pr_category'];?>" readonly="readonly">
                                <!-- <select name="category" class="form-control" required>
                                  <option value="<?php echo $row['pr_category'];?>"><?php echo $row['pr_category'];?></option>
                                  <option value="Laptop">Laptop</option>
                                  <option value="CPU/PC">CPU/PC</option>
                                  <option value="Monitor/LCD">Monitor/LCD</option>
                                  <option value="Server">Server</option>
                                  <option value="Phone">Phone</option>
                                </select> -->
                              </div>
                              <div class="form-group">
                                <label>Asset of</label>
                                <select name="asset" class="form-control" required>
                                  <option value="<?php echo $row['pr_asset_of'];?>"><?php echo $row['pr_asset_of'];?></option>
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
                                <label>Status</label>
                                <select name="pr_status" class="form-control" required>
                                  <option value="<?php echo $row['pr_status'];?>"><?php echo $row['pr_status'];?></option>
                                  <option value="In Use">In Use</option>
                                  <option value="Ready">Ready</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Status Monitoring</label>
                                <select name="monitoring" class="form-control" required>
                                  <option value="<?php echo $row['monitoring'];?>"><?php echo $row['monitoring'];?></option>
                                  <option value="New Entry">New Entry</option>
                                  <option value="Service">Service</option>
                                  <option value="Temporary">Temporary</option>
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
                    <div class="modal fade" id="Approve<?php echo $row['id_req_item'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Request List] </b> Approve Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Are you sure Approve this record?</label>
                                <h5>User Name : <?php echo $row['staff_username'];?></h5>
                                <input type="text" name="id_req_item" value="<?php echo $row['id_req_item'];?>">
                                <input type="hidden" name="staff_username" value="<?php echo $row['staff_username'];?>">
                                <h5>Product Name : <?php echo $row['pr_name'];?></h5>
                                <input type="hidden" name="pr_name" value="<?php echo $row['pr_name'];?>">
                                <h5>Asset of : <?php echo $row['assetof'];?></h5>
                                <input type="hidden" name="assetof" value="<?php echo $row['assetof'];?>">
                                <h5>Hardware : <?php echo $row['req_status'];?></h5>
                                <input type="hidden" name="req_status" value="<?php echo $row['req_status'];?>">
                              </div>
                              <button type="submit" name="Approve" class="btn btn-default">Approve</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Dicline</button>
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
</html>
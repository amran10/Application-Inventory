<?php

include "include/connection.php";
if(isset($_POST["submit"]))    
{    
  $pr_id                    = $_POST['pr_id'];
  $pr_name                  = $_POST['pr_name'];
  $pr_brand                 = $_POST['pr_brand'];
  $pr_purchase              = $_POST['pr_purchase'];
  $pr_sn                    = $_POST['pr_sn'];
  $pr_po_no                 = $_POST['pr_po_no'];
  $pr_category              = $_POST['pr_category'];
  $pr_asset_of              = $_POST['pr_asset_of'];
  $monitoring               = $_POST['monitoring'];
  $pr_status                = $_POST['pr_status'];
  $staff_id                 = $_POST['staff_id'];

  //var_dump($pr_name,$pr_brand,$pr_purchase,$pr_sn,$pr_po_no,$pr_category,$pr_asset_of,$monitoring,$pr_status);die();
  $cek = mysql_query("SELECT * FROM tb_product WHERE pr_id='$pr_id'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_product VALUES (' ','$pr_name','$pr_brand','$pr_purchase','$pr_sn','$pr_po_no','$pr_category','$pr_asset_of','$monitoring','$pr_status','$staff_id')");
    // var_dump($query);die();
    if ($query) {
      header("Location: ./inv_com_laptop.php?ntf=1");  
    } else {
      header("Location: ./inv_com_laptop.php?ntf=3");
    }
  } else {
    header("Location: ./inv_com_laptop.php?ntf=2");
  }
} 

if(isset($_POST["update"]))    
{    
  $cid                = $_POST['cid'];
  $pname              = $_POST['pname'];
  $brand              = $_POST['brand'];
  $pdate              = $_POST['pdate'];
  $sn                 = $_POST['sn'];
  $po                 = $_POST['po'];
  $category           = $_POST['category'];
  $asset              = $_POST['asset'];
  $monitoring         = $_POST['monitoring'];
  $pr_status          = $_POST['pr_status'];

  //var_dump($brand);die();
  $cek = mysql_query("SELECT * FROM tb_product WHERE pr_id ='$cid'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_product SET pr_name ='$pname', pr_brand = '$brand' , pr_purchase = '$pdate' , pr_sn = '$sn', pr_po_no = '$po', pr_category ='Laptop', pr_asset_of = '$asset', pr_status = '$pr_status', monitoring = '$monitoring' WHERE pr_id='$cid'");
    if($query){
      header("Location: ./inv_com_laptop.php?ntf=5");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST['delete']))
{
  $cid = $_POST['cid'];

  echo $cid;

  if($cid){
    $query = mysql_query("DELETE FROM tb_product WHERE pr_id = '$cid' ");
    if($query){
     header("Location: ./inv_com_laptop.php?ntf=4");                    
   } else {
    echo "Operation Failed! Please contact your administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your administrator".mysql_errno();
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
       <p align="right"><button class="btn btn-default" data-toggle="modal" data-target="#myModal"> +Add </button></p><br>
       <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>[Product List] </b> Add New Record</h4>
            </div>
            <div class="modal-body">
              <form method="post" action=" ">
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" name="pr_name" class="form-control" placeholder="" required>
                  <input type="hidden" name="staff_id" class="form-control" value="0" placeholder="" required>
                </div>
                <div class="form-group">
                  <label>Product Brand</label>
                  <input type="text" name="pr_brand" class="form-control" placeholder="" required>
                  <!-- <select name="pr_brand" class="form-control" required>
                    <option value="">--- SELECT ---</option>
                    <option value="HP">HP</option>
                    <option value="DELL">DELL</option>
                    <option value="CANON">CANON</option>
                    <option value="CISCO">CISCO</option>
                    <option value="ACER">ACER</option>
                    <option value="APPLE">APPLE</option>
                    <option value="SAMSUNG">SAMSUNG</option>
                  </select> -->
                </div>
                <div class="form-group">
                  <label>Purchase Date</label>
                  <input type="Date" name="pr_purchase" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>S/N</label>
                  <input type="text" name="pr_sn" class="form-control" required>
                </div>
                <div class="from-group">
                  <label>PO.No</label>
                  <input type="text" name="pr_po_no" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Product Category</label>
                  <input type="Laptop" name="pr_category" class="form-control" value="Laptop" readonly="readonly">
                  <!-- <select name="pr_category" class="form-control" required>
                    <option value="">--- SELECT ---</option>
                    <option value="Laptop">Laptop</option>
                    <option value="CPU/PC">CPU/PC</option>
                    <option value="Monitor/LCD">Monitor/LCD</option>
                    <option value="Server">Server</option>
                    <option value="Phone">Phone</option>
                  </select> -->
                </div>
                <div class="form-group">
                  <label>Asset of</label>
                  <select name="pr_asset_of" class="form-control" required>
                    <option value="">--- SELECT ---</option>
                    <option value="Seafreight">Seafreight</option>
                    <option value="Airfreight">Airfreight</option>
                    <option value="PROM">PROM</option>
                    <option value="ContractLog.">ContractLog.</option>
                    <option value="Customs">Customs</option>
                    <option value="IT">IT</option>
                    <option value="NO BU">NO BU</option>
                  </select>
                </div>
                <div class="from-group">
                  <label>Status</label>
                  <select name="pr_status" class="form-control" required>
                    <option value="">--- SELECT ---</option>
                    <option value="In Use">In Use</option>
                    <option value="Ready">Ready</option>
                  </select>
                </div><br>  
                <div class="form-group">
                  <label>Status Monitoring</label>
                  <select name="monitoring" class="form-control" required>
                    <option value="">--- SELECT ---</option>
                    <option value="New Entry">New Entry</option>
                    <option value="Service">Service</option>
                    <option value="Temporary">Temporary</option>
                  </select>
                </div><br>                          
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
        <div class="tables">
          <!-- <h2 class="title1">Tables</h2> -->
          <div class="panel-body widget-shadow">
            <?php include 'include/alert/success.php';?>
            <h4>Asset Laptop</h4>
            <!-- <input id="myInput" type="text" placeholder="Search..">
            <br><br> -->
            <table id="table_id" class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>ProductID</th>
                  <th>Name</th>
                  <th>Brand</th>
                  <th>Purc. Date</th>
                  <th>S/N</th>
                  <th>PO NO.</th>
                  <th>Categoty</th>
                  <th>Asset of</th>
                  <th>Status</th>
                  <th>Status Monitoring</th>
                  <th>Action</th>
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

                $result = mysqli_query($con,"SELECT * FROM tb_product WHERE pr_category = 'Laptop'");

                if(mysqli_num_rows($result)>0){
                  $no=0;
                  while($row = mysqli_fetch_array($result))
                  {
                    $no++;
                    echo "<tr>";
                    echo "<td><b>" . $no . ".</b></td>";
                    echo "<td>" . $row['pr_id'] . "</td>";
                    echo "<td>" . $row['pr_name'] . "</td>";
                    echo "<td>" . $row['pr_brand'] . "</td>";
                    echo "<td>" . $row['pr_purchase'] . "</td>";
                    echo "<td>" . $row['pr_sn'] . "</td>";
                    echo "<td>" . $row['pr_po_no'] . "</td>";
                    echo "<td>" . $row['pr_category'] . "</td>";
                    echo "<td>" . $row['pr_asset_of'] . "</td>";
                    echo "<td>" . $row['pr_status'] . "</td>";
                    echo "<td>" . $row['monitoring'] . "</td>";
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
                            <h4 class="modal-title"><b>[Products List] </b> Update Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" name="pname" class="form-control" placeholder="Product name" value="<?php echo $row['pr_name'];?>" required>
                                <input type="hidden" name="cid" class="form-control" placeholder="Product name" value="<?php echo $row['pr_id'];?>" required>
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
                                <label>Are you sure delete this record?</label>
                                <h6>Product Name : <?php echo $row['pr_name'];?></h6>
                                <input type="hidden" name="cid" class="form-control" placeholder="Product name" value="<?php echo $row['pr_id'];?>" required>
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
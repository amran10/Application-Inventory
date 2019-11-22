inv_user_cpu.php<?php

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
      header("Location: ./inv_com_cpu.php?ntf=1");  
    } else {
      header("Location: ./inv_com_cpu.php?ntf=3");
    }
  } else {
    header("Location: ./inv_com_cpu.php?ntf=2");
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
    $query = mysql_query("UPDATE tb_product SET pr_name ='$pname', pr_brand = '$brand' , pr_purchase = '$pdate' , pr_sn = '$sn', pr_po_no = '$po', pr_category ='$category', pr_asset_of = '$asset', pr_status = '$pr_status', monitoring = '$monitoring' WHERE pr_id='$cid'");
    if($query){
      header("Location: ./inv_com_cpu.php?ntf=5");                                                  
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
     header("Location: ./inv_com_cpu.php?ntf=4");                    
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
        <div class="tables">
          <!-- <h2 class="title1">Tables</h2> -->
          <div class="panel-body widget-shadow">
            <h4>Asset CPU/PC</h4>
            <!-- <input id="myInput" type="text" placeholder="Search.."> -->
            <!-- <br><br> -->
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

                $result = mysqli_query($con,"SELECT * FROM tb_product WHERE pr_category = 'CPU/PC'");

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
                    echo "</tr>";
                 ?>
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
<?php
include "include/connection.php";
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
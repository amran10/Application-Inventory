<?php
include "include/connection.php";
if(isset($_POST["submit"]))    
{

$id_req_item      = $_POST['id_req_item'];
$staff_username   = $_POST['staff_username'];
$pr_name          = $_POST['pr_name'];
$req_joindate     = $_POST['req_joindate'];
$serial_no        = $_POST['serial_no'];
$asset_no         = $_POST['asset_no'];
$assetof          = $_POST['assetof'];
$set_status       = $_POST['set_status'];
$req_status       = $_POST['req_status'];
$date             = date('Y-m-d h:i:sa');

$cek = mysql_query("SELECT * FROM tb_request_item WHERE id_req_item='$id_req_item'");
$num = mysql_num_rows($cek);
if($num == 0){
  $query = mysql_query("INSERT into tb_request_item (id_req_item,staff_username,pr_name,req_joindate,serial_no,asset_no,assetof,set_status,req_status,date) values (' ','$staff_username','$pr_name','$req_joindate','$serial_no','$asset_no','$assetof','$set_status','$req_status','$date')");
  // var_dump($query);die();  
  if ($query) {
      header("Location: ./inv_user_req_item.php?ntf=1");  
    } else {
      header("Location: ./inv_user_req_item.php?ntf=3");
    }
  } else {
    header("Location: ./inv_user_req_item.php?ntf=2");
  }
} 
?>

<?php
$staff = mysql_query("SELECT * FROM tb_staff");
$product = mysql_query("SELECT * FROM tb_product");
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
            <h2 class="title1">Request Users </h2>
            <div class="form-three widget-shadow">
              <form method="post" class="form-horizontal style-form">
                <div class="form-group">
                  <input type="hidden" name="id_req_item" class="form-control">
                  <input type="hidden" name="set_status" class="form-control" value="No Action">
                  <input type="hidden" name="date" class="form-control">
                  <label for="focusedinput" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control1" name="staff_username" id="focusedinput" placeholder="Username..">
                  </div>
                 <!--  <div class="col-sm-2">
                    <p class="help-block">Request Product</p>
                  </div> -->
                </div>
                <div class="form-group">
                <label for="disabledinput" class="col-sm-2 control-label">Asset</label>
                <div class="col-sm-8">
                    <select name="req_status" class="form-control" required>
                    <option value="">-- SELECT --</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Phone">Phone</option>
                    <option value="CPU/PC">CPU/PC</option>
                    <option value="LCD/Monitor">LCD/Monitor</option>
                    <option value="Server">Server</option>
                    <option value="Perangkat Komputer">Perangkat Komputer</option>
                  </select>
                </div>
                </div>
                <div class="form-group">
                  <label for="disabledinput" class="col-sm-2 control-label">Request Product</label>
                  <div class="col-sm-8">
                    <select name="pr_name" class="form-control" required>
                      <option value="">-- SELECT --</option>
                      <?php 
                        while ($row = mysql_fetch_assoc($product)) {
                      ?>
                        <option value="<?= $row['pr_name'] ?>"><?= $row['pr_name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">Join Date</label>
                  <div class="col-sm-8">
                    <input type="Date" class="form-control1" name="req_joindate" id="focusedinput" placeholder="Join Date..">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="Email" class="form-control1" name="asset_no" id="focusedinput" placeholder="@kuehne-nagel.com..">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">Asset Of</label>
                  <div class="col-sm-8">
                   <select name="assetof" class="form-control" required>
                      <option value="">-- SELECT --</option>
                      <option value="Seafreight">Seafreight</option>
                      <option value="Airfreight">Airfreight</option>
                      <option value="PROM">PROM</option>
                      <option value="ContractLog.">ContractLog.</option>
                      <option value="Customs">Customs</option>
                      <option value="IT">IT</option>
                      <option value="NO BU">NO BU</option>
                    </select>
                  </div>
                </div>
                <div align="center">
                  <button type="submit" name="submit" class="btn btn-default">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cencel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include 'include/footer.php';?>
</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>
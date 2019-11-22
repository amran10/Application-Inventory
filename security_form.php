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
      header("Location: ./request_main.php?ntf=1");  
    } else {
      header("Location: ./request_main.php?ntf=3");
    }
  } else {
    header("Location: ./request_main.php?ntf=2");
  }
} 
?>

<?php
$staff = mysql_query("SELECT * FROM tb_staff");
$product = mysql_query("SELECT * FROM tb_product");
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>
<body>
  <section id="container">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       <h3><i class="fa fa-angle-right"></i>Security Form Page</h3>       
       <?php include 'include/alert/success.php';?>
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form method="post" class="form-horizontal style-form">
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <input type="hidden" name="id_req_item" class="form-control">
                              <input type="hidden" name="set_status" class="form-control" value="No Action">
                              <input type="hidden" name="date" class="form-control">
                          <div class="col-sm-10">
                            <input type="text" name="staff_username" class="form-control" placeholder="Name" required>
                          </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">First Name</label>
                          <div class="col-sm-10">
                              <input type="text" name="asset_no" class="form-control" placeholder="First Name" required>
                          </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">KN-Code</label>
                          <div class="col-sm-10">
                              <input type="text" name="asset_no" class="form-control" placeholder="KN-Code" required>
                          </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">End of employment</label>
                          <div class="col-sm-10">
                              <input type="text" name="asset_no" class="form-control" placeholder="End of employment" required>
                          </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Request Product</label>
                              <div class="col-sm-10">
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
                                <label class="col-sm-2 col-sm-2 control-label">Join Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="req_joindate" class="form-control" required>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="asset_no" class="form-control" placeholder="@example.com" required>
                            </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Asset Of</label>
                            <div class="col-sm-10">
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
                            <!-- <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Status Option</label>
                            <div class="col-sm-10"> -->
                                <input type="hidden"  name="req_status" class="form-control" value="Request Users">
                                <!-- <select name="req_status" class="form-control" required>
                                  <option value="">-- SELECT --</option>
                                  <option value="Make New Users">Make Users</option>
                                  <option value="Temporary">Temporary</option>
                                  <option value="Back Up">Back Up</option>
                                </select> -->
                            <!-- </div>
                            </div> -->
                              <div align="right">
                              <button type="submit" name="submit" class="btn btn-default">Submit</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cencel</button>
                            </div>
                          </form>
                        </div>                 
                      </div>   
                    </div>
                  </div><!-- col-lg-12-->       
                </div><!-- /row -->
              </section>
            </div><!-- /content-panel -->
          </div><!-- /col-lg-4 -->      
        </div><!-- /row -->

  </section>
</section><!-- /MAIN CONTENT -->

<!--main content end-->
</section>

<?php include 'include/thirdparty.php';?>


</body>
</html>

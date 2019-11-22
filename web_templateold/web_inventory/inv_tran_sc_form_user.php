<?php
include "include/connection.php";
if(isset($_POST["submit"]))    
{

$id_sc                  = $_POST['id_sc'];
$sc_name                = $_POST['sc_name'];
$sc_first_name          = $_POST['sc_first_name'];
$sc_kn_code             = $_POST['sc_kn_code'];
$sc_end                 = date('Y-m-d H:i:s');
$sc_last_work           = date('Y-m-d H:i:s');
$sc_keys                = $_POST['sc_keys'];
$sc_desc                = $_POST['sc_desc'];
$sc_it_notebook         = $_POST['sc_it_notebook'];
$sc_it_serial_number    = $_POST['sc_it_serial_number'];

$sc_fax                 = $_POST['sc_fax'];
$sc_other_serial_number = $_POST['sc_other_serial_number'];
$sc_mobile_phone        = $_POST['sc_mobile_phone'];
$sc_mp_serial_number    = $_POST['sc_mp_serial_number'];
$sc_IMEI                = $_POST['sc_IMEI'];
$sc_bank                = $_POST['sc_bank'];
$sc_type_bank           = $_POST['sc_type_bank'];
$sc_limit_bank          = $_POST['sc_limit_bank'];
$sc_desc_eclectroninc   = $_POST['sc_desc_eclectroninc'];
$sc_type_eclectroninc   = $_POST['sc_type_eclectroninc'];
$sc_password            = $_POST['sc_password'];


$cek = mysql_query("SELECT * FROM tb_security_form WHERE id_sc='$id_sc'");
$num = mysql_num_rows($cek);
if($num == 0){
  $query = mysql_query("INSERT INTO tb_security_form (id_sc,sc_name,sc_first_name,sc_kn_code,sc_end,sc_last_work,sc_keys,sc_desc,sc_it_notebook,sc_it_serial_number,
                        sc_fax,sc_other_serial_number,sc_mobile_phone,sc_mp_serial_number,sc_IMEI,sc_bank,sc_type_bank,
                        sc_limit_bank,sc_desc_eclectroninc,sc_type_eclectroninc,sc_password) 
                        VALUES (' ','$sc_name','$sc_first_name','$sc_kn_code','$sc_end','$sc_last_work','$sc_keys','$sc_desc','$sc_it_notebook','$sc_it_serial_number',
                        '$sc_fax','$sc_other_serial_number','$sc_mobile_phone','$sc_mp_serial_number',
                        '$sc_IMEI','$sc_bank','$sc_type_bank','$sc_limit_bank',
                        '$sc_desc_eclectroninc','$sc_type_eclectroninc','$sc_password')");
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
            <div class="form-title">
              <h2>Security Form</h2>
            </div>
            <div class="form-three widget-shadow">
              <form method="post" class="form-horizontal style-form">
                <div class="form-group">
                  <!-- <input type="hidden" name="id_req_item" class="form-control">
                  <input type="hidden" name="set_status" class="form-control" value="No Action">
                  <input type="hidden" name="date" class="form-control"> -->
                  <div class="col-sm-6">
                    <label>Name</label>
                    <input type="text" class="form-control1" name="sc_name" id="focusedinput" placeholder="Name.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                    <label>First Name</label>
                    <input type="text" class="form-control1" name="sc_first_name" id="focusedinput" placeholder="First Name.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                    <label>KN-Code</label>
                    <input type="text" class="form-control1" name="sc_kn_code" id="focusedinput" placeholder="KN-Code.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                    <label>End of Employment</label>
                    <input type="date" class="form-control1" name="sc_end" id="focusedinput" placeholder="End of Employment.." readonly="readonly">
                  </div>
                  <div class="col-sm-6">
                    <label>Last Working Day</label>
                    <input type="date" class="form-control1" name="sc_last_work" id="focusedinput" placeholder="Last Working Day.." readonly="readonly">
                  </div>
                </div>
                <hr>
                <div class="form-group">
                  <div class="col-sm-1">
                    <label>A. Keys</label>
                  </div>
                  <div class="col-sm-6">
                    <label>Key Number</label>
                    <input type="text" class="form-control1" name="sc_keys" id="focusedinput" placeholder="Key Number.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-1">
                    <label>B. Badeg</label>
                  </div>
                  <div class="col-sm-6">
                    <label>Description</label>
                    <input type="text" class="form-control1" name="sc_desc" id="focusedinput" placeholder="Description.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-1">
                    <label>C. IT-Equipment</label>
                  </div>
                  <div class="col-sm-6">
                    <label>Notebook</label>
                    <input type="text" class="form-control1" name="sc_it_notebook" id="focusedinput" placeholder="Notebook.." readonly="readonly">
                    <label>Serial Number</label>
                    <input type="text" class="form-control1" name="sc_it_serial_number" id="focusedinput" placeholder="Serial Number.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-1">
                    <label>D. Other</label>
                  </div>
                  <div class="col-sm-3">
                    <label>FAX :</label>
                    <input type="text" class="form-control1" name="sc_fax" id="focusedinput" placeholder="FAX.." readonly="readonly">
                    <label>Serial Number</label>
                    <input type="text" class="form-control1" name="sc_other_serial_number" id="focusedinput" placeholder="Serial Number.." readonly="readonly">
                  </div>
                  <div class="col-sm-3">
                    <label>Mobile Phone :</label>
                    <input type="text" class="form-control1" name="sc_mobile_phone" id="focusedinput" placeholder="Mobile Phone.." readonly="readonly">
                    <label>Serial Number</label>
                    <input type="text" class="form-control1" name="sc_mp_serial_number" id="focusedinput" placeholder="Serial Number.." readonly="readonly">
                  </div>
                  <div class="col-sm-3">
                    <label>IMEI</label>
                    <input type="text" class="form-control1" name="sc_IMEI" id="focusedinput" placeholder="IMEI.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-1">
                    <label>E. Bank Authorization</label>
                  </div>
                  <div class="col-sm-2">
                    <label>Bank</label>
                    <input type="text" class="form-control1" name="sc_bank" id="focusedinput" placeholder="Bank.." readonly="readonly">
                  </div>
                  <div class="col-sm-2">
                    <label>Type</label>
                    <input type="text" class="form-control1" name="sc_type_bank" id="focusedinput" placeholder="Type.." readonly="readonly">
                  </div>
                  <div class="col-sm-2">
                    <label>Limit</label>
                    <input type="text" class="form-control1" name="sc_limit_bank" id="focusedinput" placeholder="Limit.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-1">
                    <label>F. Electronic Banking Authorization</label>
                  </div>
                  <div class="col-sm-4">
                    <label>Description</label>
                    <input type="text" class="form-control1" name="sc_desc_eclectroninc" id="focusedinput" placeholder="Description.." readonly="readonly">
                  </div>
                  <div class="col-sm-4">
                    <label>Type</label>
                    <input type="text" class="form-control1" name="sc_type_eclectroninc" id="focusedinput" placeholder="Type.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-1">
                    <label>G. IT - Authorization for</label>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="ACON" readonly="readonly"> ACON</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="CIEL" readonly="readonly"> CIEL</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="Airfreight GYQ" readonly="readonly"> Airfreight GYQ</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="LAN" readonly="readonly"> LAN</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="Email" readonly="readonly"> Email</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="KNLogin" readonly="readonly"> KNLogin</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="Vlog" readonly="readonly"> Vlog</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="KN Rate" readonly="readonly"> KN Rate</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="Bussiness Object" readonly="readonly"> Bussiness Object</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="AS 400" readonly="readonly"> AS 400</label></div>
                  </div>
                  <div class="col-sm-1">
                    <div class="checkbox-inline"><label><input type="checkbox" name="Internet" readonly="readonly"> Internet</label></div>
                  </div>
                  <div class="col-sm-3">
                    <label>Other</label>
                    <input type="text" class="form-control1" name="sc_others" id="focusedinput" placeholder="Other.." readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-1">
                    <label></label>
                  </div>
                  <div class="col-sm-4">
                    <label>Is the notebook secured with a password?<br>If yes. The password(s) has (have) to be noted here:</label>
                  </div>
                  <div class="col-sm-4">
                    <label>Password</label>
                    <input type="text" class="form-control1" name="sc_password" id="focusedinput" placeholder="Password.." readonly="readonly">
                  </div>
                </div><br><br>
                <!-- <div class="form-group">
                  <label for="inputPassword" class="col-sm-2 control-label">A.</label>
                  <div class="col-sm-8">
                    Key
                  </div>
                </div> -->
                <div align="center">
                  <!-- <button type="submit" name="submit" class="btn btn-default">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cencel</button> -->
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
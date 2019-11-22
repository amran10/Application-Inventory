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

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>
<body>
  <section id="container">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <!--main content start-->
    <section id="main-content">
     <?php include 'include/alert/success.php';?>
     <section class="wrapper">
      <div id="page-wrapper">
        <div class="main-page general"><br>
          <div align="center">
            <h1 class="centered" style="color: gray"><b>Inventory IT</b></h1><br>
            <div align="center">
              <ul class="sidebar-menu" id="nav-accordion">
                <p class="centered"><a href="index.php?ntf=0"><img src="images/logo.png" class="img-circle" width="200"></a></p><br>
                <h1 class="centered" style="color: gray"><b>Kuehne + Nagel <br> Indonesia</b></h1><br>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section><!-- /MAIN CONTENT -->
  <!--main content end-->
</section>
<?php include 'include/footer.php';?>
<?php include 'include/thirdparty.php';?>
</body>
</html>


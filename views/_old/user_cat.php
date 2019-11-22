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

  $cek = mysql_query("SELECT * FROM tb_product WHERE pr_sn ='$sn'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_product values(' ','$pname','$brand','$pdate','$sn','$po','$category','$asset','NewEntry')");
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
  $cid                = $_POST['cid'];
  $pname              = $_POST['pname'];
  $brand              = $_POST['brand'];
  $pdate              = $_POST['pdate'];
  $sn                 = $_POST['sn'];
  $po                 = $_POST['po'];
  $category           = $_POST['category'];
  $asset              = $_POST['asset'];

  //var_dump($brand);die();
  $cek = mysql_query("SELECT * FROM tb_product WHERE pr_id ='$cid'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("update tb_product set pr_name ='$pname', pr_brand = '$brand' , pr_purchase = '$pdate' , pr_sn = '$sn', pr_po_no = '$po', pr_category ='$category', pr_asset_of = '$asset' where pr_id='$cid'");
    if($query){
      header("Location: ./prod_list.php");                                                  
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
     header("Location: ./prod_list.php");                    
   } else {
    echo "Operation Failed! Please contact your administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your administrator".mysql_errno();
}

}

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>
<body>

  <section id="container" >
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       <h3><i class="fa fa-angle-right"></i> 404 NOT FOUND</h3>
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->

<!--main content end-->

</section>

<?php include 'include/thirdparty.php';?>


</body>
</html>

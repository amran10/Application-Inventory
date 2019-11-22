<?php
include "include/connection.php";

if (isset($_POST["submit"])) {  

  $uploaddir = 'Save/CSV/';
  $uploadfile = $uploaddir.date('Y-m-dHis');

  $query = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
  if ($query) {
    if (mysql_query("LOAD DATA LOCAL INFILE '$uploadfile'
      INTO TABLE tb_product
      FIELDS TERMINATED BY ','
      LINES TERMINATED BY '\n'
      IGNORE 1 LINES
      (pr_id,pr_name,pr_brand,pr_purchase,pr_sn,pr_category,pr_asset_of,monitoring,pr_status,branch,machine_id,no_barcode,crnt_user)")) {
// var_dump($_POST);die();
      header("Location: ./upload_csv_product.php?ntf=1");
    } else{
      echo "submit data failed";
    }
  } else {
    echo "moving data failed".mysql_error();
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
      <section class="wrapper">
       <h5><i class="fa fa-angle-right"></i>Import Page</h5>       
       <?php include "include/alert/success.php";?>
       <div class="row mt">
        <div class="col-lg-12">
          <div class="form-panel">
            <form name="postform" action=" " enctype='multipart/form-data' method="post">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label align="center">upload the file :</label>
                <input type="file" name="file" class="form-control" required/>                                                  
              </div><!-- /.form group -->
              <button type="submit" name="submit" value="submit" class="btn btn-block btn-warning">Upload</button>                        
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

<?php
include "include/connection.php";

// Action Product
if(isset($_POST["submit"]))    
{

  $id_proset         = $_POST['id_proset'];
  $pr_name           = $_POST['pr_name'];
  $cat_id            = $_POST['cat_id'];
  $model             = $_POST['model'];
  $tahun_device      = $_POST['tahun_device'];
  $jumlah            = $_POST['jumlah'];

  $cek = mysql_query("SELECT * FROM tb_type WHERE id_proset='$id_proset'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_type 
      (id_proset,pr_name,cat_id,model,tahun_device,jumlah) 
      VALUES 
      (' ','$pr_name','$cat_id','$model','$tahun_device','$jumlah')");
  // var_dump($query);die();  
    if ($query) {
      header("Location: ./prodset_catagory.php?ntf=1");  
    } else {
      header("Location: ./prodset_catagory.php?ntf=3");
    }
  } else {
    header("Location: ./prodset_catagory.php?ntf=2");
  }
} 


if(isset($_POST["update_type"]))    
{    
  $id_proset         = $_POST['id_proset'];
  $pr_name       = $_POST['pr_name'];
  $cat_id            = $_POST['cat_id'];
  $model             = $_POST['model'];
  $tahun_device      = $_POST['tahun_device'];
  $jumlah            = $_POST['jumlah'];

  $cek = mysql_query("SELECT * FROM tb_type WHERE id_proset ='$id_proset'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_type SET pr_name ='$pr_name',
     cat_id ='$cat_id',
     model ='$pr_name',
     tahun_device ='$tahun_device',
     jumlah ='$jumlah'
     WHERE id_proset='$id_proset'");
  //var_dump($query);die();
    if($query){
      header("Location: ./prodset_catagory.php?ntf=5");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST['delete_type']))
{

  $id_proset  = $_POST['id_proset'];

  echo $id_proset;

  if($id_proset){
    $query = mysql_query("DELETE FROM tb_type WHERE id_proset = '$id_proset'");
    if($query){
     header("Location: ./prodset_catagory.php?ntf=4");                    
   } else {
    echo "Operation Failed! Please contact your administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your administrator".mysql_errno();
}
}


// Action Category
if(isset($_POST["submit_cat"]))    
{

  $cat_id         = $_POST['cat_id'];
  $cat_name       = $_POST['cat_name'];

  $cek = mysql_query("SELECT * FROM tb_category WHERE cat_id='$cat_id'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_category 
      (cat_id,cat_name) 
      VALUES 
      (' ','$cat_name')");
  // var_dump($query);die();  
    if ($query) {
      header("Location: ./prodset_catagory.php?ntf=1");  
    } else {
      header("Location: ./prodset_catagory.php?ntf=3");
    }
  } else {
    header("Location: ./prodset_catagory.php?ntf=2");
  }
} 

if(isset($_POST["update"]))    
{    
  $cat_id            = $_POST['cat_id'];
  $cat_name          = $_POST['cat_name'];

  $cek = mysql_query("SELECT * FROM tb_category WHERE cat_id ='$cat_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_category SET cat_name ='$cat_name'
      WHERE cat_id='$cat_id'");
  //var_dump($query);die();
    if($query){
      header("Location: ./prodset_catagory.php?ntf=5");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST['delete']))
{
  $cat_id  = $_POST['cat_id'];

  echo $cat_id;

  if($cat_id){
    $query = mysql_query("DELETE FROM tb_category WHERE cat_id = '$cat_id' ");
    if($query){
     header("Location: ./prodset_catagory.php?ntf=4");                    
   } else {
    echo "Operation Failed! Please contact your administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your administrator".mysql_errno();
}

}
?>
<!-- Show Data Category -->
<?php
$Category = mysql_query("SELECT * FROM tb_category");
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>
<!-- <link href="assets2/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
<!-- <link href="assets2/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> -->
<body>
  <section id="container">
    <?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <!--main content start-->
    <section id="main-content">
     <!-- <?php include 'include/alert/success.php';?> -->
     <section class="wrapper">
      <div class="row mt">
        <div align="center">
          <div class="sub-heard-part">
            <ol class="breadcrumb m-b-0">
             <li><a href="#"><h4>Type and Catagory</a></h4></li>
           </ol>
         </div>      
       </div>
     </div>
     <div id="page-wrapper">
      <div class="main-page general"><br>
      </div>
    </div>
    <div class="row">
      <div class="box-body">
        <div class="col-md-6">
          <p class="text-left">
            <strong>Type Device IT</strong>
          </p>
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
                      <label>Product IT</label>
                      <input type="text" name="pr_name" class="form-control" placeholder="Product IT"  required >
                    </div>
                    <div class="form-group">
                      <label>Category</label>
                      <select name="cat_id" class="js-example-placeholder-single form-control" style="width: 100%">
                        <option value="">-- SELECT --</option>
                        <?php 
                        while ($row = mysql_fetch_assoc($Category)) {
                          ?>
                          <option value="<?= $row['cat_id']; ?>"><?= $row['cat_id']; ?> | <?= $row['cat_name']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Model/Brand</label>
                      <input type="text" name="model" class="form-control" placeholder="Model" required >
                    </div>
                    <div class="form-group">
                      <label>Tahun Device</label>
                      <input type="text" name="tahun_device" class="form-control" placeholder="Tahun Device" required >
                    </div>
                    <div class="form-group">
                      <label>Jumlah</label>
                      <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required >
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cencel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="chart-responsive">
            <!-- Sales Chart Canvas -->
            <div class="box">
              <div class="box-body">
                <div align="right">
                  <button class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus-sign"></i> Add Device IT</button>
                  <!-- <p align="right"><button class="btn btn-default" data-toggle="modal" data-target="#myModal"> +Add </button></p> -->
                </div><br>
                <div class="table-responsive">
                  <table id="example1" class="table table-striped">
                    <thead>
                      <tr>
                        <td>#</td>
                        <td>ID</td>
                        <td>Nama Product</td>
                        <td>Model/Brand</td>
                        <td>Tahun</td>
                        <!-- <td>ID Catagory</td> -->
                        <td>Catagory</td>
                        <td>Jumlah</td>
                        <td width="100px">Action</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $con=mysqli_connect("localhost","root","","inventory");
                      // Check connection
                      if (mysqli_connect_errno())
                      {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      }

                      $result = mysqli_query($con,"SELECT tb_type.id_proset, tb_type.pr_name, tb_type.model, tb_type.tahun_device, tb_type.jumlah, tb_category.cat_name, tb_category.cat_id AS CI
                        FROM tb_type
                        LEFT JOIN tb_category ON tb_type.cat_id = tb_category.cat_id");
                      $no=0;
                      if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result))
                        {
                          $no++;
                          echo "<tr>";
                          echo "<td>".$no.".</td>";
                          echo "<td>".$row['id_proset'] . "</td>";
                          echo "<td>".$row['pr_name'] . "</td>";
                          echo "<td>".$row['model'] . "</td>";
                          echo "<td>".$row['tahun_device'] . "</td>";
                          echo "<td>".$row['cat_name'] . "</td>";
                          echo "<td>".$row['jumlah'] . "</td>";
                          echo "<td align= ''>
                          <a href='#' data-toggle='modal' data-target='#update$row[id_proset]' title='Edit'><span class='btn btn-warning'><i class='  glyphicon glyphicon-pencil'></i></span></a>
                          <a href='#' data-toggle='modal' data-target='#delete$row[id_proset]' title='Delete'><span class='btn btn-danger'><i class='  glyphicon glyphicon-trash'></i></span></a>
                          </td>";
                          echo "</tr>";
                          ?>

                          <!-- Update Page -->
                          <div class="modal fade" id="update<?php echo $row['id_proset'];?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"><b>[Products Page ] </b> Update Record</h4>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action=" ">
                                    <div class="form-group">
                                      <label>ID</label>
                                      <input type="text" name="id_proset" class="form-control" placeholder="ID" value="<?php echo $row['id_proset'];?>" readonly >
                                    </div>
                                    <div class="form-group">
                                      <label>Products</label>
                                      <input type="text" name="pr_name" class="form-control" placeholder="Products" value="<?php echo $row['pr_name'];?>" required >
                                    </div>
                                    <div class="form-group">
                                      <label>Catagory</label>
                                      <input type="text" name="pr_name" class="form-control" placeholder="Catagory" value="<?php echo $row['pr_name'];?>" required >
                                    </div>
                                    <div class="form-group">
                                      <label>Model</label>
                                      <input type="text" name="model" class="form-control" placeholder="Model" value="<?php echo $row['model'];?>" required >
                                    </div>
                                    <div class="form-group">
                                      <label>Tahun Device</label>
                                      <input type="text" name="tahun_device" class="form-control" placeholder="Tahun Device" value="<?php echo $row['tahun_device'];?>" required >
                                    </div>
                                    <div class="form-group">
                                      <label>Jumlah</label>
                                      <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" value="<?php echo $row['jumlah'];?>" required >
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" name="update_type" class="btn btn-warning">Update</button>
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Delete User Page -->
                          <div class="modal fade" id="delete<?php echo $row['id_proset'];?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"><b>[User Page] </b> Delete Record</h4>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action=" ">
                                    <div class="form-group">
                                      <div align="center">
                                        <img src="assets/images/icons/JD-07-512.png" width="150px">
                                      </div>
                                      <h4>Are you sure delete this record?</h4>
                                      <h5>ID : <?php echo $row['id_proset'];?></h5>
                                      <h5>Product : <?php echo $row['pr_name'];?></h5>
                                      <!-- <h5>Catagory : <?php echo $row['cat_id'];?></h5> -->
                                      <input type="hidden" name="id_proset" class="form-control" value="<?php echo $row['id_proset'];?>" required>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" name="delete_type" class="btn btn-warning">Yes</button>
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php

                        }
                      } 
                      mysqli_close($con);
                      ?>
                    </tbody>
                  </table>
                </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.chart-responsive -->
        </div><!-- /.col -->
        <div class="col-md-6">
          <p class="text-left">
            <strong>Catagory</strong>
          </p>
          <div class="modal fade" id="myModalCat" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><b>[Category List] </b> Add New Record</h4>
                </div>
                <div class="modal-body">
                  <form method="post" action=" ">
                    <div class="form-group">
                      <label>Category</label>
                      <input type="text" name="cat_name" class="form-control" placeholder="Category"  required >
                    </div>
                    <div class="modal-footer">
                      <button type="submit" name="submit_cat" class="btn btn-warning">Submit</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cencel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="chart-responsive">
            <!-- Sales Chart Canvas -->
            <div class="box">
              <div class="box-body">
                <div align="right">
                  <button class="btn btn-default" data-toggle="modal" data-target="#myModalCat"><i class="glyphicon glyphicon-plus-sign"></i> Add Category</button>
                  <!-- <p align="right"><button class="btn btn-default" data-toggle="modal" data-target="#myModal"> +Add </button></p> -->
                </div><br>
                <div class="table-responsive">
                  <table id="example11" class="table table-striped">
                    <thead>
                      <tr>
                        <td>#</td>
                        <td>ID</td>
                        <td>Catagory</td>
                        <td width="100px">Action</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $con=mysqli_connect("localhost","root","","inventory");
                      // Check connection
                      if (mysqli_connect_errno())
                      {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                      }
                      $result = mysqli_query($con,"SELECT * FROM tb_category ORDER BY cat_id DESC");
                      $no=0;
                      if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result))
                        {
                          $no++;
                          echo "<tr>";
                          echo "<td>".$no.".</td>";
                          echo "<td>".$row['cat_id'] . "</td>";
                          echo "<td>".$row['cat_name'] . "</td>";
                          echo "<td align= ''>
                          <a href='#' data-toggle='modal' data-target='#update$row[cat_id]' title='Edit'><span class='btn btn-warning'><i class='  glyphicon glyphicon-pencil'></i></span></a>
                          <a href='#' data-toggle='modal' data-target='#delete$row[cat_id]' title='Delete'><span class='btn btn-danger'><i class='  glyphicon glyphicon-trash'></i></span></a>
                          </td>";
                          echo "</tr>";
                          ?>

                          <!-- Update Page -->
                          <div class="modal fade" id="update<?php echo $row['cat_id'];?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"><b>[Departmanet Page ] </b> Update Record</h4>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action=" ">
                                    <div class="form-group">
                                      <label>ID</label>
                                      <input type="text" name="cat_id" class="form-control" placeholder="ID" value="<?php echo $row['cat_id'];?>" readonly >
                                    </div>
                                    <div class="form-group">
                                      <label>Catagory</label>
                                      <input type="text" name="cat_name" class="form-control" placeholder="Catagory" value="<?php echo $row['cat_name'];?>" required >
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" name="update" class="btn btn-info">Update</button>
                                      <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Delete User Page -->
                          <div class="modal fade" id="delete<?php echo $row['cat_id'];?>" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"><b>[User Page] </b> Delete Record</h4>
                                </div>
                                <div class="modal-body">
                                  <form method="post" action=" ">
                                    <div class="form-group">
                                      <div align="center">
                                        <img src="assets/images/icons/JD-07-512.png" width="150px">
                                      </div>
                                      <h4>Are you sure delete this record?</h4>
                                      <h5>ID : <?php echo $row['cat_id'];?></h5>
                                      <h5>Catagory : <?php echo $row['cat_name'];?></h5>
                                      <input type="hidden" name="cat_id" class="form-control" value="<?php echo $row['cat_id'];?>" required>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" name="delete" class="btn btn-warning">Yes</button>
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php

                        }
                      } 
                      mysqli_close($con);
                      ?>
                    </tbody>
                  </table>
                </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.chart-responsive -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- ./box-body -->
  </div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->
</section>
</section><!-- /MAIN CONTENT -->
<!--main content end-->
</section>
<?php include 'include/thirdpartselect.php';?>
<?php include 'include/thirdparty.php';?>
</body>
</html>

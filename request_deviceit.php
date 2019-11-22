<?php
include "include/connection.php";
if(isset($_POST["submit"]))    
{

  $id_req           = $_POST['id_req'];
  $user_id          = $_POST['user_id'];
  $product          = $_POST['product'];
  $asset_of         = $_POST['asset_of'];
  $set_status       = $_POST['set_status'];
  $req_status       = $_POST['req_status'];
  $date_request     = date('Y-m-d');
  $remarks          = $_POST['remarks'];

  // var_dump($_POST);die();  
  $cek = mysql_query("SELECT * FROM tb_request_item WHERE id_req='$id_req'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_request_item 
      (id_req,user_id,product,asset_of,set_status,req_status,date_request,remarks) 
      VALUES 
      ('','$user_id','$product','$asset_of','$set_status','$req_status','$date_request','$remarks')");
    // var_dump($query);die();   
    if ($query) {
      header("Location: ./request_deviceit.php?ntf=1");  
    } else {
      header("Location: ./request_deviceit.php?ntf=3");
    }
  } else {
    header("Location: ./request_deviceit.php?ntf=2");
  }
} 
?>

<?php
$users = mysql_query("SELECT * FROM tb_user");
$departments = mysql_query("SELECT * FROM tb_department");
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php';?>
<!-- <link href="assets2/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
<!-- <link href="assets2/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" /> -->
<body>
  <?php include 'include/header.php';?>
  <?php include 'include/sidebar.php';?>
  <section id="container">
    <section id="main-content">
      <section class="wrapper">
       <div class="row mt">
        <div align="center">
          <div class="sub-heard-part">
            <ol class="rebadcrumb m-b-0">
              <label><h4>Request Device IT for Users</h4></label>
            </ol>
          </div>      
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div align="right">
              <button class="btn btn-blue btn-block" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus-sign"></i> Add Request</button>
            </div>
            <div class="box-body">
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><b>[Request Page ] </b> Add Record</h4>
                    </div>
                    <div class="modal-body">
                      <form method="post" class="form-horizontal style-form" id="myForm">
                        <div>
                          <div class="fom-group">
                            <label><h5>Users Request</h5></label>
                            <div>
                              <input type="hidden" name="id_req">
                              <select name="user_id" class="js-example-placeholder-single form-control" style="width: 100%" required="required">
                                <option value="">-- SELECT --</option>
                                <?php 
                                while ($row = mysql_fetch_assoc($users)) {
                                  ?>
                                  <option value="<?= $row['user_name'] ?>"><?= $row['user_id'] ?> | <?= $row['user_name'] ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="fom-group">
                            <label><h5>Product Request</h5></label>
                            <div>
                              <select name="product" class="js-example-placeholder-single form-control" style="width: 100%" required="required">
                                <option value="">-- Select Product --</option>
                                <option value="Laptop">Laptop</option>
                                <option value="PC">PC</option>
                                <option value="Monitor">Monitor</option>
                                <option value="Android">Android</option>
                                <option value="Ipad">Ipad</option>
                                <option value="Printer">Printer</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Keyboard">Keyboard</option>
                                <option value="Laptop Temporary">Laptop Temporary</option>
                                <option value="Tas Laptop">Tas Laptop</option>
                                <option value="TpLink USB Reciver">TpLink USB Reciver</option>
                                <option value="Lain-Lain">Lain-Lain</option>
                              </select>
                            </div>
                          </div>
                          <div class="fom-group">
                            <label><h5>Asset Department</h5></label>
                            <div>
                              <select name="asset_of" class="js-example-placeholder-single form-control" style="width: 100%" required="required">
                                <option value="">-- Select Asset Department --</option>
                                <?php 
                                while ($row = mysql_fetch_assoc($departments)) {
                                  ?>
                                  <option value="<?= $row['department']; ?>"><?= $row['id_department']; ?> | <?= $row['department']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="fom-group">
                            <!-- <label><h5>Status Device</h5></label> -->
                            <input type="hidden" name="set_status" class="form-control" value="On Progress" readonly="readonly">
                            <input type="hidden" name="req_status" class="form-control" value="No Action" readonly="readonly">
                          </div>
                          <!-- <div class="fom-group">
                            <label><h5>Remarks</h5></label>
                            <div>
                              <select name="req_status" class="form-control" required="required">
                                <option value="">-- Select Status --</option>
                                <option value="Use">Use</option>
                                <option value="Temporary">Temporary</option>
                              </select>
                            </div>
                          </div> -->

                          <div class="fom-group">
                            <label><h5>Remarks</h5></label>
                            <div>
                              <textarea class="form-control" name="remarks"></textarea>
                            </div>
                          </div>
                          <div class="fom-group">
                            <label><h5>Request Date</h5></label>
                            <div>
                              <input type="date" name="date_request" class="form-control" value="<?php echo(date('Y-m-d')); ?>" readonly="readonly"><br><br>
                            </div>
                          </div>
                        </div>
                        <div>
                          <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
                          <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="table-responsive">
                <table id="example1" class="table table-striped">
                  <thead>
                    <tr>
                      <td>#</td>
                      <td>ID Request</td>
                      <td>User Request</td>
                      <td>Product Request</td>
                      <td>Assets Department</td>
                      <!-- <td>Status Product</td> -->
                      <td>Request Status</td>
                      <td>Request Date</td>
                      <td>Remarks</td>
                      <td width="150px">Action</td>
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
                    $result = mysqli_query($con,"SELECT * FROM tb_request_item ORDER BY id_req DESC");
                    $no=0;
                    if(mysqli_num_rows($result)>0){
                      while($row = mysqli_fetch_array($result))
                      {
                        $no++;
                        echo "<tr>";
                        echo "<td>".$no.".</td>";
                        echo "<td>".$row['id_req'] . "</td>";
                        echo "<td>".$row['user_id'] . "</td>";
                        echo "<td>".$row['product'] . "</td>";
                        echo "<td>".$row['asset_of'] . "</td>";
                        // echo "<td>".$row['set_status'] . "</td>";
                        echo "<td>".$row['req_status'] . "</td>";
                        echo "<td>".$row['date_request'] . "</td>";
                        echo "<td>".$row['remarks'] . "</td>";
                        echo "<td align= ''>
                        <a href='#' data-toggle='modal' data-target='#delete$row[id_req]' title='Delete'><span class='btn btn-danger'><i class='glyphicon glyphicon-remove'></i></span></a>
                        <a href='trans_main.php?ntf=0' title='open transaction'><span class='btn btn-primary'><i class='glyphicon glyphicon-share'></i></span></a>
                        </td>";
                        echo "</tr>";
                        ?>

                        <!-- Update Page -->
                        <div class="modal fade" id="update<?php echo $row['id_req'];?>" role="dialog">
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
                                    <input type="text" name="id_req" class="form-control" placeholder="ID" value="<?php echo $row['id_req'];?>" readonly >
                                  </div>
                                  <div class="form-group">
                                    <label>Departmanet</label>
                                    <input type="text" name="department" class="form-control" placeholder="Departmanet" value="<?php echo $row['department'];?>" required >
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" name="update" class="btn btn-warning">Update</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Delete User Page -->
                        <div class="modal fade" id="delete<?php echo $row['id_req'];?>" role="dialog">
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
                                    <h5>ID : <?php echo $row['id_req'];?></h5>
                                    <h5>Department : <?php echo $row['department'];?></h5>
                                    <input type="hidden" name="id_req" class="form-control" value="<?php echo $row['id_req'];?>" required>
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
        </div><!-- /.col -->
      </div> <!-- /.row -->
    </section>
  </section>
</section>

<script>
  function myFunction() {
    document.getElementById("myForm").reset();
  }
</script>
<?php include 'include/thirdpartselect.php';?>
<?php include 'include/thirdparty.php';?>
</body>
</html>

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

$user_name        = $_POST['user_name'];
$user_branch      = $_POST['user_branch'];
$user_join        = $_POST['user_join'];
$user_nik         = $_POST['user_nik'];
$user_cc          = $_POST['user_cc'];
$user_mail        = $_POST['user_mail'];
$user_code        = $_POST['user_code'];

  $cek = mysql_query("SELECT * FROM tb_staff WHERE staff_mail ='$user_mail'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_staff values(' ','$user_name','$user_mail','$user_branch','$user_cc','$user_join','$user_nik','$user_code')");
    if ($query) {
      header("Location: ./user_list.php?ntf=1");  
    } else {
      header("Location: ./user_list.php?ntf=3");
    }
  } else {
    header("Location: ./user_list.php?ntf=2");
  }

} 

if(isset($_POST["update"]))    
{    
  $cid                = $_POST['cid'];
  $cname              = $_POST['cname'];
  $caddress           = $_POST['caddress'];
  $cphone             = $_POST['cphone'];
  $pic                = $_POST['pic'];

  $cek = mysql_query("SELECT * FROM tb_client WHERE client_id ='$cid'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("update tb_client set client_address ='$caddress', client_phone = '$cphone' , client_pic = '$pic' where client_id='$cid'");
    if($query){
      header("Location: ./admin_clmanage.php");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST['delete']))
{

  $cid                = $_POST['cid'];

  echo $cid;

  if($cid){
    $query = mysql_query("DELETE FROM tb_client WHERE client_id = '$cid' ");
    if($query){
     header("Location: ./admin_clmanage.php");                    
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
       <h3><i class="fa fa-angle-right"></i> User / User List</h3>
       <?php include 'include/alert/success.php';?>
       <p align="right"><button class="btn btn-default" data-toggle="modal" data-target="#myModal"> +Add </button></p>
       <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>[Client List] </b> Add New Record</h4>
            </div>
            <div class="modal-body">
              <form method="post" action=" ">
                <div class="form-group">
                  <label>UserName</label>
                  <input type="text" name="user_name" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                  <label>Branch</label>
                  <select name="user_branch" class="form-control" required>
                    <option value="">--- SELECT ---</option>
                    <option value="Jakarta HO">Jakarta HO</option>
                    <option value="Jakarta FA">Jakarta FA</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Medan">Medan</option>
                    <option value="Batam">Batam</option>
                    <option value="Sidoarjo">Sidoarjo</option>
                    <option value="Cibitung">Cibitung</option>
                  </select> 
                </div>
                <div class="form-group">
                  <label>JoinDate</label>
                  <input type="date" name="user_join" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>NIK</label>
                  <input type="text" name="user_nik" class="form-control" required>
                </div>
                <div class="from-group">
                  <label>CostCenter</label>
                  <input type="text" name="user_cc" class="form-control" required>
                </div> 
                <div class="from-group">
                  <label>EmailAddress</label>
                  <input type="email" name="user_mail" class="form-control" required>
                </div>     
                <div class="from-group">
                  <label>KN Code</label>
                  <input type="text" name="user_code" class="form-control" required>
                </div>
                <div class="from-group">
                  <button type="submit" name="submit" class="btn btn-default form-control">Submit</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

      <div class="row mt">
       <div class="col-lg-12">
        <div class="content-panel">
          <!-- <h4><i class="fa fa-angle-right"></i> Responsive Table</h4> -->
          <section id="unseen" style="padding: 10px">
            <table  id="example1" class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                  <th>UserID</th>
                  <th>UserName</th>
                  <th>Branch</th>
                  <th>JoinDate</th>
                  <th>NIK</th>
                  <th>CostCentre</th>
                  <th>EmailAddress</th>
                  <th>KNCode</th>
                  <th>Action</th>
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

                $result = mysqli_query($con,"SELECT * FROM tb_staff ORDER BY staff_id ASC");

                if(mysqli_num_rows($result)>0){

                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>".$row['staff_id']."</td>";
                    echo "<td>".$row['staff_username'] . "</td>";
                    echo "<td>".$row['staff_branch'] . "</td>";
                    echo "<td>".$row['staff_join'] . "</td>";
                    echo "<td>".$row['staff_nik'] . "</td>";
                    echo "<td>".$row['staff_cc'] . "</td>";
                    echo "<td>".$row['staff_mail'] . "</td>";
                    echo "<td>".$row['staff_code'] . "</td>";
                    echo "<td align= ''>
                    <a href='#' data-toggle='modal' data-target='#myModal$row[staff_id]' title='Edit'><span class='label label-success'>Edit</span></a>
                    <a href='#' data-toggle='modal' data-target='#delete$row[staff_id]' title='Delete'><span class='label label-success'>Delete</span></a>
                    </td>";
                    echo "</tr>";
                    ?>
                    <div class="modal fade" id="myModal<?php echo $row['client_id'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Client List] </b> Update Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Client Name</label>
                                <input type="text" name="cname" class="form-control" placeholder="client name" value="<?php echo $row['client_name'];?>" required readonly>
                                <input type="hidden" name="cid" class="form-control" placeholder="client name" value="<?php echo $row['client_id'];?>" required>
                              </div>
                              <div class="form-group">
                                <label>Client Address</label>
                                <input type="text" name="caddress" class="form-control" placeholder="client address"  value="<?php echo $row['client_address'];?>" required>
                              </div>
                              <div class="form-group">
                                <label>Client Phone</label>
                                <input type="text" name="cphone" class="form-control" placeholder="client phone" value="<?php echo $row['client_phone'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>PIC</label>
                                <input type="text" name="pic" class="form-control" placeholder="PIC Name" value="<?php echo $row['client_pic'];?>"  required>
                              </div>
                              <button type="submit" name="update" class="btn btn-default">Update</button>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="delete<?php echo $row['client_id'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Client List] </b> Delete Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Are you sure delete this record?</label>
                                <h6>Client Name : <?php echo $row['client_name'];?></h6>
                                <input type="hidden" name="cid" class="form-control" placeholder="client name" value="<?php echo $row['client_id'];?>" required>
                              </div>
                              <button type="submit" name="delete" class="btn btn-default">Yes</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
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
          </section>
        </div><!-- /content-panel -->
      </div><!-- /col-lg-4 -->			
    </div><!-- /row -->

  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->

<!--main content end-->

</section>

<?php include 'include/thirdparty.php';?>


</body>
</html>
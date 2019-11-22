<?php

include "include/connection.php";
if(isset($_POST["submit"]))    
{    

  $user_id           = $_POST['user_id'];
  $user_username     = $_POST['user_username'];
  $user_mail         = $_POST['user_mail'];
  $user_branch       = $_POST['user_branch'];
  $user_cc           = $_POST['user_cc'];
  $user_join         = $_POST['user_join'];
  $user_nik          = $_POST['user_nik'];
  $user_code         = $_POST['user_code'];
  
  $cek = mysql_query("SELECT * FROM tb_user WHERE user_id ='$user_id'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_user values(' ','$user_username','$user_mail','$user_branch','$user_cc','$user_join','$user_nik','$user_code')");
    if ($query) {
      header("Location: ./user_list.php?ntf=1");  
    } else {
      header("Location: ./user_list.php?ntf=3");
    }
  } else {
    header("Location: ./user_list.php?ntf=2");
  }

} 

//UPDATE User
if(isset($_POST["update"]))    
{    
  $user_id           = $_POST['user_id'];
  $user_username     = $_POST['user_username'];
  $user_mail         = $_POST['user_mail'];
  $user_branch       = $_POST['user_branch'];
  $user_cc           = $_POST['user_cc'];
  $user_join         = $_POST['user_join'];
  $user_nik          = $_POST['user_nik'];
  $user_code         = $_POST['user_code'];

  $cek = mysql_query("SELECT * FROM tb_user WHERE user_id ='$user_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
  $query = mysql_query("update tb_user set user_username ='$user_username', 
                                              user_mail = '$user_mail', 
                                              user_branch = '$user_branch',
                                              user_cc = '$user_cc',
                                              user_join = '$user_join',
                                              user_nik = '$user_nik',
                                              user_code = '$user_code'
                                              where user_id='$user_id'");
  //var_dump($query);die();
    if($query){
      header("Location: ./user_list.php?ntf=5");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

//DELETE User
if(isset($_POST['delete']))
{

  $user_id  = $_POST['user_id'];

  echo $user_id;

  if($user_id){
    $query = mysql_query("DELETE FROM tb_user WHERE user_id = '$user_id' ");
    if($query){
     header("Location: ./user_list.php?ntf=4");                    
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
       <h3><i class="fa fa-angle-right"></i> History Request Item</h3>
       <?php include 'include/alert/success.php';?>
       <p align="right"><button class="btn btn-default" data-toggle="modal" data-target="#myModal"> +Add </button></p>
       <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>[User List] </b> Add New Record</h4>
            </div>
            <div class="modal-body">
              <form method="post" action=" ">
                <div class="form-group">
                <label>UserName</label>
                  <input type="text" name="user_name" class="form-control" placeholder="Username" value=" " required >
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
                  <input type="Date" name="user_join" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="user_pass" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>User Role</label>
                  <input type="text" name="user_role" class="form-control" required>
                </div>                           
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
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
                  <th>User Role</th>
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

                $result = mysqli_query($con,"SELECT * FROM tb_user ORDER BY user_id ASC");

                if(mysqli_num_rows($result)>0){

                  while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>".$row['user_id']."</td>";
                    echo "<td>".$row['user_name'] . "</td>";
                    echo "<td>".$row['user_branch'] . "</td>";
                    echo "<td>".$row['user_join'] . "</td>";
                    echo "<td>".$row['user_role'] . "</td>";
                    echo "<td align= ''>
                    <a href='#' data-toggle='modal' data-target='#update$row[user_id]' title='Edit'><span class='label label-success'>Edit</span></a>
                    <a href='#' data-toggle='modal' data-target='#delete$row[user_id]' title='Delete'><span class='label label-success'>Delete</span></a>
                    </td>";
                    echo "</tr>";
                    ?>

                    <!-- Update User Page -->
                    <div class="modal fade" id="update<?php echo $row['user_id'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[User Page ] </b> Update Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>UserName</label>
                                <input type="text" name="user_username" class="form-control" placeholder="Username" value="<?php echo $row['user_username'];?>" required >
                                <input type="hidden" name="user_id" class="form-control" placeholder="client name" value="<?php echo $row['user_id'];?>" required>
                              </div>
                              <div class="form-group">
                                <label>Branch</label>
                                <select name="user_branch" class="form-control" required>
                                  <option value="<?php echo $row['user_branch'];?>"><?php echo $row['user_branch'];?></option>
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
                                <input type="date" name="user_join" class="form-control" placeholder="Join Date" value="<?php echo $row['user_join'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="user_nik" class="form-control" placeholder="NIK" value="<?php echo $row['user_nik'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>CostCentre</label>
                                <input type="text" name="user_cc" class="form-control" placeholder="CostCentre" value="<?php echo $row['user_cc'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label> EmailAddress</label>
                                <input type="text" name="user_mail" class="form-control" placeholder="EmailAddress" value="<?php echo $row['user_mail'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>KNCode</label>
                                <input type="text" name="user_code" class="form-control" placeholder="KNCode" value="<?php echo $row['user_code'];?>"  required>
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

                    <!-- Delete User Page -->
                    <div class="modal fade" id="delete<?php echo $row['user_id'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[User Page] </b> Delete Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Are you sure delete this record?</label>
                                <h6>UserName : <?php echo $row['user_username'];?></h6>
                                <input type="hidden" name="user_id" class="form-control" placeholder="client name" value="<?php echo $row['user_id'];?>" required>
                              </div>
                              <button type="submit" name="delete" class="btn btn-default">Yes</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Set User User Page -->
                    <div class="modal fade" id="set_users<?php echo $row['user_id'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[User Page] </b> Set Users Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>UserName</label>
                                <input type="text" name="username" class="form-control" placeholder="client name" value="<?php echo $row['user_username'];?>" required readonly>
                                <input type="hidden" name="user_id" class="form-control" placeholder="client name" value="<?php echo $row['user_id'];?>" required>
                              </div>
                              <button type="submit" name="approve" class="btn btn-default">Approve</button>
                              <button type="button" name="icline" class="btn btn-default" data-dismiss="modal">Dicline</button>
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

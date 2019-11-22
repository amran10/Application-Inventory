<?php

include "include/connection.php";
if(isset($_POST["submit"]))    
{    

  $user_id            = $_POST['user_id'];
  $user_name          = $_POST['user_name'];
  $user_password      = $_POST['user_password'];
  $user_created       = $_POST['user_created'];
  $user_role          = $_POST['user_role'];
  $user_region        = $_POST['user_region'];
  $user_dept          = $_POST['user_dept'];
  $branch             = $_POST['branch'];
  $jointdate          = $_POST['jointdate'];
  $nik                = $_POST['nik'];
  $costcenter         = $_POST['costcenter'];
  $emailuser          = $_POST['emailuser'];
  $kncode             = $_POST['kncode'];
  $user_status        = $_POST['user_status'];
  
  // var_dump($_POST);die();
  
  if($num == 0){
    $query = mysql_query("INSERT into tb_user (user_id, user_name, user_password, user_created, user_role, user_region, user_dept, branch, jointdate, nik, costcenter, emailuser, kncode, user_status) 
      VALUES
      ('', '$user_name', '$user_password', '$user_created', '$user_role', '$user_region', '$user_dept', '$branch', '$jointdate', '$nik', '$costcenter', '$emailuser', '$kncode', '$user_status')");
    // var_dump($query);die();
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
  $user_id            = $_POST['user_id'];
  $user_name          = $_POST['user_name'];
  $user_password      = $_POST['user_password'];
  $user_created       = $_POST['user_created'];
  $user_role          = $_POST['user_role'];
  $user_region        = $_POST['user_region'];
  $user_dept          = $_POST['user_dept'];
  $branch             = $_POST['branch'];
  $jointdate          = $_POST['jointdate'];
  $nik                = $_POST['nik'];
  $costcenter         = $_POST['costcenter'];
  $emailuser          = $_POST['emailuser'];
  $kncode             = $_POST['kncode'];
  $user_status        = $_POST['user_status'];

  $cek = mysql_query("SELECT * FROM tb_user WHERE user_id ='$user_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_user SET user_name ='$user_name', 
                                            user_password = '$user_password', 
                                            user_created = '$user_created',
                                            user_role = '$user_role',
                                            user_region = '$user_region',
                                            user_dept = '$user_dept',
                                            branch = '$branch',
                                            jointdate = '$jointdate',
                                            nik = '$nik',
                                            costcenter = '$costcenter',
                                            emailuser = '$emailuser',
                                            kncode = '$kncode',
                                            user_status = '$user_status'
                                            WHERE user_id='$user_id'");
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


if(isset($_POST["approve"]))    
{    
  $user_id            = $_POST['user_id'];
  $user_name          = $_POST['user_name'];
  $staff_mail         = $_POST['staff_mail'];
  $staff_branch       = $_POST['staff_branch'];
  $staff_cc           = $_POST['staff_cc'];
  $staff_join         = $_POST['staff_join'];
  $staff_nik          = $_POST['staff_nik'];
  $kncode         = $_POST['kncode'];

  $query = mysql_query("update tb_user set user_name ='$user_name', 
                                                      staff_mail = '$staff_mail', 
                                                      staff_branch = '$staff_branch',
                                                      staff_cc = '$staff_cc',
                                                      staff_join = '$staff_join',
                                                      staff_nik = '$staff_nik',
                                                      kncode = '$kncode'
                                                      where user_id='$user_id'");
  //var_dump($query);die();
  if($query){
    header("Location: ./user_list.php");                                                  
  } else {
    echo "Updated Failed - Please contact your administrator";
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
       <h3><i class="fa fa-angle-right"></i> User / User List</h3>
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
                  <label>Username</label>
                  <input type="text" name="user_name" class="form-control" placeholder="Username..."  required >
                  <input type="hidden" name="user_id" class="form-control" placeholder="client name"  required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="Password" name="user_password" class="form-control" placeholder="Password..."  required>
                </div>
                <div class="form-group">
                  <label>User Create Date</label>
                  <input type="datetime" name="user_created" class="form-control" placeholder="Join Date"   required>
                </div>
                <div class="form-group">
                  <label>User Join Date</label>
                  <input type="date" name="jointdate" class="form-control" placeholder="Join Date"   required>
                </div>
                <div class="form-group">
                  <label>Role</label>
                  <input type="text" name="user_role" class="form-control" placeholder="Role..." required>
                </div>
                <div class="form-group">
                  <label>Region</label>
                  <input type="text" name="user_region" class="form-control" placeholder="Region..."  required>
                </div>
                <div class="form-group">
                  <label>Department</label>
                  <input type="text" name="user_dept" class="form-control" placeholder="Department..."   required>
                </div>
                <div class="form-group">
                  <label>branch</label>
                  <select name="branch" class="form-control" required>
                    <option value="">-- SELECT --</option> 
                    <option value="Jakarta HO">Jakarta HO</option>
                    <option value="Jakarta CFS">Jakarta CFS</option>
                    <option value="Jakarta FA">Jakarta FA</option>
                    <option value="Cibitung DC">Cibitung DC</option>
                    <option value="Semarang BO">Semarang BO</option>
                    <option value="Surabaya BO">Surabaya BO</option>
                    <option value="Sidoarjo DC">Sidoarjo DC</option>
                    <option value="Batam BO">Batam BO</option>
                    <option value="Medan BO">Medan BO</option>
                    <option value="Bandung BO">Bandung BO</option>
                    <option value="Lain-Lain">Lain-Lain</option>  
                  </select> 
                </div>
                <div class="form-group">
                  <label>NIK</label>
                  <input type="text" name="nik" class="form-control" placeholder="NIK..." required>
                </div>
                <div class="form-group">
                  <label>Cost Centre</label>
                  <input type="text" name="costcenter" class="form-control" placeholder="Cost Centre..." required>
                </div>
                <div class="form-group">
                  <label> Email Address</label>
                  <input type="text" name="emailuser" class="form-control" placeholder="Email@Address..." required>
                </div>
                <div class="form-group">
                  <label>KN Code</label>
                  <input type="text" name="kncode" class="form-control" placeholder="KN Code..." required>
                </div>
                <div class="form-group">
                  <input type="hidden" name="user_status" class="form-control" value="Active" required>
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
                  <th>#</th>
                  <th>User</th>
                  <th>Department</th>
                  <th>Name/Type</th>
                  <th>Brand</th>
                  <th>S/N</th>
                  <th>Category</th>
                  <th>Asset of</th>
                  <th>Machine ID</th>
                  <th>No. Barcode</th>
                  <th>Borrowed Date</th>
                  <th>Date of Return/th>
                  <th>Problem</th>
                  <th>Status</th>
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
                $no=0;
                if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_array($result))
                  {
                    $no++;
                    echo "<tr>";
                    echo "<td>".$no.".</td>";
                    echo "<td>".$row['user_name'] . "</td>";
                    echo "<td>***********</td>";
                    echo "<td>".$row['user_created'] . "</td>";
                    echo "<td>".$row['jointdate'] . "</td>";
                    echo "<td>".$row['user_role'] . "</td>";
                    echo "<td>".$row['user_region'] . "</td>";
                    echo "<td>".$row['user_dept'] . "</td>";
                    echo "<td>".$row['branch'] . "</td>";
                    echo "<td>".$row['costcenter'] . "</td>";
                    echo "<td>".$row['nik'] . "</td>";
                    echo "<td>".$row['emailuser'] . "</td>";
                    echo "<td>".$row['kncode'] . "</td>";
                    echo "<td>".$row['user_status'] . "</td>";
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
                                <label>Username</label>
                                <input type="text" name="user_name" class="form-control" placeholder="Username" value="<?php echo $row['user_name'];?>" required >
                                <input type="hidden" name="user_id" class="form-control" placeholder="client name" value="<?php echo $row['user_id'];?>" required>
                              </div>
                              <div class="form-group">
                                <label>Password</label>
                                <input type="Password" name="user_password" class="form-control" placeholder="NIK" value="<?php echo $row['user_password'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>User Create Date</label>
                                <input type="date" name="user_created" class="form-control" placeholder="Join Date" value="<?php echo $row['user_created'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>User Join Date</label>
                                <input type="date" name="jointdate" class="form-control" placeholder="Join Date" value="<?php echo $row['jointdate'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Role</label>
                                <input type="text" name="user_role" class="form-control" placeholder="Join Date" value="<?php echo $row['user_role'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Region</label>
                                <input type="text" name="user_region" class="form-control" placeholder="Join Date" value="<?php echo $row['user_region'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Department</label>
                                <input type="text" name="user_dept" class="form-control" placeholder="Join Date" value="<?php echo $row['user_dept'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>branch</label>
                                <select name="branch" class="form-control" required>
                                  <option value="<?php echo $row['branch'];?>"><?php echo $row['branch'];?></option>
                                  <option value="Jakarta HO">Jakarta HO</option>
                                  <option value="Jakarta CFS">Jakarta CFS</option>
                                  <option value="Jakarta FA">Jakarta FA</option>
                                  <option value="Cibitung DC">Cibitung DC</option>
                                  <option value="Semarang BO">Semarang BO</option>
                                  <option value="Surabaya BO">Surabaya BO</option>
                                  <option value="Sidoarjo DC">Sidoarjo DC</option>
                                  <option value="Batam BO">Batam BO</option>
                                  <option value="Medan BO">Medan BO</option>
                                  <option value="Bandung BO">Bandung BO</option>
                                  <option value="Lain-Lain">Lain-Lain</option>    
                                </select> 
                              </div>
                              <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" class="form-control" placeholder="NIK" value="<?php echo $row['nik'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Cost Centre</label>
                                <input type="text" name="costcenter" class="form-control" placeholder="CostCentre" value="<?php echo $row['costcenter'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label> Email Address</label>
                                <input type="text" name="emailuser" class="form-control" placeholder="Email Address" value="<?php echo $row['emailuser'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>KN Code</label>
                                <input type="text" name="kncode" class="form-control" placeholder="KNCode" value="<?php echo $row['kncode'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Status</label>
                                <select name="user_status" class="form-control" required>
                                  <option value="<?php echo $row['user_status'];?>"><?php echo $row['user_status'];?></option>
                                  <option value="Active">Active</option>
                                  <option value="Resign">Resign</option>
                                </select> 
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
                                <h6>UserName : <?php echo $row['user_name'];?></h6>
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
                                <input type="text" name="username" class="form-control" placeholder="client name" value="<?php echo $row['user_name'];?>" required readonly>
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

  </section>
</section><!-- /MAIN CONTENT -->
<!--main content end-->
</section>
<?php include 'include/thirdparty.php';?>
</body>
</html>

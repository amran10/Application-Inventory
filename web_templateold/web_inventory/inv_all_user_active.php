<?php

include "include/connection.php";
if(isset($_POST["submit"]))    
{    

  $user_id           = $_POST['user_id'];
  $user_name         = $_POST['user_name'];
  $user_password     = $_POST['user_password'];
  $user_created      = $_POST['user_created'];
  $user_role         = $_POST['user_role'];
  $user_region       = $_POST['user_region'];
  $user_dept         = $_POST['user_dept'];
  $staff_code        = $_POST['staff_code'];
  
  $cek = mysql_query("SELECT * FROM tb_user WHERE user_id ='$user_id'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_user VALUES (' ','$user_name','$user_password','$user_created','$user_role','$user_region','$user_dept')");
    if ($query) {
      header("Location: ./inv_all_user.php?ntf=1");  
    } else {
      header("Location: ./inv_all_user.php?ntf=3");
    }
  } else {
    header("Location: ./inv_all_user.php?ntf=2");
  }

} 

//UPDATE User
if(isset($_POST["update"]))    
{    
  $user_id           = $_POST['user_id'];
  $user_name         = $_POST['user_name'];
  $user_password     = $_POST['user_password'];
  $user_created      = $_POST['user_created'];
  $user_role         = $_POST['user_role'];
  $user_region       = $_POST['user_region'];
  $user_dept         = $_POST['user_dept'];

  $cek = mysql_query("SELECT * FROM tb_user WHERE user_id ='$user_id'");
  $num = mysql_num_rows($cek);
  if($num == 1){
  $query = mysql_query("update tb_user set user_name ='$user_name', 
                                              user_password = '$user_password', 
                                              user_created = '$user_created',
                                              user_role = '$user_role',
                                              user_region = '$user_region',
                                              user_dept = '$user_dept'
                                              where user_id='$user_id'");
  //var_dump($query);die();
    if($query){
      header("Location: ./inv_all_user.php?ntf=5");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}


if(isset($_POST["approve"]))    
{    
  $user_id         = $_POST['user_id'];
  $user_name       = $_POST['user_name'];
  $user_password   = $_POST['user_password'];
  $user_created    = $_POST['user_created'];
  $user_role       = $_POST['user_role'];
  $user_region     = $_POST['user_region'];
  $user_dept       = $_POST['user_dept'];

  $query = mysql_query("update tb_user set user_name ='$user_name', 
                                              user_password = '$user_password', 
                                              user_created = '$user_created',
                                              user_role = '$user_role',
                                              user_region = '$user_region',
                                              user_dept = '$user_dept'
                                              where user_id='$user_id'");
  //var_dump($query);die();
    if($query){
      header("Location: ./inv_all_user.php");                                                  
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
     header("Location: ./inv_all_user.php?ntf=4");                    
   } else {
    echo "Operation Failed! Please contact your administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your administrator".mysql_errno();
}

}

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
       <!-- <p align="right"><button class="btn btn-default" data-toggle="modal" data-target="#myModal"> +Add </button></p><br> -->
       <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title"><b>[Users List] </b> Add New Record</h4>
            </div>
            <div class="modal-body">
              <form method="post" action=" ">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="user_name" class="form-control" placeholder="Username.." required>
                </div>
                <div class="form-group">
                  <label>User Password</label>
                  <input type="Password" name="user_password" class="form-control" placeholder="Password.." required>
                </div>
                <div class="form-group">
                  <label>Join Date</label>
                  <input type="Date" name="user_created" class="form-control" placeholder="Purchase Date" required>
                </div>
                <div class="form-group">
                  <label>Role</label>
                  <select name="user_role" class="form-control" required="">
                    <option value="">-- SELECT --</option>
                    <option value="HRD">HRD</option>
                    <option value="Billing">Billing</option>
                    <option value="CG/Finance">CG/Finance</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Guest">Guest</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Region</label>
                  <input type="text" name="user_region" class="form-control" placeholder="Region.." required>
                </div>
                <div class="form-group">
                  <label>Department</label>
                  <select name="user_dept" class="form-control" required>
                    <option value="">-- SELECT --</option>
                    <option value="ALL">ALL</option>
                    <option value="SEA">SEA</option>
                    <option value="AIR">AIR</option>
                  </select>
                </div>
                <!-- <div class="form-group">
                  <label>Asset of</label>
                  <select name="pr_asset_of" class="form-control" required>
                    <option value="">--- SELECT ---</option>
                    <option value="Seafreight">Seafreight</option>
                    <option value="Airfreight">Airfreight</option>
                    <option value="PROM">PROM</option>
                    <option value="ContractLog.">ContractLog.</option>
                    <option value="Customs">Customs</option>
                    <option value="IT">IT</option>
                    <option value="NO BU">NO BU</option>
                  </select>
                </div>
                <div class="from-group">
                  <label>Status</label>
                  <select name="pr_status" class="form-control" required>
                    <option value="">--- SELECT ---</option>
                    <option value="In Use">In Use</option>
                    <option value="Ready">Ready</option>
                  </select>
                </div><br>  
                <div class="form-group">
                  <label>Status Monitoring</label>
                  <select name="monitoring" class="form-control" required>
                    <option value="">--- SELECT ---</option>
                    <option value="New Entry">New Entry</option>
                    <option value="Service">Service</option>
                    <option value="Temporary">Temporary</option>
                  </select>
                </div> --><br>                          
                <button type="submit" name="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
        <div class="tables">
          <!-- <h2 class="title1">Tables</h2> -->
          <div class="panel-body widget-shadow">
            <?php include 'include/alert/success.php';?>
            <h4> Users Active</h4>
            <!-- <input id="myInput" type="text" placeholder="Search.."> -->
            <!-- <br><br> -->
            <table id="table_id" class="table table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>UserID</th>
                  <th>UserName</th>
                  <th>JoinDate</th>
                  <th>Role</th>
                  <th>Region</th>
                  <th>Department</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php
                $con=mysqli_connect("localhost","root","","inventory");
                // Check connection
                if (mysqli_connect_errno())
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con,"SELECT * FROM tb_user WHERE user_status='Active'");

                if(mysqli_num_rows($result)>0){
                  $no=0;
                  while($row = mysqli_fetch_array($result))
                  {
                    $no++;
                    echo "<tr>";
                    echo "<td><b>" . $no . ".</b></td>";
                    echo "<td>".$row['user_id']."</td>";
                    echo "<td>".$row['user_name'] . "</td>";
                    echo "<td>".$row['user_created'] . "</td>";
                    echo "<td>".$row['user_role'] . "</td>";
                    echo "<td>".$row['user_region'] . "</td>";
                    echo "<td>".$row['user_dept'] . "</td>";
                    echo "<td><b><i>".$row['user_status'] . "</i></b></td>";
                    echo "</tr>";
                    ?>
                    <div class="modal fade" id="update<?php echo $row['user_id'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[User List] </b> Update Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Username </label>
                                <input type="hidden" name="user_id" class="form-control" placeholder="Username" value="<?php echo $row['user_id'];?>" required>
                                <input type="text" name="user_name" class="form-control" placeholder="Username" value="<?php echo $row['user_name'];?>" required>
                              </div>
                              <div class="form-group">
                                <label>User Password</label>
                                <input type="Password" name="user_password" class="form-control" placeholder="Purchase Date" value="<?php echo $row['user_password'];?>"  required>
                                <!-- <select name="brand" class="form-control" required="">
                                  <option value="<?php echo $row['pr_brand'];?>"><?php echo $row['pr_brand'];?></option>
                                  <option value="HP">HP</option>
                                  <option value="DELL">DELL</option>
                                  <option value="CANON">CANON</option>
                                  <option value="CISCO">CISCO</option>
                                  <option value="ACER">ACER</option>
                                  <option value="APPLE">APPLE</option>
                                </select> -->
                              </div>
                              <div class="form-group">
                                <label>Join Date</label>
                                <input type="Date" name="user_created" class="form-control" placeholder="Purchase Date" value="<?php echo $row['user_created'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Role</label>
                                <!-- <input type="text" name="user_role" class="form-control" placeholder="Role" value="<?php echo $row['user_role'];?>"  required> -->
                                <select name="user_role" class="form-control" required="">
                                  <option value="<?php echo $row['user_role'];?>"><?php echo $row['user_role'];?></option>
                                  <option value="HRD">HRD</option>
                                  <option value="Billing">Billing</option>
                                  <option value="CG/Finance">CG/Finance</option>
                                  <option value="Administrator">Administrator</option>
                                  <option value="Guest">Guest</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Region</label>
                                <input type="text" name="user_region" class="form-control" placeholder="PO" value="<?php echo $row['user_region'];?>"  required>
                              </div>
                              <div class="form-group">
                                <label>Department</label>
                                <!-- <input type="text" name="user_dept" class="form-control" value="<?php echo $row['user_dept'];?>" > -->
                                <select name="user_dept" class="form-control" required>
                                  <option value="<?php echo $row['user_dept'];?>"><?php echo $row['user_dept'];?></option>
                                  <option value="ALL">ALL</option>
                                  <option value="SEA">SEA</option>
                                  <option value="AIR">AIR</option>
                                </select>
                              </div>
                              <!-- <div class="form-group">
                                <label>Asset of</label>
                                <select name="asset" class="form-control" required>
                                  <option value="<?php echo $row['pr_asset_of'];?>"><?php echo $row['pr_asset_of'];?></option>
                                  <option value="Seafreight">Seafreight</option>
                                  <option value="Airfreight">Airfreight</option>
                                  <option value="PROM">PROM</option>
                                  <option value="ContractLog.">ContractLog.</option>
                                  <option value="Customs">Customs</option>
                                  <option value="IT">IT</option>
                                  <option value="NO BU">NO BU</option>
                                </select>
                              </div> 
                              <div class="form-group">
                                <label>Status</label>
                                <select name="pr_status" class="form-control" required>
                                  <option value="<?php echo $row['pr_status'];?>"><?php echo $row['pr_status'];?></option>
                                  <option value="In Use">In Use</option>
                                  <option value="Ready">Ready</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Status Monitoring</label>
                                <select name="monitoring" class="form-control" required>
                                  <option value="<?php echo $row['monitoring'];?>"><?php echo $row['monitoring'];?></option>
                                  <option value="New Entry">New Entry</option>
                                  <option value="Service">Service</option>
                                  <option value="Temporary">Temporary</option>
                                </select>
                              </div> -->
                              <button type="submit" name="update" class="btn btn-default">Update</button>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="delete<?php echo $row['user_id'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Product List] </b> Delete Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Are you sure delete this record?</label>
                                <h6> Username : <?php echo $row['user_name'];?></h6>
                                <input type="hidden" name="user_id" class="form-control" placeholder="Product name" value="<?php echo $row['user_id'];?>" required>
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
                } else {
                  echo "<tr>";
                  echo "<td colspan='12' align='center'>"."<b>"."<i>" . "No Available Record" . "</i>". "</b>" . "</td>";
                  echo "</tr>";
                } 
                mysqli_close($con);
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php include 'include/footer.php';?>
</body>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->

<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

<!-- <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</html>
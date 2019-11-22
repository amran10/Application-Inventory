<?php

include "include/connection.php";
if(isset($_POST["submit"]))    
{    
  $id_master         = $_POST['id_master'];
  $Device            = $_POST['Device'];
  $Brand             = $_POST['Brand'];
  $Model             = $_POST['Model'];
  $s_n               = $_POST['s_n'];
  $CUP               = $_POST['CUP'];
  $hostname          = $_POST['hostname'];
  $email             = $_POST['email'];
  $Handover          = $_POST['Handover'];
  $Request           = $_POST['Request'];
  $Allocation        = $_POST['Allocation'];
  $Remarks           = $_POST['Remarks'];

  // var_dump($Device,$Brand,$Model,$s_n,$CUP,$hostname,$email,$Handover,$Request);die();
  $cek = mysql_query("SELECT * FROM tb_master_product WHERE id_master='$id_master'");
  $num = mysql_num_rows($cek);
  if($num == 0){
    $query = mysql_query("INSERT into tb_master_product (id_master, Device, Brand, Model, s_n, CUP, hostname, email, Handover, Request, Allocation, Remarks) VALUES ('','$Device','$Brand','$Model','$s_n','$CUP','$hostname','$email','$Handover','$Request','$Allocation','$Remarks')");
    // var_dump($query);die();
    if ($query) {
      header("Location: ./inv_all_device.php?ntf=1");  
    } else {
      header("Location: ./inv_all_device.php?ntf=3");
    }
  } else {
    header("Location: ./inv_all_device.php?ntf=2");
  }
} 

if(isset($_POST["update"]))    
{    
  $id_master         = $_POST['id_master'];
  $Device            = $_POST['Device'];
  $Brand             = $_POST['Brand'];
  $Model             = $_POST['Model'];
  $s_n               = $_POST['s_n'];
  $CUP               = $_POST['CUP'];
  $hostname          = $_POST['hostname'];
  $email             = $_POST['email'];
  $Handover          = $_POST['Handover'];
  $Request           = $_POST['Request'];
  $Allocation        = $_POST['Allocation'];
  $Remarks           = $_POST['Remarks'];

  //var_dump($brand);die();
  $cek = mysql_query("SELECT * FROM tb_master_product WHERE id_master ='$id_master'");
  $num = mysql_num_rows($cek);
  if($num == 1){
    $query = mysql_query("UPDATE tb_master_product SET Device ='$Device', Brand = '$Brand' , Model = '$Model' , s_n = '$s_n', CUP = '$CUP', hostname ='$hostname', email = '$email', Handover = '$Handover', Request = '$Request', Allocation = '$Allocation', Remarks = '$Remarks' WHERE id_master='$id_master'");
    if($query){
      header("Location: ./inv_all_device.php?ntf=5");                                                  
    } else {
      echo "Updated Failed - Please contact your administrator";
    }
  } else {
    echo "Records cannot be found!! Please contact your System Administrator" ;
  }

}

if(isset($_POST['delete']))
{
  $id_master = $_POST['id_master'];

  echo $id_master;

  if($id_master){
    $query = mysql_query("DELETE FROM tb_master_product WHERE id_master = '$id_master' ");
    if($query){
     header("Location: ./inv_all_device.php?ntf=4");                    
   } else {
    echo "Operation Failed! Please contact your administrator".mysql_errno();
  }
} else {
  echo "Operation Failed! Please contact your administrator".mysql_errno();
}

}

if (isset($_POST["upload"])) {  
/*  //Import uploaded file to Database
  $handle   = fopen($_FILES['file']['tmp_name'], "r"); 
  while (($data = fgetcsv($handle, 100, ",")) !== FALSE) {
    $datenow  = date('Y-m-d H:i:s');
    //echo "<br>"."asdasd".$data['0']."-".$data['1'];
    $import="INSERT into tb_freight_master values(' ','$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')";
    mysql_query($import) or die(mysql_error());*/

    $uploaddir = 'file/';
    $uploadfile = $uploaddir.date('Y-m-dHis');

    $query = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
    if ($query) {
      if (mysql_query("LOAD DATA LOCAL INFILE '$uploadfile'
        INTO TABLE tb_master_product
        FIELDS TERMINATED BY ','
        LINES TERMINATED BY '\n'
        IGNORE 1 LINES
        (id_master,Device,Brand,Model,s_n,CUP,hostname,email,Handover,Request,Allocation,Remarks,Location,department_asset)
       ")) {
        header("Location: ./inv_all_device.php?ntf=7");
      } else{
        echo "submit data failed";
      }
    } else {
      echo "moving data failed".mysql_error();
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
         <p align="right"><button class="btn btn-default" data-toggle="modal" data-target="#myModal"> +Add </button>
           <button class="btn btn-default" data-toggle="modal" data-target="#myModal1"> Upload CSV </button></p><br>
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
                      <label>Device</label>
                      <input type="hidden" name="id_master" class="form-control" placeholder="" required>
                      <input type="text" name="Device" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                      <label>BRAND</label>
                      <input type="text" name="Brand" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                      <label>Model</label>
                      <input type="text" name="Model" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>S/N</label>
                      <input type="text" name="s_n" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Current Users Profile</label>
                      <input type="text" name="CUP" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Hostname</label>
                      <input type="text" name="hostname" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <select type="text" name="email" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                      </select> 
                    </div>
                    <div class="form-group">
                      <label>Handover Date</label>
                      <input type="date" name="Handover" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Request Date</label>
                      <input type="date" name="Request" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Status/Allocation</label>
                      <input type="text" name="Allocation" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Remarks</label>
                      <input type="text" name="Remarks" class="form-control">
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
          <div>
            <div class="modal fade" id="myModal1" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>[Product List] </b> Add New Record</h4>
                  </div>
                  <div class="modal-body">
                    <form name="postform" action=" " enctype='multipart/form-data' method="post">
                      <div class="form-group">
                        <label>Upload CSV</label>
                        <input type="file" name="file" class="form-control" placeholder="" required>
                      </div>
                      <button type="submit" name="upload" class="btn btn-default">Upload</button>
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
                <h4>All Device</h4>
            <!-- <input id="myInput" type="text" placeholder="Search..">
              <br><br> -->
              <table id="table_id" class="table table-bordered">
                <thead>
                  <tr>
                   <!-- <th>No.</th> -->
                   <th>No.</th>
                   <th>Device</th>
                   <th>BRAND</th>
                   <!-- <th>Model</th> -->
                   <th>S/N</th>
                   <th>Current User Profile</th>
                   <th>Hostname</th>
                   <th>Email YES/NO</th>
                   <th>Handover Date</th>
                   <th>Request Date</th>
                   <th>Status/Allocation</th>
                   <th>Remarks</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody id="table_id">
                <?php
                $con=mysqli_connect("localhost","root","","inventory");
                // Check connection
                if (mysqli_connect_errno())
                {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $result = mysqli_query($con,"SELECT * FROM tb_master_product ORDER BY id_master DESC");

                if(mysqli_num_rows($result)>0){
                  $no=0;
                  while($row = mysqli_fetch_array($result))
                  {
                    $no++;
                    echo "<tr>";
                    echo "<td><b>" . $no . ".</b></td>";
                    echo "<td>" . $row['Device'] . "</td>";
                    echo "<td>" . $row['Brand'] . "</td>";
                    // echo "<td>" . $row['Model'] . "</td>";
                    echo "<td>" . $row['s_n'] . "</td>";
                    echo "<td>" . $row['CUP'] . "</td>";
                    echo "<td>" . $row['hostname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['Handover'] . "</td>";
                    echo "<td>" . $row['Request'] . "</td>";
                    echo "<td>" . $row['Allocation'] . "</td>";
                    echo "<td>" . $row['Remarks'] . "</td>";
                    echo "<td align= ''>
                    <a href='#' data-toggle='modal' data-target='#myModal$row[id_master]' title='Edit'><span class='label label-success'>Edit</span></a>
                    <a href='#' data-toggle='modal' data-target='#delete$row[id_master]' title='Delete'><span class='label label-success'>Delete</span></a>
                    </td>";
                    echo "</tr>";
                    ?>
                    <div class="modal fade" id="myModal<?php echo $row['id_master'];?>" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>[Products List] </b> Update Record</h4>
                          </div>
                          <div class="modal-body">
                            <form method="post" action=" ">
                              <div class="form-group">
                                <label>Device</label>
                                <input type="hidden" name="id_master" value="<?php echo $row['id_master'] ?>" class="form-control" placeholder="" required>
                                <input type="text" name="Device" value="<?php echo $row['Device'] ?>" class="form-control" placeholder="" required>
                              </div>
                              <div class="form-group">
                                <label>BRAND</label>
                                <input type="text" name="Brand" value="<?php echo $row['Brand'] ?>" class="form-control" placeholder="" required>
                              </div>
                              <div class="form-group">
                                <label>Model</label>
                                <input type="text" name="Model" value="<?php echo $row['Model'] ?>" class="form-control" required>
                              </div>
                              <div class="form-group">
                                <label>S/N</label>
                                <input type="text" name="s_n" value="<?php echo $row['s_n'] ?>" class="form-control" required>
                              </div>
                              <div class="form-group">
                                <label>Current Users Profile</label>
                                <input type="text" name="CUP" value="<?php echo $row['CUP'] ?>" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Hostname</label>
                                <input type="text" name="hostname" value="<?php echo $row['hostname'] ?>" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Email</label>
                                <select type="text" name="email" class="form-control">
                                  <option value="<?php echo $row['email'] ?>"><?php echo $row['email'] ?></option>
                                  <option value="">--SELECT--</option>
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Handover Date</label>
                                <input type="text" name="Handover" value="<?php echo $row['Handover'] ?>" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Request Date</label>
                                <input type="text" name="Request" value="<?php echo $row['Handover'] ?>" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Status/Allocation</label>
                                <input type="text" name="Allocation" value="<?php echo $row['Allocation'] ?>" class="form-control">
                              </div>
                              <div class="form-group">
                                <label>Remarks</label>
                                <input type="text" name="Remarks" value="<?php echo $row['Remarks'] ?>" class="form-control">
                              </div>
                              <button type="submit" name="update" class="btn btn-default">Submit</button>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="delete<?php echo $row['id_master'];?>" role="dialog">
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
                                <h6>Product Name : <?php echo $row['pr_name'];?></h6>
                                <input type="hidden" name="id_master" class="form-control" placeholder="Product name" value="<?php echo $row['id_master'];?>" required>
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
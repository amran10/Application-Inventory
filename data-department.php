<?php
include "include/connection.php";
// User Account
$result=mysql_query("SELECT COUNT(*) AS total FROM tb_user");
$data=mysql_fetch_assoc($result);
$result1=mysql_query("SELECT COUNT(*) AS total FROM tb_department");
$data1=mysql_fetch_assoc($result1);
$result2=mysql_query("SELECT COUNT(*) AS total FROM tb_product WHERE status_label !='No Action'");
$data2=mysql_fetch_assoc($result2);

if(isset($_POST["submit"]))    
{
	$id_department    = $_POST['id_department'];
	$department       = $_POST['department'];
	$stock       	  = $_POST['stock'];

	$cek = mysql_query("SELECT * FROM tb_department WHERE id_department='$id_department'");
	$num = mysql_num_rows($cek);
	if($num == 0){
		$query = mysql_query("INSERT INTO tb_department 
			(id_department,department,stock) 
			VALUES 
			(' ','$department','$stock')");
		if ($query) {
			header("Location: ./data-department.php?ntf=1");  		
		} else {
			header("Location: ./data-department.php?ntf=3");
		}
	} else {
		header("Location: ./data-department.php?ntf=2");
	}
} 

if(isset($_POST["update"]))    
{    
	$id_department       = $_POST['id_department'];
	$department          = $_POST['department'];

	$cek = mysql_query("SELECT * FROM tb_department WHERE id_department ='$id_department'");
	$num = mysql_num_rows($cek);
	if($num == 1){
		$query = mysql_query("UPDATE tb_department SET department ='$department'
			WHERE id_department='$id_department'");
		if($query){
			header("Location: ./data-department.php?ntf=5");                                                  
		} else {
			echo "Updated Failed - Please contact your administrator";
		}
	} else {
		echo "Records cannot be found!! Please contact your System Administrator" ;
	}
}

if(isset($_POST['delete']))
{

	$id_department  = $_POST['id_department'];

	echo $id_department;

	if($id_department){
		$query = mysql_query("DELETE FROM tb_department WHERE id_department = '$id_department' ");
		if($query){
			header("Location: ./data-department.php?ntf=4");                    
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
	<section id="container">
		<?php include 'include/header.php';?>
		<?php include 'include/sidebar.php';?>
		<!--main content start-->
		<section id="main-content">
			<!-- <?php include 'include/alert/success.php';?> -->
<section class="wrapper">
<div id="page-wrapper">
	<div class="main-page general"><br>
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner"> 
						<h3><?php echo $data['total']; ?></h3>
						<p>User Employee</p>
					</div>
					<div class="icon">
						<i class="fa fa-users"></i>
					</div>
					<a href="./user_list.php?ntf=0" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3>0</h3>
						<p>Request Device</p>
					</div>
					<div class="icon">
						<i class="fa fa-bullhorn"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>0</h3>
						<p>Temporary Device</p>
					</div>
					<div class="icon">
						<i class="fa fa-wrench"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo $data2['total'];?></h3>
						<p>FA Barcode</p>
					</div>
					<div class="icon">
						<i class="fa fa-qrcode"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>0</h3>
						<p>Laptop</p>
					</div>
					<div class="icon">
						<i class="fa fa-laptop"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3>0</h3>
						<p>Phone</p>
					</div>
					<div class="icon">
						<i class="fa fa-tablet"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>0</h3>
						<p>Personal Computer</p>
					</div>
					<div class="icon">
						<i class="fa fa-desktop"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-blue">
					<div class="inner">
						<h3><?php echo $data1['total'];; ?></h3>
						<p>Department Team</p>
					</div>
					<div class="icon">
						<i class="fa fa-tasks"></i>
					</div>
					<a href="#" class="small-box-footer">
						More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
		</div><!-- /.row -->
	</div>
</div>
<div class="row">
	<div class="box-body">
		<div class="col-md-12">
			<p class="text-left">
				<strong>Department</strong>
			</p>
			<div align="right">
				<button class="btn btn-blue btn-block" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus-sign"></i> Add Department</button>
			</div>
			<div class="chart-responsive">
				<!-- Sales Chart Canvas -->
				<div class="box">
					<div class="box-body">
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title"><b>[Departmanet Page ] </b> Add Record</h4>
								</div>
							<div class="modal-body">
								<form method="post" action=" ">
									<div class="form-group">
										<input type="hidden" name="id_department" class="form-control" placeholder="ID">
									</div>
									<div class="form-group">
										<label>Departmanet Name</label>
										<input type="text" name="department" class="form-control" placeholder="Departmanet Name" required >
									</div>
									<div class="form-group">
										<label>Stock Assets</label>
										<input type="text" name="stock" class="form-control" placeholder="Stock Assets" required >
									</div>
									<div class="modal-footer">
										<button type="submit" name="submit" class="btn btn-warning">Submit</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					</div>
						<div class="table-responsive">
							<table id="example1" class="table table-striped">
								<thead>
									<tr>
										<td>#</td>
										<td>ID Department</td>
										<td>Department</td>
										<td>Stock Assets</td>
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
									$result = mysqli_query($con,"SELECT * FROM tb_department ORDER BY id_department DESC");
									$no=0;
									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											$no++;
											echo "<tr>";
											echo "<td>".$no.".</td>";
											echo "<td>".$row['id_department'] . "</td>";
											echo "<td>".$row['department'] . "</td>";
											echo "<td>".$row['stock'] . "</td>";
											echo "<td align= ''>
											<a href='#' data-toggle='modal' data-target='#update$row[id_department]' title='Edit'><span class='btn btn-warning'><i class='glyphicon glyphicon-pencil'></i></span></a>
											<a href='#' data-toggle='modal' data-target='#delete$row[id_department]' title='Delete'><span class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></span></a>
											</td>";
											echo "</tr>";
											?>

											<!-- Update Page -->
											<div class="modal fade" id="update<?php echo $row['id_department'];?>" role="dialog">
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
																	<input type="text" name="id_department" class="form-control" placeholder="ID" value="<?php echo $row['id_department'];?>" readonly >
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
											<div class="modal fade" id="delete<?php echo $row['id_department'];?>" role="dialog">
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
																	<h5>ID : <?php echo $row['id_department'];?></h5>
																	<h5>Department : <?php echo $row['department'];?></h5>
																	<input type="hidden" name="id_department" class="form-control" value="<?php echo $row['id_department'];?>" required>
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
<?php include 'include/footer.php';?>
<?php include 'include/thirdparty.php';?>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$draw = $_POST["draw"];
$recordsTotal = 0;
$recordsFiltered = 0;
$start = $_POST["start"];
$length = $_POST["length"];
$data = [];
$search = $_POST["search"];

$sql = "SELECT tb_product.pr_id, 
tb_product.user_id, 
tb_product.pr_status, 
tb_product.pr_purchase, 
tb_product.pr_sn, 
tb_product.pr_po_no, 
tb_product.monitoring, 
tb_product.machine_id, 
tb_product.department, 
tb_product.remark, 
tb_product.barcode, 
tb_user.user_name,
tb_user.user_password,
tb_user.user_created,
tb_user.user_role,
tb_user.user_region,
tb_user.user_dept,
tb_user.branch,
tb_user.jointdate,
tb_user.nik,
tb_user.costcenter,
tb_user.emailuser,
tb_user.kncode,
tb_user.user_status,
tb_user.foto,
tb_user.user_name AS USERS
FROM tb_product
LEFT JOIN tb_user ON tb_product.user_id = tb_user.user_id
WHERE 
pr_id like '%".$search['value']."%' 
OR pr_sn like '%".$search['value']."%' 
OR pr_po_no like '%".$search['value']."%'
OR pr_status like '%".$search['value']."%'
OR monitoring like '%".$search['value']."%'
OR user_name like '%".$search['value']."%'
OR remark like '%".$search['value']."%'
OR machine_id like '%".$search['value']."%'
OR barcode like '%".$search['value']."%'
LIMIT $start, $length";
$result = $conn->query($sql);

$sql_count = "SELECT tb_product.pr_id, 
tb_product.user_id, 
tb_product.pr_status, 
tb_product.pr_purchase, 
tb_product.pr_sn, 
tb_product.pr_po_no, 
tb_product.monitoring, 
tb_product.machine_id, 
tb_product.department, 
tb_product.remark, 
tb_product.barcode, 
tb_user.user_name,
tb_user.user_password,
tb_user.user_created,
tb_user.user_role,
tb_user.user_region,
tb_user.user_dept,
tb_user.branch,
tb_user.jointdate,
tb_user.nik,
tb_user.costcenter,
tb_user.emailuser,
tb_user.kncode,
tb_user.user_status,
tb_user.foto,
tb_user.user_name AS USERS
FROM tb_product
LEFT JOIN tb_user ON tb_product.user_id = tb_user.user_id
WHERE 
pr_id like '%".$search['value']."%' 
OR pr_sn like '%".$search['value']."%' 
OR pr_po_no like '%".$search['value']."%'
OR pr_status like '%".$search['value']."%'
OR monitoring like '%".$search['value']."%' 
OR user_name like '%".$search['value']."%'
OR remark like '%".$search['value']."%'
OR machine_id like '%".$search['value']."%'
OR barcode like '%".$search['value']."%'";
$result_count = $conn->query($sql_count);

$res_array = array("draw" => $draw, "recordsTotal" => $recordsTotal, "recordsFiltered" => $recordsFiltered, "data" => $data);

if ($result->num_rows > 0) {
	$res_array["recordsTotal"] = $result_count->num_rows;
	$res_array["recordsFiltered"] = $result_count->num_rows;

	while($row = mysqli_fetch_array($result)) {
		array_push($res_array["data"], $row);
	}
	echo json_encode($res_array);

} else {
	echo json_encode($res_array);
}

$conn->close();
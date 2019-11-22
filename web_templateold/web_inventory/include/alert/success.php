<?php 

$ntf	= $_GET['ntf'];

// CODE 1 : FOR SUCCESS PROCESS RECORD
if ($ntf == 1) {
	?>
	<div class="alert alert-success"><b>Well done!</b> You successfully submit new record.</div>
	<?php
// CODE 2 : FOR DUPLICATE RECORD
} elseif ($ntf == 2) {
	?>
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-cancel"></i>Record Duplicate!</h4>
	</div>
	<?php
// CODE 3 : FOR FAILED PROCESS RECORD	
} elseif ($ntf == 3) {
	?>
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-cancel"></i>Process Failed!</h4>
		Please contact your administrator
	</div>
	<?php
// CODE 4 : FOR DELETE RECORD		
} elseif ($ntf == 4) {
	?>
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-cancel"></i>Delete Process!</h4>
		Your data has been delete!
	</div>
	<?php
// CODE 5 : FOR UPDATE RECORD	
} elseif ($ntf == 5) {
	?>
	<div class="alert alert-success"><b>Well done!</b> You successfully update record.</div>
	<?php
} elseif ($ntf == 6) {
	?>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-cancel"></i>Process Failed!</h4>
		Please contact your administrator
	</div>
	<?php
} if ($ntf == 7) {
	?>
	<div class="alert alert-success"><b>Well done!</b> You successfully Upload new record.</div>
	<?php
}
?>
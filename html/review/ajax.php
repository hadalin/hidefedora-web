<?php
	include_once ("../../setup.php");
	if(isset($_POST['id']) && isset($_POST['status'])) {
		$table = 'blockedusers';
		if($_POST['status'] == 1)
			$args['approvalStatus'] = 1;
		else if($_POST['status'] == -1)
			$args['approvalStatus'] = -1;
		else
			echo 'Approval Status Error';
		$args['approvalDate'] = date("Y-m-d H:i:s");
		$where['id'] = $_POST['id'];
		$database->update($table, $args, $where);
	}
?>
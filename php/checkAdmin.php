<?php
	$verify_admin = $db->prepare("SELECT `role` FROM `users` WHERE `token` = '$tkn'");
	$verify_admin->execute();
	$row_admin = $verify_admin->rowCount();
	if ($row_admin < 1) {
	    header("Location: index.php");
	    die();
	}

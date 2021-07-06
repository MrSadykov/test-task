<?php
	// Model
	require_once "user.php";

	// Controller
	$delUserIdArr = array();
	foreach($_REQUEST as $kID => $iID) {
		if($iID == "on") {
			$delUserIdArr[] = $kID;
		}
	}
	deleteUser($delUserIdArr);

	// View
	require_once "views/index.delete.php";
?>
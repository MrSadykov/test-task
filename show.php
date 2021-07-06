<?
	// Model
	require_once "user.php";

	// Controller
	$users = getUsers();

	// View
	require_once "views/index.show.php";
?>
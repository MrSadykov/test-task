<?php
	// Model
	include_once "user.php";
	
	// Controller
	if(isset($_POST["fio"]) && (!empty($_POST["fio"])) && strlen($_POST["fio"]) >= 3) {
		// проверка не существует ли такой пользователь
		$users = getUsers();
		$count = 0;
		foreach($users as $kU => $iU) {
			$fio = trim($_POST["fio"]);
			if($iU["fio"] == $fio) {
				$count++;
			}
		}

		if($count == 0) {
			addUser($fio);
		}
	}

	// View
	require_once "views/index.add.php";
?>
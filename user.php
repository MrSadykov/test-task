<?php
	require_once "db_connection.php";

	/* добавление пользователя */
	function addUser($fio) {
		global $pdo;
		$sql = "INSERT INTO users(fio) VALUES (:fio)";
		$statement = $pdo->prepare($sql);
		$statement->bindParam(":fio", $fio);
		$statement->execute();
	}

	/* получение всех пользователей */
	function getUsers() {
		global $pdo;
		$sql = "SELECT * FROM users";
		$statement = $pdo->prepare($sql);
		$statement->execute();
		$users = $statement->FetchAll(PDO::FETCH_ASSOC);
		return $users;
	}

	/* удаление пользователя */
	function deleteUser($arrId) {
		global $pdo;
		$str = implode(", ", $arrId);
		$sql = "DELETE FROM users WHERE id IN (" .$str. ")";
		$statement = $pdo->prepare($sql);
		$statement->execute();
	}
?>
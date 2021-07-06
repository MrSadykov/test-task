<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Список пользователей</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
</head>
<body>	
	<div class="container">
		<div class="row">
			<div class="col-8 m-3">
				<h1 class="mb-3">Список пользователей</h1>
				<form class="mb-3" action="delete.php" method="POST">
					<?php foreach($users as $user):?>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="<?=$user["id"]?>" class="custom-control-input" id="<?=$user["id"]?>">
							<label class="custom-control-label" for="<?=$user["id"]?>"><?echo $user["fio"]?></label>
						</div>
					<?endforeach?>
					<button class="btn btn-primary mt-3" type="submit">Удалить пользователя(-ей)</button>
				</form>

				<a class="btn btn-secondary" href="index.php">Вернуться на главную страницу</a>
			</div>
		</div>
	</div>
</body>
</html>
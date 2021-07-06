<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Добавление пользователя</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-8 mt-3">
				<?if($count == 0):?>
					<h2>Пользователь <?echo $_POST["fio"]?> успешно добавлен</h2>
				<?else:?>
					<h2>Пользователь <?echo $_POST["fio"]?> уже добавлен</h2>
				<?endif?>
				<a href="index.php" class="btn btn-primary">Вернуться на главную</a>
				<a href="show.php" class="btn btn-secondary">Вернуться к списку пользователей</a>
			</div>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Удаление пользователей</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-8 mt-3">
				<?if(count($delUserIdArr) > 1):?>
				<h2>Пользователи удалены</h2>
				<?else:?>
					<h2>Пользователь удален</h2>
				<?endif?>
				<a href="show.php" class="btn btn-primary">Вернуться к списку пользователей</a>
				<a href="index.php" class="btn btn-secondary">Вернуться на главную страницу</a>
			</div>
		</div>
	</div>
</body>
</html>
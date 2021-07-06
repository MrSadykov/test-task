<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная страница</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-8 mt-3">
				<form class="mb-3" action="store.php" method="POST">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-default">Введите имя пользователя</span>
						</div>
						<input type="text" required class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="fio">
					</div>

					<button type="submit" class="btn btn-primary">Добавить пользователя</button>
				</form>
				<a class="btn btn-secondary" href="show.php">Посмотреть пользователей</a>
			</div>
		</div>
	</div>
</body>
</html>

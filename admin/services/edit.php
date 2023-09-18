<?php
        require_once "../../vendor/connect.php";

		session_start();
		$id = $_GET['id'];

		// Получение данных текущего пользователя из БД
		$query = "SELECT * FROM services WHERE id = $id";
		$result = mysqli_query($connect, $query);

		$service_data = mysqli_fetch_assoc($result);

		// Обработка отправки формы


		if (isset($_POST['submit'])) {
			$name = mysqli_real_escape_string($connect, $_POST['name']);
            $cost = mysqli_real_escape_string($connect, $_POST['cost']);
			$description = mysqli_real_escape_string($connect, $_POST['description']);
			$duration = mysqli_real_escape_string($connect, $_POST['duration']);

			if (!empty($_FILES['file']['name'])) {
			    // Если файл был загружен, сохраняем новый файл и его путь
			    $apppath = dirname(dirname(__FILE__));
			    $filepath = '../uploads/' . time() . basename($_FILES['file']['name']);
			    $uploadfile = $apppath . '/' . $filepath;
			    move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
			} else {
			    // Если файл не был загружен, используем существующий путь файла из БД
			    $filepath = $service_data['picture'];
			}

			$query = "UPDATE services SET `name` = '$name', `cost` = '$cost', `description` = '$description', `duration` = '$duration', `picture` = '$filepath' WHERE `id` = $id";
			mysqli_query($connect, $query);

            header('Location: ../indexAdmin.php');
		}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Изменить данные услуги</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>
<body>
	<div class="container">
		<form method="post" action="" enctype="multipart/form-data">
			<label>Название:</label>
			<input type="text" name="name" value="<?php echo $service_data['name']; ?>">

            <label>Цена:</label>
			<input type="text" name="cost" value="<?php echo $service_data['cost']; ?>">
			
			<label>Описание:</label>
			<input required name="description" value="<?php echo $service_data['description']; ?>">

			<label>Длительность:</label>
        	<input required name="duration" value="<?php echo $service_data['duration']; ?>">

			<label>Файл:</label>
			<input type="file" name="file">
		
        
			<button class="button" type="submit" name="submit" onclick="return confirm('Вы уверены, что хотите сохранить данные?')">Сохранить</button>
		</form>
	</div>
</body>
</html>


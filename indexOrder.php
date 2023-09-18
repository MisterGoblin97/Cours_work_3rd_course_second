<?php
require_once "vendor/connect.php";

$stmt = $pdo->query("select id, name, cost from services");
$services = $stmt->fetchAll();

$stmt = $pdo->query("select  id, name from masters");
$masters = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Оформление заказа</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../assets/css/styleOrder.css">
</head>
<body>
<div class="container">
  <h2>Оформление заказа</h2>
  <div>
  	<form action="vendor/order.php" method="POST">

    <label for="service">Выберите услугу:</label>
    <select name="service" id="service">
      <?php foreach ($services as $service): ?>
        <option value="<?php echo $service['id']; ?>"><?php echo $service['name']; ?></option>
      <?php endforeach; ?>
    </select>

      <label for="master">Выберите мастера:</label>
        <select name="master" id="master">
        <?php foreach ($masters as $master): ?>
            <option value="<?php echo $master['id']; ?>"><?php echo $master['name']; ?></option>
        <?php endforeach; ?>
        </select>
        
        <label>Выберите дату:</label>
        <input type="date" name="date" placeholder="Выберите желаемую дату">
            <p class="text">После оформления заказа, наш администратор свяжется с вами.</p>
        <input class="btn" type="submit" value="Отправить">

    </form>
  </div>
</div>
</body>
</html>
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once ("config.php"); // подключение к БД


$sql = "SELECT * FROM goods ORDER BY id ASC"; // выбираем все из таблицы goods


$product = mysqli_query($connect, $sql); // запрашиваем и полуаем продукты из БД
//$arrProduct = mysqli_fetch_assoc($product); // преобразуем полученные продукты из БД в ассоц массив

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Магазин</title>
</head>
<body>
<h1>Витрина магазина</h1>
<p><a href="index.php"> На главную </a> <a href="admin.php"> Админка </a> <a href="reviews.php"> Отзывы </a> <a href="auth.php"> Авторизоваться </a></p><br><br>
<?php
while($arrProduct = mysqli_fetch_assoc($product)) :?>
    <div style="display: inline-flex;">
	
	
	<a href="item.php?id=<?= $arrProduct['id']?>">
	
	
        <img style="height: 200px; border: 1px solid black; padding: 5px; margin-right: 10px;" 
		src="img/<?= $arrProduct['url']?>" alt="<?= $arrProduct['name'] ?>">
		<p><?= $arrProduct['name'] ?></p>
		<p>Цена: <?= $arrProduct['price'] ?></p>
    </a>	
	</div>
	
<?php endwhile; ?>
</body>
</html>
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
<h1>Админка магазина</h1>
<p><a href="index.php"> На главную </a> <a href="admin.php"> Админка </a> <a href="reviews.php"> Отзывы </a></p><br><br>

<table style="text-align: center;" border="1" width="">

<?php
while($arrProduct = mysqli_fetch_assoc($product)) :?>
    
	<tr>
		<td><?= $arrProduct['name']?></td>
		<td> <p>Введите новую цену: </p>
	<form action="server.php" method="GET">
	<input type="text" name="price1">
	<input type="hidden" name="idPrice1" value="<?= $arrProduct['id'] ?>">
	<input type="submit" value="Сохранить">
	</form>
	<p>Текущая цена : <?= $arrProduct['price'] ?></p>
		</td>
		
		<td> Название: <input id="name_<?= $arrProduct['name']?>" type="text" value="<?= $arrProduct['name']?>"></td>
		
		<td> Описание: <textarea id="desc_<?= $arrProduct['desc']?>"><?= $arrProduct['desc']?></textarea></td>
		
		
		<td><a href="server.php?action=edit&id=<?= $arrProduct['id']?>&price=<?= $arrProduct['price'] ?>&
		name=<?= $arrProduct['name']?>&desc=<?= $arrProduct['desc']?>">Сохранить</a></td>
		
		
		<td><a href="server.php?action=delete&id=<?= $arrProduct['id']?>">Удалить</a></td>
		
	</tr>
	
	
	
	
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
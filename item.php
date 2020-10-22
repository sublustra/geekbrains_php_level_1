<?php

include_once ("config.php");

$id = $_GET['id'];

$sqlProduct = "SELECT * FROM goods WHERE id ='$id'"; // выбираем изображение из БД по id для вывода


$imageProduct = mysqli_fetch_assoc(mysqli_query($connect, $sqlProduct));

if(mysqli_query($connect, $sqlProduct)) {
	$update = "UPDATE goods SET count=count+1 WHERE id ='$id'";
	mysqli_query($connect, $update);

} 

 ?>
 <h1> Карточка товара </h1>
<p><a href="index.php"> На главную </a> <a href="admin.php"> Админка </a> <a href="reviews.php"> Отзывы </a></p><br><br>

<div style="width: 300px;">
	<p> <?= $imageProduct['name'] ?> </p>
    <img style="height: 300px;" src="img/<?= $imageProduct['url'] ?>" alt="<?= $imageProduct['name'] ?>">
	<p> Цена: <?= $imageProduct['price'] ?> </p>
	<p> <?= $imageProduct['desc'] ?> </p>
	<p> Просмотры: <?= $imageProduct['count'] ?> </p>
	</div>
	
	

<a href="index.php">Вернуться в галерею</a>

<?php
include_once("config.php");


$idImage = $_GET['id']; // получаем id из файла index.php
$sqlImg = "SELECT * FROM gallery_img_2 WHERE id='$id'"; // выбираем элементы из БД по id
               
if (mysqli_query($connect, $sqlImg)) 								// если получаем данные из БД
	{ 								
	$image = mysqli_fetch_assoc(mysqli_query($connect, $sqlImg));   // преобразуем полученные данные в ассоц массив и записываем в $image                
	$update = "UPDATE gallery_img_2 SET сount=сount+1 WHERE id=$id"; // прибавляем 1 в строку count и записываем результат в $update
	mysqli_query($connect, $update); // непонял зачем это!!!!
     }
     ?>

                <img src="<?= $image['adress-big'] ?>" alt="image<?= $idImage ?>">

                <h2>Количество просмотров: <?= ++$image['сount'] ?></h2>
            
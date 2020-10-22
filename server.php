<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once ("config.php"); // подключение к БД

$action = $_GET['action'];
$id = $_GET['id'];


$price1 = $_GET['price1'];
$idPrice1 = $_GET['idPrice1'];
$sqlUp1 = "UPDATE `goods` SET `price` = '$price1' WHERE `id` = '$idPrice1'";
mysqli_query($connect, $sqlUp1);
	if(mysqli_query($connect, $sqlUp1)) {
			header("Location: admin.php");
	}


if($action == "delete") {
	$sql = "DELETE FROM goods WHERE id='$id'";
		if(mysqli_query($connect, $sql)) {
			header("Location: admin.php");
	}
}
elseif($action == "edit") {
	$name = $_GET['name'];
	$price = $_GET['price'];
	$desc = $_GET['desc'];
	$sqlUp = "UPDATE `goods` SET `name` = '$name', `desc` = '$desc', `price` = '$price' WHERE `goods`.`id` = '$id'";
	 echo "$sqlUp <br>";
	mysqli_query($connect, $sqlUp);
		if(mysqli_query($connect, $sqlUp)) {
			echo "Данные сохранены <br>";
	}
		else {
			echo "Ошибка сохранения <br>";
		}
}

?>

<a href="index.php"> На главную </a> <br>
<a href="admin.php"> В админку </a>

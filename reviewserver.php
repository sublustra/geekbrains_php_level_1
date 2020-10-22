<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once ("config.php"); // подключение к БД


$imya = $_GET['imya'];
$otlichno = $_GET['otlichno'];
$horosho = $_GET['horosho'];
$ploho = $_GET['ploho'];
$email = $_GET['email'];
$comment = $_GET['comment'];

$sqlForm = "INSERT INTO `reviews`(`imya`, `otlichno`, `horosho`, `ploho`, `email`, `comment`) 
			VALUES ('$imya', '$otlichno' , '$horosho' , '$ploho' , '$email' , '$comment')";

if(mysqli_query($connect, $sqlForm)) {
			header("Location: reviews.php");
	}
		else {
			echo "Ошибка сохранения <br>";
		}
?>
<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once ("config.php"); // подключение к БД

$login = $_POST['login'] ? strip_tags($_POST['login']) : "";
$pass = $_POST['pass'] ? strip_tags($_POST['pass']) : "";

$sql = "SELECT `id` FROM `users` WHERE `login` ='$login' AND `pass` ='$pass'";
$res = mysqli_query($connect, $sql) or die("Error: ".mysqli_error($connect));

if(mysqli_num_rows($res) == 1) {
	setcookie("login", $login);
	setcookie("pass", $pass);
	header("Location : auth.php?success=true");
}
else {
	header("Location : auth.php");
}

?>
<?php

const SERVER = "localhost";
const LOGIN = "root";
const PAS = "root";
const DB = "db_gallery";

$connect = mysqli_connect(SERVER,LOGIN,PAS,DB) or die("Ошибка соединения!");
?>
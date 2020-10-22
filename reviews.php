
<p><a href="index.php"> На главную </a> <a href="admin.php"> Админка </a> <a href="reviews.php"> Отзывы </a></p><br><br>
<h1> Отзывы</h1>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once ("config.php"); // подключение к БД

$sqlReview = "SELECT * FROM reviews ORDER BY id DESC"; // выбираем все из таблицы 
$queryReview = mysqli_query($connect, $sqlReview);

?>



	<?php while($arrReview = mysqli_fetch_assoc($queryReview)):?>
	
	<div style="background: antiquewhite; padding: 15px; width: 500px; margin: 10px;">
	<p> Имя: <?= $arrReview['imya'];?></p>
	<p> Оценка: <?= $arrReview['otlichno'];?> <?= $arrReview['horosho'];?><?= $arrReview['ploho'];?></p>
	<p> Email: <?= $arrReview['email'];?></p>
	<p> Комментарий: <?= $arrReview['comment'];?></p>
	</div>
	<?php endwhile; ?>
	<?php  echo $arrReview; ?>
	
<div style="background: aliceblue; padding: 15px; width: 500px;">
	<h2> Оставьте свой отзыв </h2>
	<form action="reviewserver.php" method="GET">
	<p> <b>Ваше имя</b></p>
	<input type="text" name="imya">
	<p> <b>Поставьте оценку нашему магазину </b></p>
	<p><input type="radio" name="otlichno" value="Отлично"> Отлично</p>
	<p><input type="radio" name="horosho" value="Хорошо"> Хорошо</p>
	<p><input type="radio" name="ploho" value="Плохо"> Плохо</p>
	<p> <b>Ваш email </b></p>
	<input type="email" name="email">
	<p> <b>Комментарий </b></p>
	<textarea name="comment"></textarea>
	<p><input type="submit" value="Отправить"></p>
	</form>
</div>

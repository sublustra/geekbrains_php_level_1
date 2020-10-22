<?php
if($_GET['success'] && $_COOKIE['login']) :?>
<h1> Ваша учетка подтверждена </h1>
<?php endif; ?>

<p><a href="index.php"> На главную </a> <a href="admin.php"> Админка </a> <a href="reviews.php"> Отзывы </a></p><br><br>

<form action="authserver.php" method="POST">
<p> Ваш логин </p>
<input type="text" name="login" value="<?= $_COOKIE['login']?>">
<p> Ваш пароль </p>
<input type="text" name="pass" value="<?= $_COOKIE['pass']?>"> <br> <br>
<input type="submit" value="Войти">

</form>


<?php

	include_once("config.php");//соединение с БД


    $sql = "SELECT * FROM gallery_img_2 ORDER BY Count DESC";// сортируем строки в БД
    $table = mysqli_query($connect, $sql);// запрашиваем и возвращаем отсортированные значения из БД

        // преобразуем полученный результат в асоц массив, присваиваем ссылку и значение изображения
		// каждому элементу массива, при нажатии направляем на страницу image.php
		while ($data = mysqli_fetch_assoc($table)) :?> 
            <a href='image.php?id=<?= $data['id'] ?>'>
                <img src="<?= $data['adress-sm'] ?>">
            </a>
        <?php endwhile; ?> 
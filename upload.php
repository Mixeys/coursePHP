<?php 
	error_reporting(-1);
	header('Content-Type:text/html; charset="utf-8');
	$uploaddir = './files/';
	$uploadfile = $uploaddir.basename($_FILES['uploadfile']['name']);
	if(copy($_FILES['uploadfile']['tmp_name'], $uploadfile)){
		echo '<h3>Файл успешно загружен на сервер</h3>';
	} else{
		echo '<h3>Ошибка! Не удалось загрузить файл на сервер</h3>';
		exit();
	}
	echo '<h3>Информация о загнуженном на сервер файле:</h3>';
	echo '<p><b>Оригинальное имя загруженного файла:'.$_FILES['uploadfile']['name'].'</b></p>';
	echo '<p><b>Размер загруженного файла:'.$_FILES['uploadfile']['size'].'</b></p>';
	echo '<p><b>Временное имя файла:'.$_FILES['uploadfile']['tmp_name'].'</b></p>';
	?>

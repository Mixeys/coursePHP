<?php
	echo $_GET['name'].'<br>';
	echo $_GET['age'].'<br>';
//////////////////////////////////////////////////

	echo '<!DOCTYPE html>';
	echo '<html>';
	echo '<head>';
		echo '<title>Test Form PHP</title>';
		echo '<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">';

echo '</head>';
	echo '<body>';
		echo '<h3>Тестовая форма</h3>';
		echo '<p>Переданное значение текстового поля:<b>'.$_POST['textfield'].'</b></p>';
		echo '<p>Переданное значение поля пароля:<b>'.$_POST['pswfield'].'</b></p>';
		echo '<p>Переданное значение скрытого поля hidden:<b>'.$_POST['hidden'].'</b></p>';
		echo "<hr>";
		echo '<p>Были включены следующие независимые переключатели:</p>';
		if(isset($_POST['checkbox1'])){
			echo '<p><b>Первый</b></p>';
		}
		if(isset($_POST['checkbox2'])){
			echo '<p><b>Второй</b></p>';
		}
		if(isset($_POST['checkbox3'])){
			echo '<p><b>Третий</b></p>';
		}
		echo '<hr>';
		if(isset($_POST['radiobutton'])){
			echo '<p>Был выбран radio со следующим значением';
			if($_POST['radiobutton'] === 'Yes'){
				echo '<b>Yes</b>';
			}
			if($_POST['radiobutton'] === 'No'){
				echo '<b>No</b>';
			}
			echo '</p>';
		}else{
			echo '<p>Radio не выбран</p>';
		}
		echo '<hr>';
		echo '<p>Значение многострочного текстового поля:</p>';
		echo '<p><b>'.$_POST['textarea'].'</b></p>';
		echo '<hr>';
		echo '<p>Значение списка с единственным выбором:<b>'.$_POST['day_s'].'</b></p>';
		echo '<hr>';
		echo '<p>Значение списка с множественным выбором:</p>';
		foreach ($_POST['day_m'] as $key => $value) {
			echo '<b>'.$value.'</b><br>';
		}
		echo '<hr>';

	echo '</body>';
	echo '</html>';
?>
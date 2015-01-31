<?php
// Счетчик и дата последнего посещения 
	$count = 0;
	if(isset($_COOKIE['count'])){
		$count = $_COOKIE['count'];
	}
	$count++;
	$lastVisit = '';
	if(isset($_COOKIE['lastVisit'])){
		$lastVisit = date('d-m-Y H:i:s', $_COOKIE['lastVisit']);
	}
	if(date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')){
	setcookie('count', $count, time() + 3600);
	setcookie('lastVisit', time(), time() + 3600);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookie</title>
</head>
<body>
	<h1>Мой сайт.</h1>
	<blockquote>
		<?
			if($count == 1){
				echo 'Спасибо, что посетили наш сайт!';
			}else{
				echo "Вы зашли к нам $count раз.<br>";
				echo "Последнее посещение : $lastVisit .";
			}
		?>
	</blockquote>
</body>


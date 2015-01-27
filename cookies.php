<?php
	// Счетчик числа загрузок страницы с помащью Cookies
	error_reporting(-1);
	header('Content-Type:text/html;charset=utf-8');
	if(isset($_COOKIE['Mortal'])){
		$tmp = $_COOKIE['Mortal'] + 1;
	} else {
		$tmp = 0;
	}
	setcookie('Mortal', $tmp, time() + 3600);
	echo '<p>Вы посещали эту страницу <b>'.$_COOKIE['Mortal'].'</b> раз</p>';

?>
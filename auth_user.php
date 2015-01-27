<?php
error_reporting(-1);
header('Content-Type:"text/html";charset=utf-8');
	if(!isset($_SERVER['PHP_AUTH_USER']) || (('Mixa' != $_SERVER['PHP_AUTH_USER']) && ('555' != $_SERVER['PHP_AUTH_PW']))){
		header('WWW-Authenticate: Basic realm= "My Realm"');
		header('HTTP/1.0 401 Unauthorized');
		exit();
	} else {
		echo '<p> Hello '.$_SERVER['PHP_AUTH_USER'].'</p>';
		echo '<p> Вы ввели пароль: '.$_SERVER['PHP_AUTH_PW'].'</p>';
	}
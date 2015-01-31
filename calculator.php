<?php
	error_reporting(-1);
	header('Content-Type:text/html;charset="utf-8"');
	$result = "";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$num1 = (int)$_POST['num1'];
		$num2 = (int)$_POST['num2'];
		$oper = trim(strip_tags($_POST['oper']));
		$result = "$num1 $oper $num2 = ";
		switch ($oper) {
			case '+':
				$result .= $num1 + $num2;
				break;
				case '-':
				$result .= $num1 - $num2;
				break;
				case '*':
				$result .= $num1 * $num2;
				break;
				case '/':
				if($num2 === 0)
					$result = "На ноль делить нельзя!";
				$result .= $num1 / $num2;
				break;			
			default:
				$result = "Неизвестный оператор $oper !";
		}
	}
	?>

	<form action="" method="post">
		<label>Число 1:</label><br>
		<input type="text" name="num1" value="<? echo $num1; ?>"><br>
		<label>Оператор:</label><br>
		<input type="text" name="oper" value="<? echo $oper; ?>"><br>
		<!--<select size="1" name="oper">
			<option name="+" selected>+</option>
			<option name="-">-</option>
			<option name="*">*</option>
			<option name="/">/</option>
		</select><br>-->
		<label>Число 2:</label><br>
		<input type="text" name="num2" value="<? echo $num2; ?>"><br>
		<input type="submit" value="Result"><br>
	</form>

	<?php
		if($result)
			echo $result;
	?>	
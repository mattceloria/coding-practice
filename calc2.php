<!doctype html>
<html>
	<head>
		<title>Simple Calculator</title>
	</head>

	<body>
	
		<h1>Simple Calculator</h1>

		<form action="" method="post">
			<input name="number1" type="text" value="0">
			<select name="operator">
				<option value="addition">+</option>
				<option value="subtraction">-</option>
				<option value="multiplication">*</option>
				<option value="division">/</option>
			</select>
			<input name="number2" type="text" value="0">
			<br><br>
			<input name="calculate" type="submit" value="Equals">
		</form><br>
		
	<?php

	if(isset($_POST["operator"])) {
		$operator = $_POST["operator"];
		switch ($operator) {
			case 'subtraction';
			echo $_POST["number1"] - $_POST["number2"];
			break;
			case 'multiplication';
			echo $_POST["number1"] * $_POST["number2"];
			break;
			case 'division';
			echo $_POST["number1"] / $_POST["number2"];
			break;
			default;
			echo $_POST["number1"] + $_POST["number2"];
			break;
		}}

	?>


	</body>

</html>
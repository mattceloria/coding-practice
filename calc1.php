<!doctype html>
<html>
	<head>
		<title>Simple Calculator</title>
	</head>

	<body>
	
		<h1>Simple Calculator</h1>

		<form action="" method="post">
			<input name="number1" type="text" value="0"><br><br>
			<input type="radio" name="addition" value="+"> +<br>
			<input type="radio" name="subtraction" value="-"> -<br>
			<input type="radio" name="multiplication" value="*"> *<br>
			<input type="radio" name="division" value="/"> /<br><br>
			<input name="number2" type="text" value="0"><br>
			<br><br>
			<input name="calculate" type="submit" value="Equals">
		</form><br>
		
	<?php

	if(isset($_POST["addition"]))
	{ 
		echo $_POST["number1"] + $_POST["number2"];
	}
	elseif(isset($_POST["subtraction"]))
	{
		echo $_POST["number1"] - $_POST["number2"];
	}
	elseif(isset($_POST["multiplication"]))
	{
		echo $_POST["number1"] * $_POST["number2"];
	}
	elseif(isset($_POST["division"]))
	{
		echo $_POST["number1"] / $_POST["number2"];
	}

	?>


	</body>

</html>
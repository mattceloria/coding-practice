<!DOCTYPE html>

<html>

	<head>
		<title>FizzBuzz</title>
	</head>

	<body>
		
		<?php

		$number = 1;

		while ($number<=100) {
			if ($number%3==0 && $number%5==0) {
				echo "FizzBuzz";
			} 	
			elseif ($number%3==0) {
				echo "Fizz";
			}
			elseif ($number%5==0) {
				echo "Buzz";
			}					
			else {
				echo $number;
			}
			echo "<br>";
			$number++;
		}
		
		/*  
		Write a program that prints the numbers from 1 to 100. But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.
		*/

		?>

	</body>

</html>
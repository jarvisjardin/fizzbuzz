<?php
/* 	
	GOAL: 
		- Write a program that prints the numbers from 1 to 100. 
		- For multiples of three print 'Fizz' instead of the number
		- For the multiples of five print 'Buzz'. 
		- For numbers which are multiples of both three and five print “FizzBuzz" 
*/
	 
	for($i=1; $i<=100; $i++){
		// Two ways to complete this.

		// Switch statements (preferred choice)
		switch ($i) {
		    case is_int( $i / 3 ) && is_int( $i / 5 ):
				echo 'FizzBuzz';
				break;
		    case is_int( $i / 3 ):
				echo 'Fizz';
				break;
		    case is_int( $i / 5 ):
				echo 'Buzz';
				break;
			default:
				echo $i;
				break;
		}
		echo '</br>';
		
		
/*
		// IF and Else statements
		if( is_int( $i / 3 ) && is_int( $i / 5 ) ){
			echo 'FizzBuzz';
		}else if( is_int( $i / 3 ) ){
			echo 'Fizz';
		}else if( is_int( $i / 5 ) ){
			echo 'Buzz';
		}else{
			echo $i;
		}
		echo '</br>';
*/
	}

?>
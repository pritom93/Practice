<?php
		
// for ($i=1; $i<=8 ; $i++) { 
	
// 	for ($j=1; $j<= $i; $j++) { 
// 		echo "* ";
// 	}
// 	echo "</br>";

// }

//for ($i=1; $i<=6 ; $i++) { 
	// for ($j=1; $i<= $i ; $j++) { 
	// 	echo "$j";
	// 		}
	// 		echo "</br>";
		// }
	// for ($n = 8; $n>1; $n--) { 
	// 	  ($s=$n; 8-$s $s--) { 
	// 		echo "* ";
	// 	}
		// echo "</br>";
	// }	
	// for ($i=1; $i <= 6; $i++) { 
	// 	for ($j=1; $j <= $i; $j++) { 
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }
	// for ($i=1; $i <= 6; $i++) { 
	// 	for ($j=1; $j <= 6-$i; $j++) { 
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }
	function spchar()
	{
		return '#%&)(}{/@$';
	}
	function number()
	{
		return '0123456789';
	}
		
	function lowerCase()
	{
		return 'abcdefghijklmnopqrstuvwxyz';
	}

	echo str_shuffle(substr(str_shuffle(strtoupper(lowerCase())), 0,4).substr(str_shuffle(lowerCase()),1,5).substr(str_shuffle(number()),1,5) .substr(str_shuffle(spchar()),1,5) );


?>
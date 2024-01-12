<?php 
	
// Iterative function to 
// reverse digits of num 
function reversDigits($num) { 
	$rev_num = 0; 
	while($num > 1) { 
		$rev_num = $rev_num * 10 + $num % 10; 
		$num = (int)$num / 10; 
	} 
	return $rev_num; 
} 

// Driver Code 
$num = 456213; 
echo "Original number is :".$num; 
echo "\r\n"; 
echo "Reverse of no. is ", reversDigits($num); 
?>

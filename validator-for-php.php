<?php
//validate number
$x = 23;
if(!isset($x) || !is_numeric($x)){ //if you want if int release is_numeric with is_int()
	echo "ISSUE";
	return;
}

//calculations can be done normally
//end validate number


//validate string
$y = "Foo";
if(!isset($y) || strlen(trim($y)) == 0){
	echo "issue";
	return;	
}
//end string

//validate boolean
$z = 'true';
if(!isset($z) || !in_array($z, ['true','false','1','0'])){//in_array is not datatype sensitive if not requested
	echo "not boolean";
	return;
}


/*
Important note: Just because in_array can get 'true' as true and false as 'false' and vice versa, this does not mean that 'false' == false will return true. "true", "false" are treated as strings" 
*/

$z = in_array($z, ['true','1']) ? true : false;
//end



?>

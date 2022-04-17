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
$z = "true";
if(!isset($y) || !in_array($z, ['true','false','1',1])){//in array is not datatype sensitive if not requested
	echo "not boolean";
	return;
}

$z = in_array(['true','1']) ? true : false;
//end



?>
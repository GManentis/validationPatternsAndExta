<?php

//in case there is a chance that a not defined variable will pass, it is important to set the & indicator so as to not have undefined notice
function foo(&$param){
	echo !empty($param) ? $param : "nothing";
}

foo($myUndefinedVar);

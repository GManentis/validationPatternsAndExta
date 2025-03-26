<?php

//if we want to pass a non object variable by reference, we pass write the syntax as below:
function foo(&$param){
	$param + 1;
}

foo(1);

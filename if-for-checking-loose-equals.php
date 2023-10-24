<?php

/*
With loose equality check in case of boolean and another variable,
if the compared variable to boolean is 0, "0", 0.000000....(stringifed version of it) or empty string or null
(not stringified null), it will be treated as false. Other cases are considered true

In case of loose equality comparison if between number and string an string is number inside the content, both will be
treated as numbers
*/

//will echo the message
if(true == "makis") {
    echo "TREATED AS TRUE 1" . PHP_EOL;
}

//will echo the message
if("0.0000") {
    echo "TRUEEEEEEE" . PHP_EOL;
}

//will echo the message
if(false == null) {
    echo "TREATED AS false 2" . PHP_EOL;
}

//Since empty non numeric string and number the comparison if off
if("" ==  0) {
    echo "TREATED AS TRUE 3" . PHP_EOL;
}

//Since both are numeric values, even the string both are treated as numbers and their values match
if(0 == "0") {
    echo "TREATED AS TRUE 4" . PHP_EOL;
}

/*
Additional note:
if "0" and "0.000" as stringified numbers are used in if statements like if("0"){..} and if("0.000"){} are treated differently.
The stringified value "0" will be treated as false while "0.0000" will be treated as true
*/



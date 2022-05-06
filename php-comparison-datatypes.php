<?php
/*
how comparison works in php, with examples: 
the reason we echo boolean as strings is beacause php echos truthities as 1 and falseties as empty space
*/
echo 4 > "A" ? "true" : "false"; //PHP tries to treat "A" as number because it is compared with a number so it treats it as 0. If there was f.e 5a, it would be treated as 5
echo "\n";
echo "2" > "A" ? "true" : "false"; //PHP treats both entries as strings beacause 2 in in "", so it will be false 
echo "\n";
echo 2 > 11 ? "true" : "false"; //both are numeric and the comparison is like numeric
echo "\n";
echo "2" > "11" ? "true" : "false"; //PHP treats both as numbers due to their values inside the ""
echo "\n";
echo "2" > true ? "true" : "false"; // PHP checks value of "2", finds out that is a number, number other than 0 is true so it is true > true which is false 
echo "\n";
echo -2 < false ? "true" : "false"; //Numbers other than 0 are true so the comparison is true < false which is false
echo "\n";
echo true > false ? "true" : "false"; //true > false, can be considered self explanatory
echo "\n";
echo "Foo" > true ? "true" : "false"; //Foo is string so is "Foo" > "true" which is false because T > F as strings
/*Important note, "true" in "" is considered string not boolean*/
?>
<?php
/*
how datatype comparison works in php, 
1. If one of the compared values is number (no quotas), convert the other member to number before comparison
2. If two string are compared, PHP checks if both are of numeric value .If both values are numeric, then are compared as numbers else as strings

3. If boolean is compared with a variable that is number (without quotas), if number is no zero, then it is considered true else false
4. If boolean is compared to string, if string not empty and not equal "0" then is true. Else, false

5. If both operands are numeric strings, or one operand is a number and the other one is a numeric string
Important note, "true" in "" is considered string not boolean

Examples: 
the reason we echo boolean as strings is beacause php echos truthities as 1 and falseties as empty space
*/

echo 4 > "A" ? "true" : "false"; //PHP tries to treat "A" as number because it is compared with a number so it treats it as 0. If there was f.e 5a, it would be treated as 5
echo "\n";
echo "2" > "A" ? "true" : "false"; //Php checks that the content inside the "" is not numeric in both cases and treats them as strings . So the result is false
echo "\n";
echo 2 > 11 ? "true" : "false"; //both are numeric and the comparison is like numeric.False
echo "\n";
echo "2" < "11" ? "true" : "false"; //PHP treats both as numbers due to their values inside the "".The condition is true
echo "\n";
echo "2" > true ? "true" : "false"; // Not empty strings and not equal to "0" are true, else false. So true > true means false
echo "\n";
echo -2 > false ? "true" : "false"; //Numbers when compared to true of false are considered true if they are not 0. Else are considered false. So here is true > false which is true
echo "\n";
echo true > false ? "true" : "false"; //true > false, can be considered self explanatory
echo "\n";
echo "Foo" < true ? "true" : "false"; // Non empty string and not equal to "0" when compared to boolean as considered true else are considered false. So here true < true, which is false 

?>

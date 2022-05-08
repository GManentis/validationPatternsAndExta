/*
how comparison of different datatypes works in js:

1. if one of the compared param is boolean convert to 1 for true or 0 for false
2. If number (without "") and string are compared, then convert string to number and compare them


Examples: 
*/
console.log(2 > "a"); //js checks that 2 is number and A is string. So it compares them as 2 > NaN. NaN cannot be compared with number so it is false
console.log(2 > 11); //both are numeric and the comparison is like numeric
console.log("2" > "11"); //both data types are considered strings and are compared as strings. 2 is greater than
console.log("2" > true); //js checks if "2" is numeric. So, boolean is treated as 1, and compares them as numbers, so it is 2 > 1 which is true
console.log(-2 < false); //boolean is treated as 0, and the comparison turns to be -2 < 0 which is true
console.log(true > false); //true is 1 and false is 0 => returns true
console.log("true" == true); // true is considered as 1, "true" as NaN, return false
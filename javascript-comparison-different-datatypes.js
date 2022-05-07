/*
how comparison of different datatypes works in js:

1. If one of the compared values is number (no quotas), convert the other member to number before comparison
2. If boolean is compared with a variable that is number or is string of numeric value, the boolean is converted to 1 or 0
3. If boolean is compared to non empty string it equals (with == )true else is considered false

Examples: 
*/
console.log(2 > "a"); //js checks that 2 is number and A is string. So it compares them as 2 > NaN. NaN cannot be compared with number so it is false
console.log(2 > 11); //both are numeric and the comparison is like numeric
console.log("2" > "11"); //both data types are considered strings and are compared as strings. 2 is greater than
console.log("2" > true); //js checks if "2" is numeric. So, boolean is treated as 1, and compares them as numbers, so it is 2 > 1 which is true
console.log(-2 < false); //boolean is treated as 0, and the comparison turns to be -2 < 0 which is true
console.log(true > false); //true is 1 and false is 0 => returns true
console.log("foo" < true); // non empty string == to true, so the comparison is false
/*
how comparison works in js, with examples: 
*/
console.log(2 > "a"); //js checks that 2 is number and A is string. So it compares them as "2" > "A"
console.log(2 > 11); //both are numeric and the comparison is like numeric
console.log("2" > "11"); //both data types are considered strings and are compared as strings. 2 is greater than
console.log("2" > true); //boolean is treated as 1, js checks if "2" is numeric and compares them as numbers, so it is 2 > 1 which is true
console.log(-2 < false); //boolean is treated as 0, and the comparison turns to be -2 < 0 which is true
console.log(true > false); //true is 1 and false is 0 => returns true
console.log("foo" > true); //Foo is string so is "Foo" > "true" which is false because T > F as strings
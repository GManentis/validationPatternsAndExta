const Joi = require("joi");


/*
//This wont work because if declared as const, a function first must be declared before execution
foo("jgtjtij");
const foo = (x) => {
	console.log(x)
}
*/


/*This will work properly*/
foo("jgtjtij");
function foo(x){
	console.log(x)
}


/*below we will also have an error occurance because even if 
myparamFunction can be used the object schema has not been initialised
*/

/*
if lines 30-35 where included as part of module to be exported, there would be no error issue:
 module.exports = function(){ 
 //lines 30-35
 }
*/
let y = null;

const {error} = myParam(y);// the error will be here
if(error) console.log(error.details[0].message);

console.log("OK");

const myParamSchema = Joi.string().required();
function myParam(input){
	return myParamSchema.validate(input);
}
const Joi = require("joi");


/*
//This wont work because if declared as const, a function first must be declared before execution
*/
foo("jgtjtij");
const foo = (x) => {
	console.log(x)
}
/*End*/


/*This will work properly*/
foo("jgtjtij");
function foo(x){
	console.log(x)
}
/*End*/


/*below we will also have an error occurance because even if
myparamFunction can be used the object schema has not been initialised
*/
let y = null;

const {error} = myParam(y);// the error will be here
if(error) console.log(error.details[0].message);

console.log("OK");

const myParamSchema = Joi.string().required();
function myParam(input){
	return myParamSchema.validate(input);
}

/*End case*/

/*The strange case of module exports. In the example below the exported module will work fine though its logic collides with the above cases
The following module will work but consts are not in order, cases that would make things worse.
*/
module.exports = function(){
	displayMessage();
};

const displayMessage = () => {
	console.log(param);
}

const param = "OK";


/*
To sum up, always place things in proper order if you have arrow or functions returned as const/let, always use best practices and dont
implement modules as above but always in the right order
*/

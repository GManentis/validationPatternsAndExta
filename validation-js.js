//Check number
let x = "23";
console.log(x);
if(isNaN(x)){ //if you want to check if integer just add in if statement: x%1
	console.log("ISSUE");
}

//convert to number after validation
x *= 1;
console.log(x);
//end check number
//---------------------------------------------------------------

//Check string
let y = "Param";
//y == null => check both cases if(typeof y === 'undefined' || y === null)
//check typeof variable === "string" because type of null is object 	
if(y == null || typeof y !== 'string' || y.trim() === "" ){
	console.log("STRING ISSUE");
}

y = y.trim();
console.log(y);
//end check string

//check boolean
let z = true;
if(y == null || !['false',false,"0",0,true,'true',"1",1].includes(z)){
	console.log("Not bool");
}

z = [1,"1",'true',true].includes(z) ? true : false; 
//end check boolean
console.log("OK");
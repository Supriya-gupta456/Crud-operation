console.log('hello world');
const name="abhi";
const age = 30;
const rate=4.5;
const cool=true;
const x=null;
const y=undefined;
let z;
console.log(typeof name);
console.log('my name is' + name +'and i m ' + age +'years old');
const hello=`my name is${name}and i am ${age}`;
console.log(hello);
const s= 'technology , world';
console.log(s.length);
console.log(s.toUpperCase());
console.log(s.toLowerCase());
console.log(s.substring(0,10).toUpperCase());
console.log(s.split(''));
console.log(s.split(','));
//array//
 const ace = new Array (12,14,'gold','silver','ash','box');
 
 ace.push("apple");
 console.log(ace);
 ace.pop();
 console.log(ace);
 ace.unshift("red");
 console.log(ace);
 console.log(Array.isArray(ace));
 console.log(ace.indexOf("gold"));
 //object literals//
 const boy={
 	firstname:'adii',
 	lastname:'sharma',
 	age:20,
 	hobbies:['dance','football','reading'],
 	address:{
 		street:"jkcolony",
 		city:"kanpur",
 		state:"u.p"
 	}
 }
 console.log(boy);
console.log(boy.firstname,boy.lastname);
console.log(boy.hobbies[1]);
console.log(boy.address.state);
boy.email="adii@gmail.com";
console.log(boy);
//arrays of objects// 
const student=[
{
	No:1,
	name:'supii',
	result:'passed'
},
{
	No:2,
	name:'anji',
	result:'passed'
},
{
	No:3,
	name:'ajju',
	result:'failed'
}];
console.log(student);
//loops//
for(i=0;i<student.length;i++)
{
	console.log(student[i].name);
}
	//JSON format//
	const sJSON=JSON.stringify(student);
	{
	console.log(sJSON);
}
// new for loop//
for(let stu of student)
{
	console.log(stu.No);
}
//high order array methods//
//foreach//
student.forEach(function(stu)
{
	console.log(stu.name);
	console.log(stu.No);
});
//map//
const stuname=student.map(function(dent){
	return dent.name;
});
console.log(stuname);
//filter//
const sturesult=student.filter(function(dent){
  return dent.result==='passed';
}).map(function(dent){
	return dent.name;
});

console.log(sturesult);















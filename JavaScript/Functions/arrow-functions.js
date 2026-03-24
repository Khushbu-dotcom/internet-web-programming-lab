// Normal function
function doingStuff(x) {
    console.log(x);
}

// Arrow function versions
let doingArrowStuff = x => console.log(x);
doingArrowStuff("Great!");

let addTwoNumbers = (x, y) => console.log(x + y);
addTwoNumbers(5, 3);

let sayHi = () => console.log("Hi");
sayHi();

// Arrow function with array
const arr = ["squirrel", "alpaca", "buddy"];
arr.forEach(e => console.log(e));
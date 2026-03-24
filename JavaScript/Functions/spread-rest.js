// Spread operator
let spread = ["so", "much", "fun"];
let message = ["JavaScript", "is", ...spread, "and", "very", "powerful"];

console.log(message);

// Using spread in function
function addTwoNumbers(x, y) {
    console.log(x + y);
}

let arr = [5, 9];
addTwoNumbers(...arr);

// Rest parameter
function someFunction(param1, ...param2) {
    console.log(param1);
    console.log(param2);
}

someFunction("Hi", "there!", "How are you?");
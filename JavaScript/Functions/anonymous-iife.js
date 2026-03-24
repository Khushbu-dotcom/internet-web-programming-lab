// Anonymous function
const greet = function () {
    return "Hi there!";
};

console.log(greet());

// Anonymous function with parameters
const add = function (a, b) {
    return a + b;
};

console.log(add(2, 3));

// IIFE (Immediately Invoked Function Expression)
(function () {
    console.log("IIFE executed!");
})();
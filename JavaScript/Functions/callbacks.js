// Callback function
let v1 = function () {
    console.log("This is Function Callback example.");
};

function back(x) {
    x(); // calling function
    console.log("Inside back function.");
}

back(v1);
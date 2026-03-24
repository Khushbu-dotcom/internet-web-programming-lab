const prompt = require('prompt-sync')();

let arr1 = [];

for (let i = 0; i < 5; i++) {
    let s = prompt('Enter array element: ');
    arr1[i] = s;
}

console.log(arr1);
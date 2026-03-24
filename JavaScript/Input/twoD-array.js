const prompt = require('prompt-sync')();

let arr1 = [];

for (let i = 0; i < 3; i++) {
    arr1[i] = [];

    for (let j = 0; j < 3; j++) {
        let s = Number(prompt('Enter array element: '));
        arr1[i][j] = s;
    }
}

console.log(arr1);
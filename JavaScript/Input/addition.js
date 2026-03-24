const prompt = require('prompt-sync')();

const var1 = Number(prompt('Enter number 1: '));
const var2 = Number(prompt('Enter number 2: '));

let sum = var1 + var2;

console.log(`Sum = ${sum}`);
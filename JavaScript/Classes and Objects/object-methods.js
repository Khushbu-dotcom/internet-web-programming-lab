const Dog = {
    breed: 'Husky',
    color: 'Gray & White',
    details: {
        height: '18 inches',
        weight: '30 pounds'
    }
};

console.log(Dog.breed);
console.log(Dog.details.height);
console.log(Dog["color"]);
console.log(Dog.details["weight"]);
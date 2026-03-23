class Employee {
    constructor(firstName, lastName, yearsWorked) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.yearsWorked = yearsWorked;
    }
}

// Prototype method
Employee.prototype.getDetails = function () {
    return `${this.firstName} ${this.lastName} has worked for ${this.yearsWorked} years.`;
};

// Create employees
let emp1 = new Employee("Rahul", "Sharma", 5);
let emp2 = new Employee("Anita", "Verma", 3);
let emp3 = new Employee("Karan", "Singh", 7);

// Store in array
let employees = [emp1, emp2, emp3];

// Iterate and print
employees.forEach(emp => {
    console.log(emp.getDetails());
});
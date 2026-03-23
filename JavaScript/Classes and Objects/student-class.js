class Student {
    // Static property
    static term = "Term is four years";

    constructor(name, age, branch) {
        this.name = name;
        this.age = age;
        this.branch = branch;
    }
}

// Creating objects
let s1 = new Student("Rayne", 20, "CSE");
let s2 = new Student("Buddy", 21, "ME");

console.log(s1);
console.log(s2);

console.log(s1.name);
console.log(s1["branch"]);
console.log(Student.term);
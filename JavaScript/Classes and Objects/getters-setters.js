class Person {
    constructor(firstname, lastname) {
        this.firstname = firstname;
        this.lastname = lastname;
    }

    get name() {
        return this.firstname;
    }

    set name(n) {
        this.firstname = n;
    }

    get last() {
        return this.lastname;
    }

    set last(n) {
        this.lastname = n;
    }
}

let p1 = new Person("sree", "vani");

console.log(p1);

p1.name = "Sri";     // using setter
p1.last = "Rama";

console.log(p1);
console.log(p1.name);
console.log(p1.last);
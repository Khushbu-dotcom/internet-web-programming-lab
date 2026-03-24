// Simple function
function greet() {
    return "Hello!";
}

console.log(greet());

// Function with parameter
function greetUser(name = "Guest") {
    console.log("Hello, " + name);
}

greetUser();
greetUser("Aman");
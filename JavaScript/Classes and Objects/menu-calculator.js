class Menu {
    // Private fields
    #item1Price = 100;
    #item2Price = 50;

    constructor(qty1, qty2) {
        this.qty1 = qty1;
        this.qty2 = qty2;
    }

    // Method to calculate total
    calculateTotal() {
        return (this.qty1 * this.#item1Price) + (this.qty2 * this.#item2Price);
    }

    // Getter
    get total() {
        return this.calculateTotal();
    }
}

// Create objects
let order1 = new Menu(2, 3);
let order2 = new Menu(1, 5);
let order3 = new Menu(4, 2);

console.log("Order1 Total:", order1.total);
console.log("Order2 Total:", order2.total);
console.log("Order3 Total:", order3.total);
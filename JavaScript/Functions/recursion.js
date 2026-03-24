function getRecursive(n) {
    if (n <= 0) return;
    
    console.log(n);
    getRecursive(n - 1);
}

getRecursive(3);
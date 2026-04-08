<?php
// -----------------------------
// FUNCTION 1: Factorial
// -----------------------------
function factorial($n) {
    $fact = 1;
    for($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// -----------------------------
// FUNCTION 2: Prime Check
// -----------------------------
function isPrime($num) {
    if ($num <= 1) return false;

    for($i = 2; $i <= sqrt($num); $i++) {
        if($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// -----------------------------
// FUNCTION 3: String Reversal
// -----------------------------
function reverseString($str) {
    return strrev($str);
}

// -----------------------------
// USER INPUT (FORM)
// -----------------------------
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Functions Program</title>
</head>
<body>

<h2>PHP Functions Demo</h2>

<form method="post">
    Enter Number: <input type="number" name="number"><br><br>
    Enter String: <input type="text" name="text"><br><br>

    <input type="submit" name="factorial" value="Find Factorial">
    <input type="submit" name="prime" value="Check Prime">
    <input type="submit" name="reverse" value="Reverse String">
</form>

<?php
// -----------------------------
// FUNCTION CALL BASED ON INPUT
// -----------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['factorial'])) {
        $num = $_POST['number'];
        echo "<h3>Factorial of $num = " . factorial($num) . "</h3>";
    }

    if (isset($_POST['prime'])) {
        $num = $_POST['number'];
        if (isPrime($num)) {
            echo "<h3>$num is a Prime Number</h3>";
        } else {
            echo "<h3>$num is NOT a Prime Number</h3>";
        }
    }

    if (isset($_POST['reverse'])) {
        $text = $_POST['text'];
        echo "<h3>Reversed String: " . reverseString($text) . "</h3>";
    }
}
?>

</body>
</html>
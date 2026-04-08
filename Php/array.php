<?php
// 1. Create Indexed Array
$numbers = array(10, 20, 30, 40, 50);

// 2. Create Associative Array
$student = array(
    "name" => "Khushbu",
    "age" => 20,
    "branch" => "CSE"
);

// -----------------------------
// INSERTION
// -----------------------------
echo "<h3>After Insertion:</h3>";

// Indexed array insertion
array_push($numbers, 60);   // add at end
$numbers[] = 70;            // another way

// Associative array insertion
$student["city"] = "Ahmedabad";

// -----------------------------
// DELETION
// -----------------------------
echo "<h3>After Deletion:</h3>";

// Indexed array deletion
unset($numbers[1]);  // removes element at index 1 (20)

// Associative array deletion
unset($student["age"]);

// -----------------------------
// SORTING
// -----------------------------
echo "<h3>After Sorting:</h3>";

// Indexed array sorting
sort($numbers);   // ascending order

// Associative array sorting
asort($student);  // sort by values

// -----------------------------
// DISPLAY USING LOOPS
// -----------------------------

echo "<h3>Indexed Array Elements:</h3>";
foreach($numbers as $value) {
    echo $value . "<br>";
}

echo "<h3>Associative Array Elements:</h3>";
foreach($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>
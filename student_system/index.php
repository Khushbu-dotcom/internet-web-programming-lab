<?php

// Associative array for 5 students
$students = [
    ["name" => "Amit", "marks" => 85, "dob" => "2003-05-10"],
    ["name" => "Riya", "marks" => 72, "dob" => "2002-11-15"],
    ["name" => "Rahul", "marks" => 90, "dob" => "2004-01-20"],
    ["name" => "Sneha", "marks" => 65, "dob" => "2003-08-25"],
    ["name" => "Priya", "marks" => 78, "dob" => "2002-03-12"]
];

// Function to calculate average marks
function calculateAverage($students) {
    $total = 0;
    foreach($students as $student) {
        $total += $student['marks'];
    }
    return $total / count($students);
}

// Function to determine grade
function getGrade($marks) {
    if ($marks >= 90) return "A+";
    elseif ($marks >= 80) return "A";
    elseif ($marks >= 70) return "B";
    elseif ($marks >= 60) return "C";
    else return "D";
}

// Function to calculate age
function calculateAge($dob) {
    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate);
    return $age->y;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Data Management System</title>
</head>
<body>
<h2>Student Records</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Marks</th>
        <th>Grade</th>
        <th>DOB</th>
        <th>Age</th>
    </tr>

<?php
foreach($students as $student) {
    echo "<tr>";
    echo "<td>".$student['name']."</td>";
    echo "<td>".$student['marks']."</td>";
    echo "<td>".getGrade($student['marks'])."</td>";
    echo "<td>".$student['dob']."</td>";
    echo "<td>".calculateAge($student['dob'])."</td>";
    echo "</tr>";
}
?>
</table>
<br>

<?php
echo "<h3>Average Marks: ".calculateAverage($students)."</h3>";
?>

</body>
</html>

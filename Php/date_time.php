<?php
date_default_timezone_set("Asia/Kolkata"); // Set timezone

// -----------------------------
// CURRENT DATE & TIME
// -----------------------------
$currentDateTime = date("d-m-Y H:i:s");

// -----------------------------
// AGE CALCULATION
// -----------------------------
$age = "";
if (isset($_POST['dob'])) {
    $dob = $_POST['dob'];

    $birthDate = new DateTime($dob);
    $currentDate = new DateTime();

    $diff = $currentDate->diff($birthDate);
    $age = $diff->y; // years
}

// -----------------------------
// DAY, MONTH, YEAR
// -----------------------------
$day = date("d");
$month = date("m");
$year = date("Y");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Date & Time Application</title>
</head>
<body>

<h2>Date and Time Application</h2>

<!-- Current Date & Time -->
<h3>Current Date and Time:</h3>
<p><?php echo $currentDateTime; ?></p>

<!-- Day, Month, Year -->
<h3>Separated Date:</h3>
<p>Day: <?php echo $day; ?></p>
<p>Month: <?php echo $month; ?></p>
<p>Year: <?php echo $year; ?></p>

<!-- Age Calculation -->
<h3>Calculate Age</h3>
<form method="post">
    Enter Date of Birth: 
    <input type="date" name="dob" required>
    <input type="submit" value="Calculate Age">
</form>

<?php
if ($age !== "") {
    echo "<h3>Your Age: $age years</h3>";
}
?>

</body>
</html>
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $age = intval($_POST["age"]);
    
//     if ($age >= 0 && $age <= 12) {
//         $category = "Child";
//     } elseif ($age >= 13 && $age <= 19) {
//         $category = "Teenager";
//     } elseif ($age >= 20 && $age <= 59) {
//         $category = "Adult";
//     } elseif ($age >= 60) {
//         $category = "Senior";
//     } else {
//         $category = "Invalid age entered";
//     }
// }

 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $num = intval($_POST["number"]);
    
//     // Check if the number is positive, negative, or zero
//     if ($num > 0) {
//         $sign = "Positive";
//     } elseif ($num < 0) {
//         $sign = "Negative";
//     } else {
//         $sign = "Zero";
//     }
    
//     // Check if the number is even or odd
//     if ($num % 2 == 0) {
//         $parity = "Even";
//     } else {
//         $parity = "Odd";
//     }
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $score = intval($_POST["score"]);
    
//     // Determine the grade based on the score
//     if ($score >= 90 && $score <= 100) {
//         $grade = "A";
//     } elseif ($score >= 80 && $score < 90) {
//         $grade = "B";
//     } elseif ($score >= 70 && $score < 80) {
//         $grade = "C";
//     } elseif ($score >= 60 && $score < 70) {
//         $grade = "D";
//     } elseif ($score >= 0 && $score < 60) {
//         $grade = "F";
//     } else {
//         $grade = "Invalid score entered";
//     }
// }



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = intval($_POST["year"]);
    
    // Check if the year is a leap year
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        $leapYear = "Yes, it is a leap year.";
    } else {
        $leapYear = "No, it is not a leap year.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Age Categorizer</title>
</head>
<body>
    <h2>Enter Your Age</h2>
    <form method="post">
        <label for="age">Age:</label>
        <input type="number" name="age" required>
        <button type="submit">Submit</button>
    </form>
    
    <?php if (isset($category)): ?>
        <h3>Category: <?php echo htmlspecialchars($category); ?></h3>
    <?php endif; ?>

    <h2>Enter a Number</h2>
    <form method="post">
        <label for="number">Number:</label>
        <input type="number" name="number" required>
        <button type="submit">Submit</button>
    </form>
    
    <?php if (isset($sign) && isset($parity)): ?>
        <h3>Result:</h3>
        <p>Sign: <?php echo htmlspecialchars($sign); ?></p>
        <p>Parity: <?php echo htmlspecialchars($parity); ?></p>
    <?php endif; ?>

    <h2>Enter Student Score</h2>
    <form method="post">
        <label for="score">Score (0-100):</label>
        <input type="number" name="score" required min="0" max="100">
        <button type="submit">Submit</button>
    </form>
    
    <?php if (isset($grade)): ?>
        <h3>Grade: <?php echo htmlspecialchars($grade); ?></h3>
    <?php endif; ?>
    <h2>Enter a Year</h2>
    <form method="post">
        <label for="year">Year:</label>
        <input type="number" name="year" required>
        <button type="submit">Submit</button>
    </form>
    
    <?php if (isset($leapYear)): ?>
        <h3>Result: <?php echo htmlspecialchars($leapYear); ?></h3>
    <?php endif; ?>
</body>
</html>
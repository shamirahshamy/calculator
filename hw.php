<?php

// Print numbers from 1 to 10
// for ($i = 1; $i <= 10; $i++) {
//     echo $i . " ";
// }

// echo "<br><br>Even numbers between 1 and 20:<br>";
// $sum = 0;

// Print only even numbers between 1 and 20 and calculate sum
// for ($i = 2; $i <= 20; $i += 2) {
//     echo $i . " ";
    
// }

// $sum = 0;

// $sum += $i;
// echo "<br><br>Sum of even numbers: " . $sum;


// echo "Even numbers between 1 and 20:<br>";

// for ($i = 2; $i <= 20; $i += 2) {
//     echo $i . " ";
//     $sum += $i;
// }

// echo "<br>Sum of even numbers: " . $sum;

// $sum = 0;
// $num = 1;

// while ($num <= 50) {
//     if ($num % 2 != 0) { 
//         $sum += $num;
//     }
//     $num++;
// }

// echo "Sum of odd numbers from 1 to 50: " . $sum;

// $num = 8; // Change this number to calculate the factorial of a different number
// $factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Factorial of $num is: " . $factorial;

for ($i = 100; $i >= 1; $i--) {
    echo $i . " ";
}

// $num = 5; // Change this number for a different multiplication table
// $i = 1;

// echo "Multiplication Table of $num:<br>";

// while ($i <= 10) {
//     echo "$num x $i = " . ($num * $i) . "<br>";
//     $i++;
// }

// $num1 = 0;
// $num2 = 1;

// echo "Fibonacci Series (First 10 Numbers):<br>";

// for ($i = 1; $i <= 10; $i++) {
//     echo $num1 . " ";
//     $nextNum = $num1 + $num2;
//     $num1 = $num2;
//     $num2 = $nextNum;
// }

// $names = ["Alice", "Bob", "Charlie"];

// echo "List of Names:<br>";

// foreach ($names as $name) {
//     echo $name . "<br>";
// }

// $numbers = [10, 20, 30, 40, 50];
// $sum = 0;

// foreach ($numbers as $num) {
//     $sum += $num;
// }

// echo "Sum of all elements: " . $sum;


// echo "Prime numbers between 1 and 50:<br>";

// for ($num = 2; $num <= 50; $num++) { 
//     $isPrime = true;

//     for ($i = 2; $i <= sqrt($num); $i++) { 
//         if ($num % $i == 0) { 
//             $isPrime = false;
//             break; 
//         }
//     }

//     if ($isPrime) {
//         echo $num . " ";
//     }
// }

// $rows = 5; // Number of rows in the pattern

// for ($i = 1; $i <= $rows; $i++) { 
//     for ($j = 1; $j <= $i; $j++) { 
//         echo "*";
//     }
//     echo "<br>";
// }


// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 5) {
//         continue; // Skip the number 5
//     }
    
//     if ($i == 8) {
//         break; // Stop the loop when it reaches 8
//     }
    
//     echo $i . " ";
// }

// $students = [
//     "Alice" => 85,
//     "Bob" => 78,
//     "Charlie" => 92
// ];

// echo "Student Marks:<br>";

// foreach ($students as $name => $marks) {
//     echo "$name: $marks<br>";}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Number Printer</title>
</head>
<body>
   
</body>
</html>

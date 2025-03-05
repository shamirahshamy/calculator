<?php
// $prices = [50, 120, 75, 200, 90, 150, 80];

// // Increase prices by 15%
// $updatedPrices = array_map(function($prices) {
//     return $prices * 1.15;
// }, $prices);


// // Removing products below $100
// $filteredPrices = array_filter($updatedPrices, function($price) {
//     return $price >= 100;
// });

// print_r($updatedPrices);

// // Calculating the total sum of remaining products
// $totalSum = array_reduce($filteredPrices, function($carry, $price) {
//     return $carry + $price;
// }, 0);

// echo "Updated Prices: " . implode(", ", $updatedPrices) . "\n";
// echo "Filtered Prices (>= $100): " . implode(", ", $filteredPrices) . "\n";
// echo "Total Sum: $totalSum\n";


// $grades = [95, 67, 88, 76, 54, 90, 82, 60];

// // Convert marks to letter grades
// $letterGrades = array_map(function($grade) {
//     if ($grade >= 90) return 'A';
//     if ($grade >= 80) return 'B';
//     if ($grade >= 70) return 'C';
//     if ($grade >= 60) return 'D';
//     return 'F';
// }, $grades);

// // Filter out students who failed (F grade)
// $passedGrades = array_filter($letterGrades, function($grade) {
//     return $grade !== 'F';
// });

// // Count the total number of passed students
// $totalPassed = array_reduce($passedGrades, function($count) {
//     return $count + 1;
// }, 0);

// echo "Letter Grades: " . implode(", ", $letterGrades) . "\n";
// echo "Failed Students (with 'F' grades): " . implode(", ", $passedGrades) . "\n";
// echo "Total Passed Students: \n" ."$totalPassed";



$numbers = [3, 7, 4, 6, 9, 12, 5, 8];

// Convert numbers to their square
$squaredNumbers = array_map(function($num) {
    return $num * $num;
}, $numbers);

// only even squares
$evenSquares = array_filter($squaredNumbers, function($square) {
    return $square % 2 === 0;
});

// the sum of all even squares
$sumEvenSquares = array_reduce($evenSquares, function($sum, $square) {
    return $sum + $square;
}, 0);

echo "Squared Numbers: " . implode(", ", $squaredNumbers) . "\n";
echo "Even Squares: " . implode(", ", $evenSquares) . "\n";
echo "Sum of Even Squares: $sumEvenSquares\n";



// $text = "The quick brown fox jumps over the lazy dog";

// //string into an array of words
// $words = explode(" ", $text);

// // all words to uppercase
// $upperWords = array_map('strtoupper', $words);

// // Remove words that have less than 4 characters
// $filteredWords = array_filter($upperWords, function($word) {
//     return strlen($word) >= 4;
// });

// // total number of remaining words
// $totalWords = array_reduce($filteredWords, function($count) {
//     return $count + 1;
// }, 0);

// echo "Uppercase Words: " . implode(", ", $upperWords) . "\n";
// echo "Filtered Words (>= 4 chars): " . implode(", ", $filteredWords) . "\n";
// echo "Total Remaining Words: $totalWords\n";



// $numbers = [345, 29, 87, 102, 56, 902, 78];

// // Convert each number to the sum of its digits
// $digitSums = array_map(function ($num) {
//     return array_sum(str_split($num));
// }, $numbers);

// //Keep only sums greater than 10
// $filteredSums = array_filter($digitSums, function ($sum) {
//     return $sum > 10;
// });

// // maximum digit sum
// $maxSum = array_reduce($filteredSums, function ($carry, $sum) {
//     return ($carry === null || $sum > $carry) ? $sum : $carry;
// }, null);

// // results
// echo "Original numbers: " . implode(", ", $numbers) . "\n";
// echo "Digit sums: " . implode(", ", $digitSums) . "\n";
// echo "Filtered sums (greater than 10): " . implode(", ", $filteredSums) . "\n";
// echo "Maximum digit sum: " . $maxSum . "\n";
?>


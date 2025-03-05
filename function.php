<?php

function greetUser($name) {
    return "Hello, $name! Welcome to PHP functions.";
}
echo greetUser("Shamirah");




function sumNumbers($a, $b) {
    return $a + $b;
}
echo sumNumbers(10, 5);



function isEven($num) {
    return ($num % 2 == 0) ? "Even" : "Odd";
}
echo isEven(10); 
echo "\n";
echo isEven(7); 



function findMax($a, $b, $c) {
    return max($a, $b, $c);
}
echo findMax(10, 25, 15); 



function reverseString($str) {
    return strrev($str);
}
echo reverseString("shamirah"); 




function factorial($n) {
    if ($n < 0) {
        return "Undefined for negative numbers";
    }
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
echo factorial(5); 


function generatePassword($length = 8) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
    return substr(str_shuffle($chars), 0, $length);
}
echo generatePassword(15);




















// //  greet a user
// function greetUser($name) {
//     return "Hello, $name! Welcome to PHP functions.".'<br>';
// }

// //sum two numbers
// function sumNumbers($a, $b) {
//     return $a + $b.'<br>';
// }

// //  number is even or odd
// function isEven($num) {
//     return ($num % 2 == 0) ? "Even" : "Odd".'<br>';
// }

// //  the maximum of three numbers
// function findMax($a, $b, $c) {
//     return max($a, $b, $c).'<br>';
// }

// //reverse a string
// function reverseString($str) {
//     return strrev($str).'<br>';
// }

// //  calculate factorial
// function factorial($n) {
//     if ($n < 0) {
//         return "Undefined for negative numbers";
//     }
//     if ($n == 0 || $n == 1) {
//         return 1;
//     }
//     return $n * factorial($n - 1).'<br>';
// }

// a random password
// function generatePassword($length = 15) {
//     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()";
//     return substr(str_shuffle($chars), 0, $length).'<br>';
// }

// // results for each function
// echo greetUser("Derrick") . "\n";
// echo "Sum of 10 and 5: " . sumNumbers(10, 5) . "\n";
// echo "Number 10 is: " . isEven(10) . "\n";
// echo "Maximum of (5, 15, 10): " . findMax(5, 15, 10) . "\n";
// echo "Reversed string of 'shamirah': " . reverseString("shamirah") . "\n";
// // echo "Factorial of 5: " . factorial(5) . "\n";
// echo "Generated Password: " . generatePassword() . "\n";

?>
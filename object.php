<?php
// class car { 
//     public $brand; 
//     public $model; 
//     public $year; 
//   } 
   
//   $myCar = new car(); 
   
//   $myCar->brand = 'Honda'; 
//   $myCar->model = 'CR-V'; 
//   $myCar->year = '2022'; 
   
//   var_dump($myCar); 





class Car {
    public $brand;
    public $model;
    public $year;

    // properties
    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to get car information
    public function getCarInfo() {
        return "This car is a {$this->year} {$this->brand} {$this->model}.";
    }
}

//  object of the Car class
$myCar = new Car("Honda", "CR-V", 2022);

//  method and displaying the result
echo $myCar->getCarInfo();





// class Car {
//     public $brand;
//     public $model;
//     public $year;

//     // Constructor to initialize properties
//     public function __construct($brand, $model, $year) {
//         $this->brand = $brand;
//         $this->model = $model;
//         $this->year = $year;
//     }

//     //  geting car information
//     public function getCarInfo() {
//         return "This car is a {$this->year} {$this->brand} {$this->model}.";
//     }

//     // driving the car
//     public function drive() {
//         return "The {$this->year} {$this->brand} {$this->model} is now driving!";
//     }
// }

// // object of the Car class using the constructor
// $myCar = new Car("Honda", "CR-V", 2022);

// // Displaying car properties
// echo $myCar->getCarInfo(); 
// echo "<br>"; 
// echo $myCar->drive();




// class Car {
//     public $brand;
//     public $model;
//     private $year; 

//     // Constructor to initialize properties
//     public function __construct($brand, $model, $year) {
//         $this->brand = $brand;
//         $this->model = $model;
//         $this->year = $year;
//     }

//     // Getter method for $year
//     public function getYear() {
//         return $this->year;
//     }

//     //  Setter method for $year
//     public function setYear($newYear) {
//         if (is_numeric($newYear) && $newYear > 1885 && $newYear <= date("Y") + 1) { 
//             $this->year = $newYear;
//         } else {
//             echo "Invalid year provided.";
//         }
//     }

//     // Method to get car information
//     public function getCarInfo() {
//         return "This car is a {$this->year} {$this->brand} {$this->model}.";
//     }
// }

// //  an object of the Car class
// $myCar = new Car("Honda", "CR-V", 2022);



// // $year using the getter method
// echo "Year using getter: " . $myCar->getYear();
// echo "<br>";

// // $year using the setter method
// $myCar->setYear(2022);
// echo "Updated car info: " . $myCar->getCarInfo();


//7

// // Parent Class: Person
// class Person {
//     public $name;
//     public $age;
//     public $gender;

//     // Constructor to initialize properties
//     public function __construct($name, $age, $gender) {
//         $this->name = $name;
//         $this->age = $age;
//         $this->gender = $gender;
//     }

//     //  introduce the person
//     public function introduce() {
//         echo "Hello, my name is {$this->name}. I am {$this->age} years old.<br>";
//     }
// }

// // Child Class: Student 
// class Student extends Person {
//     public $schoolName;

//     // Constructor for Student (calls parent constructor)
//     public function __construct($name, $age, $gender, $schoolName) {
//         parent::__construct($name, $age, $gender); 
//         $this->schoolName = $schoolName;
//     }

//     // Method to show study details
//     public function study() {
//         echo "{$this->name} is studying at {$this->schoolName}.";
//     }
// }

// //  an object of Student class
// $student1 = new Student("Shamirah Shamy", 20, "Female", "StoneVille Computer Academy ");

// //introduce() from the Person class
// $student1->introduce();
// //study
// $student1->study();





// class MathHelper {
//     //  Static property for π
//     public static $pi = 3.1416;

//     //  Static method to calculate circle area
//     public static function circleArea($radius) {
//         return self::$pi * ($radius * $radius);
//     }
// }

// // Calling the static method without creating an object
// $area = MathHelper::circleArea(5);
// echo "The area of the circle with radius 5 is: " . $area;





// // Parent Class: Person
// class Person {
//     public $name;
//     public $age;
//     public $gender;

//     // Constructor to initialize properties
//     public function __construct($name, $age, $gender) {
//         $this->name = $name;
//         $this->age = $age;
//         $this->gender = $gender;
//     }

//     // Method to introduce the person
//     public function introduce() {
//         echo "Hello, my name is {$this->name}. I am {$this->age} years old.<br>";
//     }
// }

// // Child Class: Student (inherits from Person)
// class Student extends Person {
//     public $schoolName;

//     // Constructor for Student (calls parent constructor)
//     public function __construct($name, $age, $gender, $schoolName) {
//         parent::__construct($name, $age, $gender); // Call parent constructor
//         $this->schoolName = $schoolName;
//     }

//     //  Overriding introduce() method
//     public function introduce() {
//         echo "Hello, my name is {$this->name}. I am {$this->age} years old and I study at {$this->schoolName}.<br>";
//     }
// }

// // a Student object
// $student1 = new Student("Shamirah Shamy", 20, "Female", "StoneVille Computer Academy");

// //  the overridden introduce() method
// $student1->introduce();





// // Define the Animal interface
// interface Animal {
//     public function makeSound(); 
// }

// // Dog class implements Animal
// class Dog implements Animal {
//     public function makeSound() {
//         echo "Woof!<br>";
//     }
// }

// // Cat class implements Animal
// class Cat implements Animal {
//     public function makeSound() {
//         echo "Meow!<br>";
//     }
// }

// //  objects of Dog and Cat
// $dog = new Dog();
// $cat = new Cat();

// //Calling makeSound on Dog and Cat objects
// $dog->makeSound(); 
// $cat->makeSound(); 





class BankAccount {
    private $accountHolder;
    private $balance;

    // Constructor to initialize account holder and balance
    public function __construct($accountHolder, $initialBalance) {
        $this->accountHolder = $accountHolder;
        $this->balance = $initialBalance;
    }

    // Method to deposit money into the account
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: \${$amount}. New balance: \${$this->balance}.<br>";
        } else {
            echo "Deposit amount must be greater than 0.<br>";
        }
    }

    // Method to withdraw money from the account
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew: \${$amount}. New balance: \${$this->balance}.<br>";
        } else {
            echo "Insufficient funds or invalid amount.<br>";
        }
    }

    // Method to display the account details
    public function getAccountDetails() {
        echo "Account Holder: {$this->accountHolder}<br>";
        echo "Current Balance: \${$this->balance}<br>";
    }
}

// Creating an object of BankAccount
$account = new BankAccount("Shamirah", 1000); // Initial balance is 1000

// Displaying initial account details
$account->getAccountDetails();

// Depositing money
$account->deposit(500);

// Withdrawing money
$account->withdraw(200);

// Trying to withdraw more than the balance
$account->withdraw(1500);

// Displaying the final account details
$account->getAccountDetails();




?>
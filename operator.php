<?php
class User {
    protected $role; // Protected property

    public function __construct($role) {
        $this->role = $role;
    }

    protected function getRole() { // Protected method
        return $this->role;
    }
}
class AdminUser extends User {
    public function showRole() {
        return "Admin Role: " . $this->getRole(); 
    }
}

// Creating an AdminUser instance
$admin = new AdminUser("Administrator");
echo $admin->showRole();
// $admin = new AdminUser("Administrator");
// echo $admin->role




// // Base User class
// class User {
//     protected $role; // Protected property

//     public function __construct($role) {
//         $this->role = $role;
//     }

//     protected function getRole() { // Protected method
//         return $this->role;
//     }
// }

// // Subclass Admin
// class Admin extends User {
//     public function showRole() {
//         return "Admin Role: " . $this->getRole(); 
//     }
// }

// // Instantiate an Admin object
// $admin = new Admin("Administrator");

// // Call showRole() method
// echo $admin->showRole();




// class Vehicle {
//     public function getFuelType() {
//         return "Diesel";
//     }
// }

// // Instantiate Vehicle object
// $vehicle = new Vehicle();

// // Call getFuelType() method
// echo $vehicle->getFuelType();




// class Vehicle {
//     public function getFuelType() {
//         return "Diesel";
//     }
// }

// // Subclass Car that overrides getFuelType()
// class Car extends Vehicle {
//     public function getFuelType() {
//         return "Petrol";
//     }
// }

// // Instantiate a Car object
// $car = new Car();

// // Call getFuelType() method
// echo $car->getFuelType();




// class User {
//     private static $userCount = 0; // Static property

//     public function __construct() {
//         self::$userCount++; 
//     }

//     public static function getUserCount() { // Static method
//         return self::$userCount;
//     }
// }

// // Creating User objects
// $user1 = new User();
// $user2 = new User();
// $user3 = new User();
// $user4 = new User();

// // Get total user count
// echo "Total Users: " . User::getUserCount();




// class User {
//     public static $count = 0; 

//     public function __construct() {
//         self::$count++; 
//     }
// }

// // Creating three User objects
// $user1 = new User();
// $user2 = new User();
// $user3 = new User();
// $user4 = new User();
// $user5 = new User();

// // Print the total number of users
// echo "Total Users: " . User::$count;




// class User {
//     public $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }
// }

// // Creating two different objects with the same data
// $user1 = new User("Alice");
// $user2 = new User("Alice");

// // Assigning the same reference
// $user3 = $user1;

// // Checking identity (same instance)
// if ($user1 === $user3) {
//     echo "user1 and user3 are the same object.\n"; //print
// } else {
//     echo "user1 and user3 are different objects.\n";
// }

// // Checking equality (same values)
// if ($user1 == $user2) {
//     echo "user1 and user2 have the same values.\n"; // print
// } else {
//     echo "user1 and user2 have different values.\n";
// }

// // Checking identity (different instances)
// if ($user1 === $user2) {
//     echo "user1 and user2 are the same object.\n";
// } else {
//     echo "user1 and user2 are different objects.\n";}




// class Person {
//     public $name;
//     public $age;

//     public function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }
// }

// // Creating two different objects with the same values
// $person1 = new Person("John", 25);
// $person2 = new Person("John", 25);

// // Comparing using ==
// if ($person1 == $person2) {
//     echo "person1 and person2 are equal (== comparison).\n"; // will print
// } else {
//     echo "person1 and person2 are not equal (== comparison).\n";
// }

// // Comparing using ===
// if ($person1 === $person2) {
//     echo "person1 and person2 are identical (=== comparison).\n";
// } else {
//     echo "person1 and person2 are not identical (=== comparison).\n"; //  will print
// }






// class Person {
//     public $name;
//     public $age;

//     public function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }
// }

// // Creating an original object
// $original = new Person("Shamirah", 20);

// // Cloning the object
// $duplicate = clone $original;

// // Modifying the duplicate object
// $duplicate->name = "Shamy";

// // Output results
// echo "Original Name: " . $original->name . "\n"; 
// echo "Duplicate Name: " . $duplicate->name . "\n";





// class Product {
//     public $name;
//     public $price;

//     public function __construct($name, $price) {
//         $this->name = $name;
//         $this->price = $price;
//     }
// }

// // Creating the original object $product1
// $product1 = new Product("Laptop", 1000);

// // Cloning $product1 into $product2
// $product2 = clone $product1;

// // Modifying the price of the cloned object $product2
// $product2->price = 1200;

// // Printing both objects to show that they are different
// echo "Product 1: Name = {$product1->name}, Price = {$product1->price}\n"; 
// echo "Product 2: Name = {$product2->name}, Price = {$product2->price}\n";
?>




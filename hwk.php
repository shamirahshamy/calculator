<?php
// Base class Vehicle
class Vehicle {
    protected $brand;
    protected $model;

    // Constructor to initialize brand and model
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    // Method to display vehicle info
    public function displayInfo() {
        echo "Brand: {$this->brand}, Model: {$this->model}\n";
    }
}

// Child class Car extending Vehicle
class Car extends Vehicle {
    private $fuelType;

    // Constructor to initialize Car-specific properties
    public function __construct($brand, $model, $fuelType) {
        parent::__construct($brand, $model); // Call parent constructor
        $this->fuelType = $fuelType;
    }

    // Override displayInfo() to include fuel type
    public function displayInfo() {
        echo "Car - Brand: {$this->brand}, Model: {$this->model}, Fuel Type: {$this->fuelType}\n";
    }
}

// Child class Motorcycle extending Vehicle
class Motorcycle extends Vehicle {
    private $engineCapacity;

    // Constructor to initialize Motorcycle-specific properties
    public function __construct($brand, $model, $engineCapacity) {
        parent::__construct($brand, $model); // Call parent constructor
        $this->engineCapacity = $engineCapacity;
    }

    // Override displayInfo() to include engine capacity
    public function displayInfo() {
        echo "Motorcycle - Brand: {$this->brand}, Model: {$this->model}, Engine Capacity: {$this->engineCapacity}cc\n";
    }
}

// Instantiate a Car object
$car = new Car("Mitsubishi Pajero", "SUV", "diesel");

// Instantiate a Motorcycle object
$motorcycle = new Motorcycle("Yamaha", "R1", 1000);

// Display vehicle information
$car->displayInfo();
$motorcycle->displayInfo();
?>

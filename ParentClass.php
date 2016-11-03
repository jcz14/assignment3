<?php
	// This is the file for the parent class

	class CarBasics {
		// private variables
    private $make;
    private $model;
    private $color;
    private $mileage;
    private $fuel;

    // constructor
    public function __construct($make, $model, $color, $mileage, $fuel) {
      $this->make = make;
      $this->model = model;
      $this->color = color;
      $this->mileage = mileage;
      $this->fuel = fuel;
    }

    // returns basic details about this car
    public function __toString() {
      return $this->getColor() . " " . $this->getMake() . " " . $this->getModel() . " with a odometer reading of " . $this->getMileage() . " miles and " . $this->getFuel() . " gallons of fuel in the tank.";
    }

    // getters
    public function getMake() {
      return $this->make;
    }

    public function getModel() {
      return $this->model;
    }

    public function getColor() {
      return $this->color;
    }

    public function getMileage() {
      return $this->mileage;
    }

    public function getFuel() {
      return $this->fuel;
    }

    // setters
    public function setMake($make) {
      $this->make = $make;
    }

    public function setModel($model) {
      $this->model = $model;
    }

    public function setColor($color) {
      $this->color = $color;
    }

    public function setMileage($mileage) {
      $this->mileage = $mileage;
    }

    public function setFuel($fuel) {
      $this->fuel = $fuel;
    }
  }

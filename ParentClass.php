<?php
	// This is the file for the parent class

	class CarBasics {
		// private variables
    private $make;
    private $model;

    // constructor
    public function __construct($make, $model) {
      $this->make = $make;
      $this->model = $model;
    }

    // returns basic details about this car
    public function __toString() {
      return $this->getMake() . " " . $this->getModel();
    }

    // getters
    public function getMake() {
      return $this->make;
    }

    public function getModel() {
      return $this->model;
    }

    // setters
    public function setMake($make) {
      $this->make = $make;
    }

    public function setModel($model) {
      $this->model = $model;
    }
  }

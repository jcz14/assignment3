<?php 
	// extends Car class

	class Car extends CarBasics {
		// private variables
    private $doors;
    private $transmission;
    private $awd;
    private $sunroof;
    private $bluetooth;
    private $seatwarmer;
    private $seatmaterial;

    // constructor
    public function __construct($make, $model, $color, $mileage, $fuel, $doors, $transmission, $awd, $sunroof, $bluetooth, $seatwarmer, $seatmaterial) {
      parent::__construct($make, $model, $color, $mileage, $fuel);
      $this->doors = $doors;
      $this->transmission = $transmission;
      $this->awd = $awd;
      $this->sunroof = $sunroof;
      $this->bluetooth = $bluetooth;
      $this->seatwarmer = $seatwarmer;
      $this->seatmaterial = $seatmaterial;
    }

    // returns the features of this car
    public function __toString() {
      // still need to implement this
    }

    // getters
    public function getDoors() {
      return $this->doors;
    }

    public function getTransmission() {
      return $this->transmission;
    }

    public function getAwd() {
      return $this->awd;
    }

    public function getSunroof() {
      return $this->sunroof;
    }

    public function getBluetooth() {
      return $this->bluetooth;
    }

    public function getSeatwarmer() {
      return $this->seatwarmer;
    }

    public function getSeatmaterial() {
      return $this->seatmaterial;
    }

    // setters
    public function setDoors($doors) {
      $this->doors = $doors;
    }

    public function setTransmission($transmission) {
      $this->transmission = $transmission;
    }

    public function setAwd($awd) {
      $this->awd = $awd;
    }

    public function setSunroof($sunroof) {
      $this->sunroof = $sunroof;
    }

    public function setBluetooth($bluetooth) {
      $this->bluetooth = $bluetooth;
    }

    public function setSeatwarmer($seatwarmer) {
      $this->seatwarmer = $seatwarmer;
    }

    public function setSeatmaterial($seatmaterial) {
      $this->seatmaterial = $seatmaterial;
    }
  }

<?php 
  include 'ParentClass.php';
  include 'ChildClass.php';

  $car = new CarBasics("Toyota", "Camry");
	$carInfo = new Car("Toyota", "Camry", "silver", "15", "16.5");
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	<link rel="stylesheet" href="assignment3.css">
</head>

<body>
  <p class="large-text">I just bought a car!</p>
  <p>It's a <?= $car; ?>.</p>
  <p>I drove it home and it immediately lost ten percent of its value!</p>
  <p class="silver">I have a <?= $carInfo; ?></p>
  <p>Silver looks nice, but only when it's clean. I decided to repaint the car something darker so the dust and dirt won't be as noticeable.</p>
  <?= $carInfo->setColor("dark blue"); ?>
  <?= $carInfo->setMileage("21"); ?>
  <?= $carInfo->setFuel("16.3"); ?>
  <p class="darkblue">Now I have a <?= $carInfo; ?></p>
  <p>My friend doesn't have a car, so I decided to loan mine to him for a day.</p>
  <?= $carInfo->setMileage("51"); ?>
  <?= $carInfo->setFuel("14.1"); ?>
  <p class="darkblue">At around 10 PM he returned with my <?= $carInfo; ?></p>
  <p>He told me it's a lot easier to go places with a car. A few days later he also bought a car.</p>
  <?= $car->setMake("Ford"); ?>
  <?= $car->setMake("Focus"); ?>
  <p>Now his <?= $car; ?> is parked next to my <?= $carInfo->getOriginalParent(); ?>.</p>
</body>
</html>
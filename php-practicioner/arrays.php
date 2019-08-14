<?php

$animals = [
  'Dog',
  'Cat',
  'Turtle',
  'Bird'
];

$names = [
  'Thijs',
  'Marja',
  'Mieke',
  'Jan'
];

foreach ($names as $name){
  echo $name . ', ';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php 
      foreach($animals as $animal) {
        echo '<li>' . $animal . '</li>';
      }
    ?>
  </ul>
</body>
</html>
<?php


$person = [
  'age'     => 38,
  'height'  => 196,
  'haircolor' => 'red',
  'career' => 'webdeveloper'
];

unset($person['haircolor']);  // REMOVE KEY + VALUE

$person['name'] = 'Matthijs Boet'; // ADD KEY AND VALUE

var_dump($person);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Associative Arrays</title>
</head>
<body>
  
  <ul>
    <?php foreach($person as $feature => $value) : ?>
      <li><?= $feature . " = " . $value; ?></li>
    <?php endforeach ?>
  </ul>
  

</body>
</html>
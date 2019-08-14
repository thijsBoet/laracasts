<?php

$task = [
  'title'=>'buy groceries',
  'due'=>'tommorrow 19:30',
  'assigned_to'=>'Susie Q',
  'completed'=> false
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tasks</title>
</head>
<body>
  <header>
    <h1>Task For The Day</h1>
  </header>
  <article>
    <ul>
      <?php foreach($task as $heading => $value) : ?>
        <li>
          <strong><?= ucwords($heading); ?>: </strong><?= ucwords($value) ?>
        </li>
      <?php endforeach ?>
        <li>
          <!-- Ternairy operator ? true : false -->
          <strong>Status: </strong><?= $task['completed']? 'Complete' : 'Incomplete' ?> 
        </li>
    </ul>
  </article>
</body>
</html>
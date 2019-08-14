<?php

function executeUpTo($number)
{
  $output = [];

  foreach(range(1, $number) as $i)
  {
    $output[] = execute($i);
  }

  return $output;
}

function execute($number)
{
  if($number%15 == 0) return '<li>Fizz Buzz</li>';
  if($number%3 == 0) return '<li>Buzz</li>';
  if($number%5 == 0) return '<li>Fizz</li>';

  return "<li>" . strval($number) . "</li>" ;
}

?>
<ul>
<?= implode("", executeUpTo(1000)); ?>
</ul>
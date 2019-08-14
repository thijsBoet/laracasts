<?php

try {
  return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
} catch(PDOException $e) {
  die($e->getMessage());
}

$stmt = $pdo->prepare('select * from todos');
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');

var_dump($tasks[0]->description);
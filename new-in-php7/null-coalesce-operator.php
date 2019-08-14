<?php

$_GET['name'] = 'Matthijs';

// Old way
$name = isset($_GET['name']) ? $_GET['name'] : 'annonymous';

// Null Coalesce Operator
$name = $_GET['name'] ?? 'annonymous';
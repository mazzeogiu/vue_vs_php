<?php
require_once (dirname(__DIR__). '/models/Wines.php');

$query = new Wines;
$data = $query->list();

echo ('<pre>');
var_dump($data);

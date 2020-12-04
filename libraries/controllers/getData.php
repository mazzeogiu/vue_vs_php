<?php
require_once (dirname(__DIR__). '/models/Wines.php');

$query = new Wines;
$data = $query->list();

$reponse = json_encode($data);

echo($reponse);

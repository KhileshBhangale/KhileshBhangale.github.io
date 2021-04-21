<?php
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;

$factory = (new Factory)
->withServiceAccount('./vendor/parallelworld-66952-firebase-adminsdk-r1xwb-289de9cf14.json')
->withDatabaseUri('https://parallelworld-66952-default-rtdb.firebaseio.com/');
$database = $factory->createDatabase();
?>
<?php
require_once 'dbDemo.php';
require_once 'Classification.php';


$dbConnect = new dbDemo();

$output = Classification::output($dbConnect);

print_r($output);
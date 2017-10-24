<?php

include_once '../../vendor/autoload.php';
use App\restaurant_admin\Restaurant;
$rest = new \App\restaurant_admin\Restaurant();


$rest->set($_GET);

$rest->delete_img($_GET['id']);

$rest->delete2();
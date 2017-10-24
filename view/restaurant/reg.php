<?php
include_once("../../vendor/autoload.php");
use App\restaurant_admin\Restaurant;

$rest = new Restaurant();
$rest->set($_POST);
$rest->reg();
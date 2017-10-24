<?php
include_once("../../vendor/autoload.php");
use App\restaurant_admin\Restaurant;

$rest = new Restaurant();

$_POST['image'] = $rest->upload_img();

$rest->set($_POST);
$rest->post_offer();




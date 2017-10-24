<?php

include_once '../../vendor/autoload.php';
$rest = new \App\restaurant_admin\Restaurant();

$img_name = $_FILES['image']['name'];
$img_tmp_name = $_FILES['image']['tmp_name'];


if(!empty($img_name)){
    $rest->delete_img($_POST['id']);
    $_POST['image'] = $rest->upload_img();
}

$rest->set($_POST);
$rest = $rest->update2();
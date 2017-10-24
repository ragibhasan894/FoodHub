<?php

namespace App\restaurant_admin;
//session_start();
use PDO;
use App\Connection;

class Restaurant extends \App\Connection
{
    private $restaurant_name;
    private $food_name;
    private $details;
    private $price;
    private $image;
    private $discount;
    private $food_type;
    public $result;
    public $address;
    public $location;
    public $email;
    public $password;
    public $id;

    public function set($data) {
        if(array_key_exists('restaurant_name',$data)) {
            $this->restaurant_name = $data['restaurant_name'];
        }
        if(array_key_exists('discount',$data)) {
            $this->discount = $data['discount'];
        }
        if(array_key_exists('food_type',$data)) {
            $this->food_type = $data['food_type'];
        }
        if(array_key_exists('location',$data)) {
            $this->location = $data['location'];
        }
        if(array_key_exists('email',$data)) {
            $this->email = $data['email'];
        }
        if(array_key_exists('password',$data)) {
            $this->password = $data['password'];
        }
        if(array_key_exists('food_name',$data)) {
            $this->food_name = $data['food_name'];
        }
        if(array_key_exists('address',$data)) {
            $this->address = $data['address'];
        }
        if(array_key_exists('price',$data)) {
            $this->price = $data['price'];
        }
        if(array_key_exists('image',$data)) {
            $this->image = $data['image'];
        }
        if(array_key_exists('id',$data)) {
            $this->id = $data['id'];
        }



    }

    public function reg() {

        $stmt = $this->con->prepare("INSERT INTO `restaurant_registration`(`restaurant_name`,`location`,`email`,`password`)
                                        VALUES(:restaurant_name,:location,:email,:password)");

        $result = $stmt->execute(array(

            ':restaurant_name' => $this->restaurant_name,
            ':location' => $this->location,
            ':email' => $this->email,
            ':password' => $this->password

        ));

        if($result) {
            $_SESSION['msg'] = 'Registration Success!';
            header('location: ../../owner_login.php');
        }
    }

    public function post_food() {

        $stmt = $this->con->prepare("INSERT INTO `post_food`(`food_name`,`restaurant_name`,`price`,`food_type`,`address`,`image`,`unique_id`)
                                        VALUES(:food_name,:restaurant_name,:price,:food_type,:address,:image,:unique_id)");

        $result = $stmt->execute(array(
            ':food_name' => $this->food_name,
            ':restaurant_name' => $this->restaurant_name,
            ':price' => $this->price,
            ':food_type' => $this->food_type,
            ':address' => $this->address,
            ':image' => $this->image,
            ':unique_id' => md5(time())

        ));

       if($result) {
            $_SESSION['msg'] = 'Registration Success!';
            header('location: ../../view/restaurant/index.php');
        }
    }

    public function post_offer() {

        $stmt = $this->con->prepare("INSERT INTO `post_offer`(`restaurant_name`,`food_name`, `discount`, `address`,`image`,`unique_id`)
                                        VALUES(:restaurant_name,:food_name,:discount,:address,:image,:unique_id)");

        $result = $stmt->execute(array(
            ':restaurant_name' => $this->restaurant_name,
            ':food_name' => $this->food_name,
            ':discount' => $this->discount,
            ':address' => $this->address,
            ':image' => $this->image,
            ':unique_id' => md5(time())

        ));

        if($result) {
             $_SESSION['msg'] = 'Registration Success!';
             header('location: ../../view/restaurant/index2.php');
         }
    }

    public function index() {

        $stmt = $this->con->prepare("SELECT * FROM `post_food`");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function index2() {

        $stmt = $this->con->prepare("SELECT * FROM `post_offer`");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function upload_img(){
        $img_name = $_FILES['image']['name'];
        $img_tmp_name = $_FILES['image']['tmp_name'];
        $genName = substr(md5(uniqid()),0,8);
        $extName = end(explode('.',$img_name));
        $_POST['image'] = $genName.'.'.$extName;

        move_uploaded_file($img_tmp_name,'../uploads/'.$_POST['image']);
        return $_POST['image'];
    }

    public function view(){
        try {
            $stmt = $this->con->prepare("SELECT * FROM `post_food` WHERE id = :id");
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function view2(){
        try {
            $stmt = $this->con->prepare("SELECT * FROM `post_offer` WHERE id = :id");
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function view3($address) {
        try {
            $stmt = $this->con->prepare("SELECT * FROM `post_food` WHERE address = :address");
            $stmt->bindValue(':address', $address, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function update(){
        try {
            $stmt = $this->con->prepare("UPDATE `foodhub`.`post_food` SET `restaurant_name` = :restaurant_name, `food_name` = :food_name, `price` = :price, `food_type` = :food_type, `address` = :address, `image` = :image WHERE `post_food`.`id` = :id;");
            $stmt->bindValue(':restaurant_name', $this->restaurant_name, PDO::PARAM_INT);
            $stmt->bindValue(':food_name', $this->food_name, PDO::PARAM_INT);
            $stmt->bindValue(':price', $this->price, PDO::PARAM_INT);
            $stmt->bindValue(':food_type', $this->food_type, PDO::PARAM_INT);
            $stmt->bindValue(':address', $this->address, PDO::PARAM_INT);
            $stmt->bindValue(':image', $this->image, PDO::PARAM_INT);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt){
                $_SESSION['update'] = 'Data successfully Updated !!';
                header('location: index.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function update2(){
        try {
            $stmt = $this->con->prepare("UPDATE `foodhub`.`post_offer` SET `restaurant_name` = :restaurant_name, `food_name` = :food_name, `discount` = :discount, `address` = :address, `image` = :image WHERE `post_offer`.`id` = :id;");
            $stmt->bindValue(':restaurant_name', $this->restaurant_name, PDO::PARAM_INT);
            $stmt->bindValue(':food_name', $this->food_name, PDO::PARAM_INT);
            $stmt->bindValue(':discount', $this->discount, PDO::PARAM_INT);
            $stmt->bindValue(':address', $this->address, PDO::PARAM_INT);
            $stmt->bindValue(':image', $this->image, PDO::PARAM_INT);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt){
                $_SESSION['update'] = 'Data successfully Updated !!';
                header('location: index2.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function delete(){
        try {
            $stmt = $this->con->prepare("DELETE FROM `post_food` WHERE id = :id");
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt){
                $_SESSION['delete'] = 'Data successfully Deleted !!';
                header('location: index.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function delete2(){
        try {
            $stmt = $this->con->prepare("DELETE FROM `post_offer` WHERE id = :id");
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            $stmt->execute();
            if($stmt){
                $_SESSION['delete'] = 'Data successfully Deleted !!';
                header('location: index2.php');
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function delete_img($id){
        try {
            $stmt = $this->con->prepare("SELECT `image` FROM `post_food` WHERE id = :id");
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            if(isset($data['image'])){
                unlink('../uploads/'.$data['image']);
            }

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
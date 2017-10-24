<?php

namespace App;
use PDO;

class Connection
{
    protected $con;

    private $user = 'root';
    private $pass = '';

    public function __construct() {
        $this->con = new PDO('mysql:host=localhost;dbname=foodhub', $this->user, $this->pass);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}
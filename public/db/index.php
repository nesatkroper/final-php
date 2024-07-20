<?php

// class connect
// {
//   private $host = "";
//   private $username = "";
//   private $password = "";
//   private $database = "";
//   private $conn = "";

//   public function __construct()
//   {
//     $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

//     if ($this->conn->connect_error)
//       die("Connection Failed: " . $this->conn->connect_error);
//   }

//   public function getConn()
//   {
//     return $this->conn;
//   }
// }




$host = "localhost";
$username = "root";
$password = "";
$database = "finalAss";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error)
  die("Connection Failed: " . $conn->connect_error);
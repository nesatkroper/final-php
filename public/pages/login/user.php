<?php
// class User
// {
//   private $db;

//   public function __construct()
//   {
//     $this->db = new Connect();
//   }

//   public function register($user, $pass)
//   {
//     $passHash = password_hash($pass, PASSWORD_BCRYPT);

//     $conn = $this->db->getConn();
//     $stmt = $conn->prepare("INSERT INTO tbl_user (username, password) VALUE (?, ?)");
//     $stmt->bind_param("", $user, $passHash);

//     if ($stmt->execute())
//       return true;
//     else
//       return false;
//   }

//   public function login($user, $pass)
//   {
//     $conn = $this->db->getConn();
//     $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM tbl_user WHERE username = ? AND password = ?");
//     $stmt->bind_param("", $user, $passHash);

//     if ($stmt->execute())
//       return true;
//     else
//       return false;
//   }
// }
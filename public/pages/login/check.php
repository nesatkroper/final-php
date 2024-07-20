<?php
require_once("../../db/index.php");
$user = "";
$pass = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $user = $_POST["name"];
  $pass = $_POST["pass"];

  $sql = "SELECT COUNT(*) AS count FROM `tbl_user` WHERE user = '$user' AND pass = '$pass';";
  $result = $conn->query($sql);

  if (!$result)
    die("Error Getting Data.");

  $result = $result->fetch_assoc();

  if ($result["count"] == 1)
    header("location:../staff/index.php");
  else
    header("location:./index.php");
}

<?php
require_once("../../db/index.php");

if (isset($_GET['id'])) {
  $id =  $_GET['id'];
  $sql = "SELECT pic FROM `tbl_staff` WHERE id = '$id'";
  $result  = $conn->query($sql);
  $result = $result->fetch_assoc();
  unlink("../../image/$result[pic]");
}

if (isset($_GET['id'])) {
  $id =  $_GET['id'];
  $sql = "DELETE FROM `tbl_staff` WHERE id = '$id'";
  $conn->query($sql);
}

header("location:./index.php");
exit;

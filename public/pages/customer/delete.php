<?php
require_once("../../db/index.php");
if (isset($_GET['id'])) {
  $id =  $_GET['id'];
  $sql = "DELETE FROM `tbl_customer` WHERE id = '$id'";

  $conn->query($sql);
}

header("location:./index.php");
exit;

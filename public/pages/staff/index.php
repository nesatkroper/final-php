<?php require_once("../../db/index.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff</title>
  <link rel="stylesheet" href="../../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../../dist/fontawesome/css/all.css">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <div class="app-wrapper">

    <?php
    include_once("../../components/header.php");
    include_once("../../components/sidebar.php");
    ?>

    <div class="app-content mt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card mb-4">
              <div class="card-header border-0 d-flex flex-column">
                <h3 class="card-title fw-bold">Staff</h3>
                <a href='./add.php' class='btn btn-success rounded-2 mt-3' style="width: 150px;">Add New
                  Staff</a>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped align-middle">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>DOB</th>
                      <th>POB</th>
                      <th style="width: 20px;"></th>
                      <th style="width: 20px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $id = 0;
                    $sql = "SELECT * FROM `tbl_staff`";
                    $result = $conn->query($sql);

                    if (!$result)
                      die("Error Getting Data");

                    while ($row = $result->fetch_assoc()) {

                      $default = "";
                      if ($row['pic'] == "")
                        $default = "default.png";
                      else
                        $default = $row['pic'];

                      echo "
                        <tr>
                          <td>$i</td>
                          <td><img src='../../image/$default' class='rounded-3' style='max-height: 80px' alt=''></td>
                          <td>$row[name]</td>
                          <td>$row[gender]</td>
                          <td>$row[mobile]</td>
                          <td>$row[email]</td>
                          <td>$row[dob]</td>
                          <td>$row[pob]</td>
                          <td><a href='./edit.php?id=$row[id]' class='btn btn-primary btn-block btn-sm rounded-2'>Update</a></td>
                          <td><a href='./delete.php?id=$row[id]' class='btn btn-danger btn-block btn-sm rounded-2'>Delete</a>
                          </td>
                        </tr>
                      ";
                      $i++;
                    }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  <script src="../../../dist/js/adminlte.js"></script>
  <script src="../../../dist/fontawesome/js/all.js"></script>
</body>

</html>
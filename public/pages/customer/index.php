<?php require_once("../../db/index.php");
// if (isset($_POST['submit'])) {
//   if ($_POST['submit'] == "add")
//     add();
//   else if ($_POST['submit'] == "edit")
//     edit();
//   else
//     delete();
// }

// function add()
// {
//   $image = $_POST['image'];
//   $filename = $_FILES['file']['image'];
//   $tmpName = $_FILES['file']['tmp_name'];
//   $newFileName = uniqid() . "-" . $filename;

//   move_uploaded_file($tmpName, "../../image/" . $newFileName);
// }
// function edit()
// {
// }
// function delete()
// {
// }
?>

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

    <main class="app-main">
      <div class="app-content mt-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header border-0 d-flex flex-column">
                  <h3 class="card-title fw-bold">Customer</h3>
                  <a href='./add.php' class='btn btn-success rounded-2 mt-3' style="width: 200px;">Add New
                    Customer</a>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped align-middle">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th style="width: 20px;"></th>
                        <th style="width: 20px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      $sql = "SELECT * FROM `tbl_customer`";
                      $result = $conn->query($sql);

                      if (!$result)
                        die("Error Getting Data");

                      while ($row = $result->fetch_assoc()) {
                        echo "
                        <tr>
                          <td>$i</td>
                          <td>$row[name]</td>
                          <td>$row[gender]</td>
                          <td>$row[mobile]</td>
                          <td>$row[email]</td>
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
    </main>
  </div>
  <script src="../../../dist/js/adminlte.js"></script>
  <script src="../../../dist/fontawesome/js/all.js"></script>
</body>

</html>
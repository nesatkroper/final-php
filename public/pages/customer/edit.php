<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Staff</title>
  <link rel="stylesheet" href="../../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../../dist/fontawesome/css/all.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="app-wrapper">

    <?php
    require_once("../../db/index.php");
    include_once("../../components/sidebar.php");

    $name = "";
    $gender = "";
    $mobile = "";
    $email = "";
    $id = "";

    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $sql = "SELECT * FROM `tbl_customer` WHERE `id` = '$id'";
      $result = $conn->query($sql);

      if (isset($result)) {
        $row = $result->fetch_assoc();

        $name = $row['name'];
        $gender = $row['gender'];
        $mobile = $row['mobile'];
        $email = $row['email'];
      }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $mobile = $_POST['mob'];
      $email = $_POST['email'];

      $sql = "UPDATE `tbl_customer` SET `name`='$name',`gender`='$gender',`mobile`='$mobile',`email`='$email' WHERE `id` = '$id'";

      $result = $conn->query($sql);
      if (!$result) {
        header("location:./index.php");
        exit;
      } else {
        header("location:./index.php");
        exit;
      }
    }

    ?>
    <div class="app-content mt-4">
      <div class="card card-info card-outline mb-4">
        <div class="card-header">
          <div class="card-title">Update Staff Information</div>
        </div>
        <form class="needs-validation" novalidate method="POST">
          <div class="card-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom01" value="<?php echo $name ?>" name="name" required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Gender</label>
                <select class="form-select" id="validationCustom04" value="<?php echo $gender ?>" name="gender" required>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid gender.
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="validationCustom02" value="<?php echo $mobile ?>" name="mob" required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationCustom02" value="<?php echo $email ?>" name="email" required />
                <div class="valid-feedback">Looks good!</div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-info" type="submit">
              Submit form
            </button>
            <a href="./index.php" class="btn btn-danger">Back to Customer Page</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="../../js/main.js"></script>
  <script src="../../../dist/js/adminlte.js"></script>
  <script src="../../../dist/fontawesome/js/all.js"></script>
</body>

</html>
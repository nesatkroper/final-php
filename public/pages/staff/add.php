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
    // require_once("../../components/header.php");
    include_once("../../components/sidebar.php");

    $name = "";
    $gender = "";
    $mobile = "";
    $email = "";
    $dob = "";
    $pob = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $name = $_POST['name'];
      $gender = $_POST['gender'];
      $mobile = $_POST['mob'];
      $email = $_POST['email'];
      $dob = $_POST['dob'];
      $pob = $_POST['pob'];

      if ($_FILES['image']['error'] === 4) {
        echo "
          <script>alert('Image does not exist.')<?script>
        ";
      } else {

        $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $tmpName = $_FILES['image']['tmp_name'];

        $validImageExtension  = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $filename);
        $imageExtension = strtolower(end($imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
          echo "
          <script>alert('Invalid image extension.')<?script>
        ";
        } else if ($filesize > 1000000) {
          echo "
          <script>alert('Image size is too large.')<?script>
        ";
        } else {
          $newFileName = uniqid();
          $newFileName .= '.' . $imageExtension;
          move_uploaded_file($tmpName, "../../image/" . $newFileName);

          if ($newFileName == "")
            $newFileName = "default.png";

          $sql = "INSERT INTO `tbl_staff`(`pic`, `name`, `gender`, `mobile`, `email`, `dob`, `pob`) VALUES ('$newFileName', '$name', '$gender', '$mobile', '$email', '$dob', '$pob')";

          $result = $conn->query($sql);
          if (!$result) {
            header("location:./index.php");
            exit;
          } else {
            header("location:./index.php");
            exit;
          }
        }
      }
    }

    ?>
    <div class="app-content mt-4">
      <div class="card card-info card-outline mb-4">
        <div class="card-header">
          <div class="card-title">Add New Staff</div>
        </div>
        <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control" id="validationCustom01" value="<?php echo $name ?>" name="name"
                  required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Gender</label>
                <select class="form-select" id="validationCustom04" value="<?php echo $gender ?>" name="gender"
                  required>
                  <option selected disable value="">
                    Choose Gender
                  </option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid gender.
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Mobile</label>
                <input type="text" class="form-control" id="validationCustom02" value="<?php echo $mobile ?>" name="mob"
                  required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationCustom02" value="<?php echo $email ?>"
                  name="email" required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="validationCustom01" value="<?php echo $dob ?>" name="dob"
                  required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Place of Birth</label>
                <input type="text" class="form-control" id="validationCustom01" value="<?php echo $pob ?>" name="pob"
                  required />
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Photo</label>
                <input type="file" class="form-control custom-file-input" id="image" name="image"
                  accept=".jpg, .jpeg, .png" />
                <div class="invalid-feedback">
                  Please provide a valid image.
                </div>
              </div>
              <div class="col-md-6">
                <img src="../../image/default.png" class="rounded-3 float-start" alt="">
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                  <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-info" type="submit">
              Submit form
            </button>
            <a href="./index.php" class="btn btn-danger">Back to Staff Page</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="../../js/main.js">
  </script>
  < script src="../../../dist/js/adminlte.js">
    </script>
    <script src="../../../dist/fontawesome/js/all.js"></script>
</body>

</html>
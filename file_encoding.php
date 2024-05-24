<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>File Encoding - Isecretsuite</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/IIL_logo_min_bg.png" />
  <style>
    .collapse .nav.flex-column.sub-menu {
      list-style-type: none !important;
      padding-left: 0;
    }
  </style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include 'partials/_navbar.html'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <?php include 'partials/_settings-panel.html';?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include 'partials/_sidebar.html';?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">File Encoding</h4>
                  <div class="form-group">
                    <label for="fileUpload">Upload File</label>
                    <input type="file" class="form-control-file" id="fileUpload">
                  </div>
                  <div class="form-group">
                    <label for="encodingType">Encoding Type</label>
                    <select class="form-control" id="encodingType">
                      <option value="utf-8">UTF-8</option>
                      <option value="utf-16">UTF-16</option>
                      <option value="ascii">ASCII</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>
                  <!-- Add more dropdown menus or options as needed -->
                  <button type="submit" class="btn btn-primary">Encode File</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>
</html>

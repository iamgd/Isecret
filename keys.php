<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Keys - Isecretsuite</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-8CtY61vBRaMJU4kbiPdCEhxpDklA1ujFRCWdfBpg1cRw15M04nKbgv5BZVAqk8xGbD8VUGgDh5jSXv9UkQ8tQg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- End plugin css for this page -->
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
          <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Type</h4>
                <div class="list-wrapper pt-2">
                  <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                    <li>
                      <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox">
                          Certificate
                        </label>
                      </div>
                      <i class="remove ti-close"></i>
                    </li>
                    <li >
                      <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox">
                          Symmetric key
                        </label>
                      </div>
                      <i class="remove ti-close"></i>
                    </li>
                    <li>
                      <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox">
                          Public key
                        </label>
                      </div>
                      <i class="remove ti-close"></i>
                    </li>
                    <li >
                      <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox">
                          Private key
                        </label>
                      </div>
                      <i class="remove ti-close"></i>
                    </li>
                    <li>
                      <div class="form-check form-check-flat">
                        <label class="form-check-label">
                          <input class="checkbox" type="checkbox">
                          Split key
                        </label>
                      </div>
                      <i class="remove ti-close"></i>
                    </li>
                  </ul>
                </div>
                <div class="add-items d-flex mb-0 mt-2">
                  <input type="text" class="form-control todo-list-input"  placeholder="Add new task">
                  <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="icon-circle-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
      <!-- New div with radio buttons for algorithms -->
    <div class="col-md-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Algorithms</h4>
          <div class="list-wrapper pt-2">
            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="all">
                    All
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    AES
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    ARIA
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    Elliptic curve
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    HMAC SHA1
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    HMAC SHA256
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    HMAC SHA384
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    HMAC SHA384
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    HMAC SHA512
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    Opaque
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    RSA
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    Seed
                  </label>
                </div>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="algorithm" value="AES">
                    Triple DES
                  </label>
                </div>
              </li>
              <!-- Other radio button items -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

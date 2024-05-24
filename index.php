<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Isecretsuite</title>
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
  .add-row-btn {
    margin-top: 10px;
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
        <div class="col-md-9 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="table-responsive">
                <table class="table table-striped" id="data-table">
                  <thead>
                    <tr>
                      <th>Encryption</th>
                      <th>Version</th>
                      <th>Owner</th>
                      <th>Modified</th>
                      <th>Type</th>
                      <th>Algorithm</th>
                      <th>Size</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Dynamic table data will be inserted here -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Add Row Button -->
        <div class="col-md-3 add-row-btn">
          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModal">Add Row</button>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add New Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="addForm">
                  <div class="form-group">
                    <label for="addEncryption">Encryption</label>
                    <input type="text" class="form-control" id="addEncryption" name="encryption" required>
                  </div>
                  <div class="form-group">
                    <label for="addVersion">Version</label>
                    <input type="text" class="form-control" id="addVersion" name="version" required>
                  </div>
                  <div class="form-group">
                    <label for="addOwner">Owner</label>
                    <input type="text" class="form-control" id="addOwner" name="owner" required>
                  </div>
                  <div class="form-group">
                    <label for="addModified">Modified</label>
                    <input type="date" class="form-control" id="addModified" name="modified" required>
                  </div>
                  <div class="form-group">
                    <label for="addType">Type</label>
                    <input type="text" class="form-control" id="addType" name="type" required>
                  </div>
                  <div class="form-group">
                    <label for="addAlgorithm">Algorithm</label>
                    <input type="text" class="form-control" id="addAlgorithm" name="algorithm" required>
                  </div>
                  <div class="form-group">
                    <label for="addSize">Size</label>
                    <input type="number" class="form-control" id="addSize" name="size" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->

      <!-- Edit Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="editForm">
                <input type="hidden" id="editId" name="id">
                <div class="form-group">
                  <label for="editEncryption">Encryption</label>
                  <input type="text" class="form-control" id="editEncryption" name="encryption" required>
                </div>
                <div class="form-group">
                  <label for="editVersion">Version</label>
                  <input type="text" class="form-control" id="editVersion" name="version" required>
                </div>
                <div class="form-group">
                  <label for="editOwner">Owner</label>
                  <input type="text" class="form-control" id="editOwner" name="owner" required>
                </div>
                <div class="form-group">
                  <label for="editModified">Modified</label>
                  <input type="date" class="form-control" id="editModified" name="modified" required>
                </div>
                <div class="form-group">
                  <label for="editType">Type</label>
                  <input type="text" class="form-control" id="editType" name="type" required>
                </div>
                <div class="form-group">
                  <label for="editAlgorithm">Algorithm</label>
                  <input type="text" class="form-control" id="editAlgorithm" name="algorithm" required>
                </div>
                <div class="form-group">
                  <label for="editSize">Size</label>
                  <input type="number" class="form-control" id="editSize" name="size" required>
                </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->

  <script>

$(document).ready(function() {
    // Function to set the active state on the sidebar based on URL
    function setActiveMenuItem() {
      // Get the current path
      var path = window.location.pathname.split("/").pop();
      if (path === '') {
        path = 'index.php';
      }
      
      // Find the corresponding nav link
      var target = $('.nav-link[href="' + path + '"]');
      target.closest('.nav-item').addClass('active');

      // Handle parent collapse for sub-menu items
      if (target.closest('.collapse').length) {
        target.closest('.collapse').addClass('show');
        target.closest('.nav-item').parent().parent().addClass('active');
      }
    }

    setActiveMenuItem();

    // Handle click on menu items to set the active state
    $('.nav-link').on('click', function(e) {
      $('.nav-item').removeClass('active');
      $(this).closest('.nav-item').addClass('active');
    });

    // Specific handling for collapsible items
    $('[data-toggle="collapse"]').on('click', function() {
      var $this = $(this);
      if (!$this.closest('.nav-item').hasClass('active')) {
        $('.nav-item').removeClass('active');
        $this.closest('.nav-item').addClass('active');
      }
    });
  });

    $(document).ready(function(){
      // Fetch records and populate the table
      $.ajax({
        url: 'fetch_records.php',
        type: 'GET',
        dataType: 'json',
        success: function(records) {
          var tableBody = $('#data-table tbody');
          tableBody.empty();
          
          $.each(records, function(index, record) {
            var row = $('<tr>').attr('data-id', record.id);
            row.append($('<td>').text(record.encryption));
            row.append($('<td>').text(record.version));
            row.append($('<td>').text(record.owner));
            row.append($('<td>').text(record.modified));
            row.append($('<td>').text(record.type));
            row.append($('<td>').text(record.algorithm));
            row.append($('<td>').text(record.size));
            row.append($('<td>').html(
              '<button class="btn btn-icons btn-rounded btn-outline-info btn-sm edit-button"><i class="ti-pencil"></i></button>' +
              '<button class="btn btn-icons btn-rounded btn-outline-danger btn-sm delete-button"><i class="ti-trash"></i></button>'
            ));
            tableBody.append(row);
          });
        }
      });

      // Handle edit button click
      $(document).on('click', '.edit-button', function() {
        var tr = $(this).closest('tr');
        var data = tr.children('td').map(function() {
          return $(this).text();
        }).get();

        $('#editId').val(tr.data('id'));
        $('#editEncryption').val(data[0]);
        $('#editVersion').val(data[1]);
        $('#editOwner').val(data[2]);
        $('#editModified').val(data[3]);
        $('#editType').val(data[4]);
        $('#editAlgorithm').val(data[5]);
        $('#editSize').val(data[6]);

        $('#editModal').modal('show');
      });

      // Handle form submission for editing
      $('#editForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
          url: 'edit_record.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            if (response == 'success') {
              location.reload();
            } else {
              alert('Error updating record.');
            }
          }
        });
      });

      // Handle delete button click
      $(document).on('click', '.delete-button', function() {
        if (confirm('Are you sure you want to delete this record?')) {
          var id = $(this).closest('tr').data('id');

          $.ajax({
            url: 'delete_record.php',
            type: 'POST',
            data: { id: id },
            success: function(response) {
              if (response == 'success') {
                location.reload();
              } else {
                alert('Error deleting record.');
              }
            }
          });
        }
      });

      // Handle form submission for adding a new record
      $('#addForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
          url: 'add_record.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function(response) {
            if (response == 'success') {
              // Reload the table data after adding a new record
              $.ajax({
                url: 'fetch_records.php',
                type: 'GET',
                dataType: 'json',
                success: function(records) {
                  var tableBody = $('#data-table tbody');
                  tableBody.empty();
                  
                  $.each(records, function(index, record) {
                    var row = $('<tr>').attr('data-id', record.id);
                    row.append($('<td>').text(record.encryption));
                    row.append($('<td>').text(record.version));
                    row.append($('<td>').text(record.owner));
                    row.append($('<td>').text(record.modified));
                    row.append($('<td>').text(record.type));
                    row.append($('<td>').text(record.algorithm));
                    row.append($('<td>').text(record.size));
                    row.append($('<td>').html(
                      '<button class="btn btn-icons btn-rounded btn-outline-info btn-sm edit-button"><i class="ti-pencil"></i></button>' +
                      '<button class="btn btn-icons btn-rounded btn-outline-danger btn-sm delete-button"><i class="ti-trash"></i></button>'
                    ));
                    tableBody.append(row);
                  });
                }
              });
              // Close the modal after adding a new record
              $('#addModal').modal('hide');
            } else {
              alert('Error adding record.');
            }
          }
        });
      });

});
</script>
</body>
</html>

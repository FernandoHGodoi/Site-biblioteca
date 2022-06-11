<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Atualizar livro</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/book-open-solid.svg" />

    <!-- CSS DATA TABLES -->
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css" rel="stylesheet">
    <link href="../../extensions/Editor/css/editor.dataTables.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.php -->
        <?php include 'partials/_sidebar.php' ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.php -->
        <?php include 'partials/_navbar.php' ?>
        <!-- partial -->

        <?php
        
            // DataTables PHP library
            include( "../lib/DataTables.php" );
            
            // Alias Editor classes so they are easy to use
            use
                DataTables\Editor,
                DataTables\Editor\Field,
                DataTables\Editor\Format,
                DataTables\Editor\Mjoin,
                DataTables\Editor\Options,
                DataTables\Editor\Upload,
                DataTables\Editor\Validate,
                DataTables\Editor\ValidateOptions;
            
            
            /*
            * Example PHP implementation used for the join.html example
            */
            Editor::inst( $db, 'livro' )
                ->field(
                    Field::inst( 'livro.nm_livro' ),
                    Field::inst( 'livro.last_name' ),
                    Field::inst( 'livro.phone' ),
                    Field::inst( 'livro.site' )
                        ->options( Options::inst()
                            ->table( 'nm_livro' )
                            ->value( 'id' )
                            ->label( 'name' )
                        )
                        ->validator( Validate::dbValues() ),
                    Field::inst( 'sites.name' )
                )
                ->leftJoin( 'sites', 'sites.id', '=', 'users.site' )
                ->process($_POST)
                ->json();
            ?>

        <div class="main-panel">
            <div class="content-wrapper">
                
                <div class="row">
                    <!-- INICIO DIV TABLE -->
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ATUALIZAR LIVRO</h4>
                                <!-- CONEXAO COM O BANCO -->
                                <?php include 'conexao.php' ?>

                                <!-- INICIO DA TABLE -->
                                <table id="tabela" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Phone #</th>
                                            <th>Location</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Phone #</th>
                                            <th>Location</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- FIM TABLE -->
                               
                            </div>
                        </div>
                    </div>
                    <!-- FIM DIV TABLE -->
                </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
        <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- JAVASCRIPT DATA TABLES -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <!-- JAVASCRIPT DATA TABLES -->
    <script>
        var editor; // use a global for the submit and return data rendering in the examples
 
        $(document).ready(function() {
            editor = new $.fn.dataTable.Editor( {
                ajax: "../php/join.php",
                table: "#example",
                fields: [ {
                        label: "First name:",
                        name: "users.first_name"
                    }, {
                        label: "Last name:",
                        name: "users.last_name"
                    }, {
                        label: "Phone #:",
                        name: "users.phone"
                    }, {
                        label: "Site:",
                        name: "users.site",
                        type: "datatable",
                    }
                ]
            } );
        
            $('#example').DataTable( {
                dom: "Bfrtip",
                ajax: {
                    url: "../php/join.php",
                    type: 'POST'
                },
                columns: [
                    { data: "users.first_name" },
                    { data: "users.last_name" },
                    { data: "users.phone" },
                    { data: "sites.name" }
                ],
                select: true,
                buttons: [
                    { extend: "create", editor: editor },
                    { extend: "edit",   editor: editor },
                    { extend: "remove", editor: editor }
                ]
            } );
        } );
    </script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->

    
  </body>
</html>
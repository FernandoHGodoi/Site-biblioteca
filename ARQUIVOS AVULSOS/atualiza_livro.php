<!DOCTYPE html>
<html lang="en">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<style>
    td {color: yellow !important;}
    select.form-select.form-select-sm {color: white !important;}
</style>
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
                                <table id="atualiza_livro" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Autor</th>
                                            <th>Editora</th>
                                            <th>Ano</th>
                                            <th>Sinopse</th>
                                            <th>Capa</th>
                                            <th>Valor aluguel</th>
                                            <th>Quantidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $result_atualiza_livro = "SELECT `nm_livro`, `autor_id`, `editora_id`, `ano`, `sinopse`, 
                                            `capa`, `preco`, quantidade FROM `livro`";

                                            $resultado_atualiza_livro = mysqli_query($conn, $result_atualiza_livro);
                                            

                                            while($rows_resultado = mysqli_fetch_assoc($resultado_atualiza_livro)){ ?>
                                        <tr>
                                            <td><?php echo $rows_resultado['nm_livro']; ?></td>
                                            <td><?php echo $rows_resultado['autor_id']; ?></td>
                                            <td><?php echo $rows_resultado['editora_id']; ?></td>
                                            <td><?php echo $rows_resultado['ano']; ?></td>
                                            <td><?php echo $rows_resultado['sinopse']; ?></td>
                                            <td><?php echo $rows_resultado['capa']; ?></td>
                                            <td><?php echo $rows_resultado['preco']; ?></td>
                                            <td><?php echo $rows_resultado['quantidade']; ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Título</th>
                                            <th>Autor</th>
                                            <th>Editora</th>
                                            <th>Ano</th>
                                            <th>Sinopse</th>
                                            <th>Capa</th>
                                            <th>Valor aluguel</th>
                                            <th>Quantidade</th>
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
        $(document).ready(function () {
        $('#atualiza_livro').DataTable();
        });
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
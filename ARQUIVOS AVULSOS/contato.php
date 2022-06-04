<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contato</title>
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
                    <!-- INICIO DIV FORM -->
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">CONTATO</h4>

                                <!-- INICIO FORM -->
                                <form  id="contato" class="form-sample" method="post">

                                    <!-- SESSÃO INFORMAÇÕES DE CONTATO -->
                                    <p class="card-description"> INFORMAÇÕES DE CONTATO </p>
                                    
                                    <!-- LINHA 1 -->
                                    <div class="row">
                                        
                                        <!-- NOME -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="nome" class="col-sm-3 col-form-label">Nome</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="nome" name="nome" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- EMAIL -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" id="email" name="email" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <!-- LINHA 2 -->
                                    <div class="row">
                                        
                                        <!-- MENSAGEM -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="mensagem" class="col-sm-3 col-form-label">Mensagem</label>
                                                <div class="col-sm-9">
                                                    <textarea id="mensagem" name="mensagem" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 2 -->
                                    <div class="row">

                                        <div class="col-md-3">
                                            <button form_id="mensagem" type="submit" class="btn btn-primary mr-2">Enviar</button>
                                            <button class="btn btn-dark">Cancelar</button>
                                        </div>
                                    </div>
                                    <!-- FIM LINHA 2 -->
                                </form>
                                <!-- FIM FORM -->
                            </div>
                        </div>
                    </div>
                    <!-- FIM DIV FORM -->
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
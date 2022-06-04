<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastrar livro</title>
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
                                <h4 class="card-title">CADASTRAR LIVRO</h4>

                                <!-- INICIO FORM -->
                                <form  id="cad_livro" class="form-sample" method="post">

                                    <!-- SESSÃO INFORMAÇÕES DO LIVRO -->
                                    <p class="card-description"> INFORMAÇÕES DO LIVRO </p>
                                    
                                    <!-- LINHA 1 -->
                                    <div class="row">
                                        
                                        <!-- TITULO DO LIVRO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="titulo" class="col-sm-3 col-form-label">Título</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="titulo" name="titulo" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- AUTOR -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="autor" class="col-sm-3 col-form-label">Autor</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="autor" name="autor" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <!-- LINHA 2 -->
                                    <div class="row">
                                        
                                        <!-- EDITORA -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="editora" class="col-sm-3 col-form-label">Editora</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="editora" name="editora" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ANO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="ano" class="col-sm-3 col-form-label">Ano</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="ano" name="ano" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 3 -->
                                    <div class="row">

                                        <!-- SINOPSE -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="sinopse" class="col-sm-3 col-form-label">Sinopse</label>
                                                <div class="col-sm-9">
                                                    <textarea id="sinopse" name="sinopse" class="form-control" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- CAPA -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="capa" class="col-sm-3 col-form-label">Capa</label>
                                                <div class="col-sm-9">
                                                    <input type="file" id="capa" name="capa" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 4 -->
                                    <div class="row">

                                        <!-- VALOR ALUGUEL -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="vl_aluguel" class="col-sm-3 col-form-label">Valor aluguel</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="vl_aluguel" name="vl_aluguel" class="form-control" placeholder="R$"/>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- QUANTIDADE -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="qtd" class="col-sm-3 col-form-label">Quantidade</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="qtd" name="qtd" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 2 -->
                                    <div class="row">

                                        <div class="col-md-3">
                                            <button form_id="cad_livro" type="submit" class="btn btn-primary mr-2">Cadastrar</button>
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
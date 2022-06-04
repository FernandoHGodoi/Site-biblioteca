<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alugar livro</title>
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
                                <h4 class="card-title">ALUGAR LIVRO</h4>

                                <!-- INICIO FORM -->
                                <form  id="aluguel" class="form-sample" method="post">

                                    <!-- SESSÃO INFORMAÇÕES DO ALUGUEL -->
                                    <p class="card-description"> INFORMAÇÕES ALUGUEL </p>
                                    
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

                                       <!-- VALOR ALUGUEL -->
                                       <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="vl_aluguel" class="col-sm-3 col-form-label">Valor aluguel</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="vl_aluguel" name="vl_aluguel" class="form-control" placeholder="R$"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 4 -->
                                    <div class="row">

                                        <!-- QUANTIDADE -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="qtd" class="col-sm-3 col-form-label">Quantidade</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="qtd" name="qtd" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" id="email" name="email" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 4 -->
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

                                        <!-- CPF -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="cpf" class="col-sm-3 col-form-label">CPF</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="cpf" name="cpf" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 4 -->
                                    <div class="row">

                                        <!-- DATA RETIRADA -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="dt_retirada" class="col-sm-3 col-form-label">Data retirada</label>
                                                <div class="col-sm-9">
                                                    <input type="date" id="dt_retirada" name="dt_retirada" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- DATA DEVOLUCAO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="dt_devolucao" class="col-sm-3 col-form-label">Data devolução</label>
                                                <div class="col-sm-9">
                                                    <input type="date" id="dt_devolucao" name="dt_devolucao" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <button form_id="aluguel" type="submit" class="btn btn-primary mr-2">Alugar</button>
                                        <button class="btn btn-dark">Cancelar</button>
                                    </div>

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
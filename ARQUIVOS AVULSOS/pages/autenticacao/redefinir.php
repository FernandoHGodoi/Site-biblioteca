<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nova senha</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-center mb-3">Nova senha</h3>

                <!-- INICIO DO FORM -->
                <form id="redefinir" action="login.php" method="post">

                  <!-- EMAIL -->
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" class="form-control p_input">
                  </div>
                  
                  <!-- PALAVRA DE SEGURANCA -->
                  <div class="form-group">
                    <label for="palavra_seg">Palavra de segurança *</label>
                    <input type="text" id="palavra_seg" name="palavra_seg" class="form-control p_input">
                  </div>

                  <!-- SENHA -->
                  <div class="form-group">
                    <label for="senha">Nova senha *</label>
                    <input type="password" id="senha" name="senha" class="form-control p_input">
                  </div>

                  <!-- REPETIR SENHA -->
                  <div class="form-group">
                    <label for="senha">Repetir Nova senha *</label>
                    <input type="password" id="repetir_senha" name="senha" class="form-control p_input">
                  </div>

                  <div class="text-center">
                    <button type="submit" form_id="redefinir" class="btn btn-primary btn-block enter-btn">Redefinir senha</button>
                  </div>
                  
                  <p class="sign-up">Lembrou a senha?<a href="login.php"> Faça o login</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
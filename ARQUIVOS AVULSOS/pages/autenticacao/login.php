<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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

    <script language="Javascript">
      function validacaoEmail(field) {
      usuario = field.value.substring(0, field.value.indexOf("@"));
      dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

      if ((usuario.length >=1) &&
          (dominio.length >=3) &&
          (usuario.search("@")==-1) &&
          (dominio.search("@")==-1) &&
          (usuario.search(" ")==-1) &&
          (dominio.search(" ")==-1) &&
          (dominio.search(".")!=-1) &&
          (dominio.indexOf(".") >=1)&&
          (dominio.lastIndexOf(".") < dominio.length - 1)) {
      document.getElementById("msgemail").innerHTML="E-mail válido";
      }
      else{
      document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
      }
    }
    </script>
    <script>
      $("#login").submit(function() {
      if($("#email").val()== null || $("#email").val() ==""){
          alert('campo vazio');      
          return false;
      }
      });
    </script>

  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-center mb-3">Login</h3>

                <!-- INICIO DO FORM -->
                <form id="login" action="../../index.php" method="post">

                  <!-- EMAIL -->
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" onblur="validacaoEmail(login.email)" class="form-control p_input">
                  </div>

                  <div class="form-group" id="msgemail"></div>

                  <!-- SENHA -->
                  <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <a href="redefinir.php" class="forgot-pass">Esqueci a senha</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" form_id="login" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  
                  <p class="sign-up">Não tem uma conta?<a href="cad_funcionario.php"> Cadastre-se</a></p>
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
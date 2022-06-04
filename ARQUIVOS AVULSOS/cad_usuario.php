<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastrar cliente</title>
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

    <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

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
                                <h4 class="card-title">CADASTRAR CLIENTE</h4>

                                <!-- INICIO FORM -->
                                <form  id="cad_usuario" class="form-sample" method="post">

                                    <!-- SESSÃO INFORMAÇÕES PESSOAIS -->
                                    <p class="card-description"> INFORMAÇÕES PESSOAIS </p>
                                    
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
                                        <!-- NASCIMENTO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="dt_nascimento" class="col-sm-3 col-form-label">Nascimento</label>
                                                <div class="col-sm-9">
                                                    <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <!-- LINHA 2 -->
                                    <div class="row">
                                        
                                        <!-- SEXO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="sexo" class="col-sm-3 col-form-label">Sexo</label>
                                                <div class="col-sm-9">
                                                    <select type="text" id="sexo" name="sexo" class="form-control">
                                                        <option>- Selecione o sexo -</option>
                                                        <option>Masculino</option>
                                                        <option>Feminino</option>
                                                        <option>Não binário</option>
                                                        <option>Prefiro não dizer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- CPF -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="cpf" class="col-sm-3 col-form-label">CPF</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000.00" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 3 -->
                                    <div class="row">

                                        <!-- EMAIL -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="exemplo@email.com" />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- TELEFONE -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="telefone" class="col-sm-3 col-form-label">Telefone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="(00) 00000-0000" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- SESSÃO ENDEREÇO -->
                                    <p class="card-description"> ENDEREÇO </p>

                                    <!-- LINHA 1 -->
                                    <div class="row">

                                        <!-- CEP -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="cep" class="col-sm-3 col-form-label">CEP</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="cep" name="cep" onblur="pesquisacep(this.value);" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- RUA -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="rua" class="col-sm-3 col-form-label">Rua</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="rua" name="rua" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 2 -->
                                    <div class="row">

                                        <!-- NUMERO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="numero" class="col-sm-3 col-form-label">Número</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="numero" name="numero" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- BAIRRO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="bairro" class="col-sm-3 col-form-label">Bairro</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="bairro" name="bairro" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 3 -->
                                    <div class="row">

                                        <!-- CIDADE -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="cidade" class="col-sm-3 col-form-label">Cidade</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="cidade" name="cidade" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ESTADO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="uf" class="col-sm-3 col-form-label">Estado</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="uf" name="uf">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FIM LINHA 3 -->

                                    <!--SESSÃO DADOS DE ACESSO -->
                                    <p class="card-description"> DADOS DE ACESSO </p>

                                    <!-- LINHA 1 -->
                                    <div class="row">

                                        <!-- SENHA -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="senha" class="col-sm-3 col-form-label">Senha</label>
                                                <div class="col-sm-9">
                                                    <input type="password" id="senha" name="senha" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- REPETIR SENHA -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="senha" class="col-sm-3 col-form-label">Repetir senha</label>
                                                <div class="col-sm-9">
                                                    <input type="password" id="repetir_senha" name="senha" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- LINHA 2 -->
                                    <div class="row">

                                        <!-- PALAVRA DE SEGURANCA -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="palavra_seg" class="col-sm-3 col-form-label">Palavra de segurança</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="palavra_seg" name="palavra_seg" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <button form_id="cad_usuario" type="submit" class="btn btn-primary mr-2">Cadastrar</button>
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
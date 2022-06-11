<!DOCTYPE html>
<html lang="pt-br">
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
    <link rel="shortcut icon" href="assets/images/book-open-solid.svg">

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
                                <form  id="cad_usuario" action="envia_cad_usuario.php" name="f1" class="form-sample" method="post">

                                    <!-- SESSÃO INFORMAÇÕES PESSOAIS -->
                                    <p class="card-description"> INFORMAÇÕES PESSOAIS </p>
                                    
                                    <!-- LINHA 1 -->
                                    <div class="row">
                                        
                                        <!-- NOME -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="nome" class="col-sm-3 col-form-label">Nome</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="nome" name="nome" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- NASCIMENTO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="dt_nascimento" class="col-sm-3 col-form-label">Nascimento</label>
                                                <div class="col-sm-9">
                                                    <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control" required>
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
                                                    <select type="text" id="sexo" name="sexo" class="form-control" required>
                                                        <option value="">- Selecione o sexo -</option>
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
                                                    <input type="text" onkeyup="somenteNumeros(this);" class="form-control" id='cpf' name='cpf' placeholder="___.___.___-__" MAXLENGTH="11" required><span id="resposta"></span>
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
                                                    <input type="text" id="email" name="email" class="form-control" onblur="validacaoEmail(f1.email)" maxlength="60" size='65' placeholder="exemplo@email.com" required><span id="msgemail"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- TELEFONE -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="telefone" class="col-sm-3 col-form-label">Telefone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="+55 (__) _____-____" data-slots="_" required>
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
                                                    <input type="text" id="cep" name="cep" onblur="pesquisacep(this.value);" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- RUA -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="rua" class="col-sm-3 col-form-label">Rua</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="rua" name="rua" class="form-control" required>
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
                                                    <input type="text" id="numero" name="numero" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- BAIRRO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="bairro" class="col-sm-3 col-form-label">Bairro</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="bairro" name="bairro" class="form-control" required>
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
                                                    <input type="text" id="cidade" name="cidade" class="form-control"required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ESTADO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="uf" class="col-sm-3 col-form-label">Estado</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="uf" name="uf" required>
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
                                                    <input type="password" id="password1" name="password1" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- REPETIR SENHA -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="senha" class="col-sm-3 col-form-label">Repetir senha</label>
                                                <div class="col-sm-9">
                                                    <input type="password" id="password2" name="password2" class="form-control" required>
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
                                                    <input type="text" id="palavra_seg" name="palavra_seg" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- TIPO USUARIO -->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="tipo_usuario" class="col-sm-3 col-form-label">Tipo de usuário</label>
                                                <div class="col-sm-9">
                                                    <select type="text" id="tipo_usuario" name="tipo_usuario" class="form-control" required>
                                                        <option value="">- Selecione o tipo -</option>
                                                        <option value="1">Cliente</option>
                                                        <option value="2">Administrador</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- FIM LINHA 2 -->

                                    <!-- LINHA BUTTONS -->
                                    <div class="row">

                                        <!-- BUTTONS -->
                                        <div class="col-md-3">
                                            <button id="Button" type="submit" class="btn btn-primary mr-2">Cadastrar</button>
                                            <button class="btn btn-dark">Cancelar</button>
                                        </div>

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
    
    <!-- Adicionando Javascript VALIDA CEP -->
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

    <!-- VALIDAR SENHA -->
    <script>
        //Verifica se as senhas são iguais
        let senha = document.getElementById('password1');
        let senhaC = document.getElementById('password2');

        function validarSenha() {
        if (senha.value != senhaC.value) {
            senhaC.setCustomValidity("Senhas diferentes!");
                $('#Button').prop('disabled', true);
            senhaC.reportValidity();
            return false;
        } else {
            senhaC.setCustomValidity("");
                $('#Button').prop('disabled', false);
            return true;
        }
        }
        function validarSenha2() {
        if (senhaC.value != senha.value) {
            senha.setCustomValidity("Senhas diferentes!");
                $('#Button').prop('disabled', true);
            senha.reportValidity();
            return false;
        } else {
            senha.setCustomValidity("");
                $('#Button').prop('disabled', false);
            return true;
        }
        }
        // Verificar quando o campo for modificado, para que a mensagem suma quando as senhas forem iguais
        senhaC.addEventListener('input', validarSenha);
    </script>

    <!-- VALIDA CPF -->
    <script>
       function CPF(){"user_strict";function r(r){for(var t=null,n=0;9>n;++n)t+=r.toString().charAt(n)*(10-n);var i=t%11;return i=2>i?0:11-i}function t(r){for(var t=null,n=0;10>n;++n)t+=r.toString().charAt(n)*(11-n);var i=t%11;return i=2>i?0:11-i}var n="CPF Inválido",i="CPF Válido";this.gera=function(){for(var n="",i=0;9>i;++i)n+=Math.floor(9*Math.random())+"";var o=r(n),a=n+"-"+o+t(n+""+o);return a},this.valida=function(o){for(var a=o.replace(/\D/g,""),u=a.substring(0,9),f=a.substring(9,11),v=0;10>v;v++)if(""+u+f==""+v+v+v+v+v+v+v+v+v+v+v)return n;var c=r(u),e=t(u+""+c);return f.toString()===c.toString()+e.toString()?i:n}}
        var CPF = new CPF();
        //document.write(CPF.valida("123.456.789-00"));
        //document.write("<br> Utilizando o proprio gerador da lib<br><br><br>");
        for(var i =0;i<40;i++) {
        var temp_cpf = CPF.gera();
        //document.write(temp_cpf+" = "+CPF.valida(temp_cpf)+"<br>");
        }
        $("#cpf").keypress(function(){
            $("#resposta").html(CPF.valida($(this).val()));
        });
        $("#cpf").blur(function(){
        $("#resposta").html(CPF.valida($(this).val()));
        var x = $("#resposta").text();
        if (x == "CPF Inválido")
            {
                $('#Button').prop('disabled', true);
            }else{
                $('#Button').prop('disabled', false);
            }
        });
        
        function somenteNumeros(num) {
        var er = /[^0-9]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
    }
    </script>

    <!-- MASCARAS -->
    <script>
        //This code empowers all input tags having a placeholder and data-slots attribute
        document.addEventListener('DOMContentLoaded', () => {
        for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
            const pattern = el.getAttribute("placeholder"),
                slots = new Set(el.dataset.slots || "_"),
                prev = (j => Array.from(pattern, (c,i) => slots.has(c)? j=i+1: j))(0),
                first = [...pattern].findIndex(c => slots.has(c)),
                accept = new RegExp(el.dataset.accept || "\\d", "g"),
                clean = input => {
                    input = input.match(accept) || [];
                    return Array.from(pattern, c =>
                        input[0] === c || slots.has(c) ? input.shift() || c : c
                    );
                },
                format = () => {
                    const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
                        i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
                        return i<0? prev[prev.length-1]: back? prev[i-1] || first: i;
                    });
                    el.value = clean(el.value).join``;
                    el.setSelectionRange(i, j);
                    back = false;
                };
            let back = false;
            el.addEventListener("keydown", (e) => back = e.key === "Backspace");
            el.addEventListener("input", format);
            el.addEventListener("focus", format);
            el.addEventListener("blur", () => el.value === pattern && (el.value=""));
        }
    });
    </script>

    <!-- VALIDA EMAIL -->
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
                $('#Button').prop('disabled', false);
            }
            else{
                document.getElementById("msgemail").innerHTML="E-mail inválido";
                $('#Button').prop('disabled', true);
            }
        }
    </script>
    
  </body>
</html>
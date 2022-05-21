<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    
    <!--css boottrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
    
    <!---
    FORMULÁRIO DE LOGIN
    cpf (type=”number”)
    senha (type=”password”)
    login <button>
    esqueci_senha <a>
    cadastre_aqui <button>
    -->
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
              <div class="card col-lg-4 mx-auto">
                <div class="card-body px-5 py-5">
                  <h3 class="card-title text-left mb-3">Login</h3>
                  
                  <!-- FORM LOGIN -->
                  <form id="login" action="#1" target="_blank" method="post">
                    <!-- CAMPO CPF -->
                    <div class="form-group">
                        <label for="cpf">CPF *</label>
                        <input type="text" id="cpf" name="cpf" class="form-control p_input" placeholder="000.000.000-00">
                    </div>
                    <!-- CAMPO SENHA -->
                    <div class="form-group">
                        <label for="senha">Senha *</label>
                        <input type="text" id="senha" name="senha" class="form-control p_input">
                    </div>
                    <!-- LINKS ALTERNATIVOS -->
                    <div class="form-group">
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"> Lembrar-me </label>
                        </div>
                        <a href="#" class="forgot-pass" name="esqueci_senha">Esqueci a senha</a>
                    </div><br>
                    <!-- BOTAO DE LOGIN -->
                    <div class="text-center">
                        <button type="submit" form_id="login" class="btn btn-primary btn-block enter-btn">Login</button>
                    </div><br>
                    <!-- LINKS ALTERNATIVOS -->
                    <p class="sign-up">Você não têm uma conta?<a href="#"> Cadastre-se</a></p>
                  </form>
                  <!-- FIM DO FORM LOGIN -->

                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
          </div>
          <!-- row ends -->
        </div>
    <!-- page-body-wrapper ends -->
    </div><br><br>






    <!--
    FORMULÁRIO DE CADASTRO DE USUARIO
    nm_usuario (type=”text”)
    sexo <select> (“feminino, masculino, não binário, outros”)
    cpf (type=”number”)
    dt_nascimento (type="date")
    rua (type=”text”)
    bairro (type=”text”)
    numero (type=”text”)
    cidade (type=”text”)
    estado (type=”text”)
    email (type=”email”)
    telefone (type=”number”)
    senha (type=”password”)
    repetir_senha (type=”password”)
    pergunta_seguranca <select> (“cor preferida?, nome do cachorro?, prato preferido?”)
    resposta_seguranca (textarea)
    foto (type=”file”)
    cadastrar <button>
    -->

    
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Cadastrar usuario</h3>

                <!-- FORM CADASTRO USUARIO -->
                <form id="cad_usuario" action="#2" target="_blank" method="post">
                    <!-- CAMPO NOME -->
                    <div class="form-group">
                        <label for="nm_usuario">Nome do usuário *</label>
                        <input type="text" id="nm_usuario" name="nm_usuario" class="form-control p_input">
                    </div>
                    <!-- CAMPO SEXO -->
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select class="form-control form-control-lg" id="sexo" name="sexo">
                            <option value="">...</option>
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                            <option value="nao_binario">Não binário</option>
                            <option value="nulo">Prefiro não dizer</option>
                        </select>
                    </div><br>
                    <!-- CAMPO CPF -->
                    <div class="form-group">
                        <label for="">CPF *</label>
                        <input type="number" id="cpf" name="cpf" class="form-control p_input" placeholder="000.000.000-00">
                    </div>
                    <!-- CAMPO DATA DE NASCIMENTO -->
                    <div class="form-group">
                        <label for="dt_nascimento">Data de nascimento</label>
                        <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control p_input" placeholder="dd/mm/aaaa">
                    </div>
                    <!-- CAMPO RUA -->
                    <div class="form-group">
                        <label for="rua">Rua *</label>
                        <input type="text" id="rua" name="rua" class="form-control p_input">
                    </div>
                    <!-- CAMPO BAIRRO -->
                    <div class="form-group">
                        <label for="bairro">Bairro *</label>
                        <input type="text" id="bairro" name="bairro" class="form-control p_input">
                    </div>
                    <!-- CAMPO NUMERO -->
                    <div class="form-group">
                        <label for="numero">Numero *</label>
                        <input type="text" id="numero" name="numero" class="form-control p_input">
                    </div>
                    <!-- CAMPO ESTADO -->
                    <div class="form-group">
                        <label for="estado">Estado *</label>
                        <select id="estado" name="estado" class="form-control form-control-lg">
                            <option selected>ES</option>
                        </select>
                    </div>
                    <!-- CAMPO CIDADE -->
                    <div class="form-group">
                        <label for="cidade">Cidade *</label>
                        <select id="cidade" name="cidade" class="form-control form-control-lg">
                            <option selected>Cidade</option>
                        </select>
                    </div>
                    <!-- CAMPO EMAIL -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control p_input" placeholder="exemplo@email.com">
                    </div>
                    <!-- CAMPO TELEFONE -->
                    <div class="form-group">
                        <label for="telefone">Telefone *</label>
                        <input type="text" id="telefone" name="telefone" class="form-control p_input" placeholder="(11) 123456789">
                    </div>
                    <!-- CAMPO SENHA -->
                    <div class="form-group">
                        <label for="senha">Senha *</label>
                        <input type="password" id="senha" name="senha" class="form-control p_input">
                    </div>
                    <!-- CAMPO REPETIR SENHA -->
                    <div class="form-group">
                        <label for="senha">Repetir senha *</label>
                        <input type="password" id="repetir_senha" name="senha" class="form-control p_input">
                    </div><br>
                    <!-- CAMPO PERGUNTA DE SEGURANCA -->
                    <div class="form-group">
                        <label for="pergunta_seg">Pergunta de segurança:</label>
                        <select class="form-control form-control-lg" id="pergunta_seg" name="pergunta_seg">
                            <option value="">...</option>
                            <option value="cachorro">Nome do primeiro cão?</option>
                            <option value="prefessor">Nome do professor(a) preferido(a)?</option>
                            <option value="amigo">Melhor amigo?</option>
                            <option value="esportista">Esportista preferido?</option>
                            <option value="filme">Filme preferido?</option>
                        </select>
                    </div><br>
                    <!-- CAMPO RESPOSTA DE SEGURANCA -->
                    <div class="form-group">
                        <label for="resposta_seg">Resposta de segurança</label>
                        <textarea class="form-control" id="resposta_seg" name="resposta_seg" rows="1"></textarea>
                    </div><br>
                    <!-- CAMPO ADICIONAR FOTO -->
                    <div class="form-group">
                        <label for="foto">Adicionar foto</label><br>
                        <input type="file" id="foto" name="foto" class="file-upload-default">
                    </div><br>
                    <!-- BOTAO DE CADASTRAR -->
                    <div class="text-center">
                        <button type="submit" form_id="cad_usuario" name="cadastrar" class="btn btn-primary btn-block enter-btn">Cadastrar</button>
                    </div><br>
                    <!-- LINKS ALTERNATIVOS -->
                    <p class="sign-up text-center">Já tem uma conta?<a href="#"> Fazer login</a></p>
                </form>
                <!-- FIM DO FORM DE CADASTRO USUARIO -->
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
    <br><br>






    <!--
    FORMULÁRIO DE CADASTRO DE LIVRO
    nm_livro (type=”text”)
    edicao (type=number)
    editora (type=”text”)
    categoria (type="text")
    nm_autor (type=”text”)
    dt_nasc (type="date")
    capa (type=”file”)
    valor_unitario (type=”float”)
    cadastrar <button>
    -->


    <div class="card-body">
        <h4 class="card-title">Cadastrar livro</h4>
      
        <!-- FORM CADASTRO USUARIO -->
        <form class="form-sample" id="cad_livro" action="#3" target="_blank" method="post">
        <p class="card-description"> Informações do livro </p>
        <div class="row">
            <!-- CAMPO NOME DO LIVRO -->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="nm_livro" class="col-sm-3 col-form-label">Nome</label>
                    <div class="col-sm-9">
                        <input type="text" id="nm_livro" name="nm_livro" class="form-control">
                    </div>
                </div>
            </div>
            <!-- CAMPO EDICAO -->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="edicao" class="col-sm-3 col-form-label">Edição</label>
                    <div class="col-sm-9">
                        <input type="text" id="edicao" name="edicao" placeholder="00" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- CAMPO ANO PUBLICACAO -->
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="ano_publicacao" class="col-sm-3 col-form-label">Ano de publicação</label>
                    <div class="col-sm-9">
                        <input type="text" id="ano_publicacao" name="ano_publicacao" placeholder="1990" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Editora</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control">
                </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Categoria</label>
              <div class="col-sm-9">
                <select class="form-control">
                  <option>...</option>
                  <option>Ficção</option>
                  <option>Ciência</option>
                  <option>História</option>
                  <option>Matemática</option>
                  <option>Português</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Autor</label>
              <div class="col-sm-9">
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Adicionar capa</label>
              <input type="file" name="img[]" class="file-upload-default">
            </div>
          </div>
        </div><br>
        <div class="col-sm-9">
          <button type="submit" name="cadastrar" class="btn btn-primary btn-block enter-btn">Cadastrar</button>
        </div>
      </form>
    </div>

    <!--
    FORMULÁRIO DE CADASTRO CLIENTE
    nm_cliente (type=”text”)
    sexo <select> (“feminino, masculino, não binário, outros”)
    cpf (type=”numer”)
    dt_nascimento (type=”date”)
    rua (type=”text”)
    bairro (type=”text”)
    numero (type=”text”)
    email (type=”text”)
    telefone (type=”number”)
    pergunta_seguranca <select> (“cor preferida?, nome do cachorro?, prato preferido?”)
    resposta_seguranca (type=”text”)
    comprovante_endereco (type=”file”)
    atualizar <button>
    -->

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Registrar cliente</h3>
                <form>
                  <div class="form-group">
                    <label>Nome completo *</label>
                    <input type="text" id="nm_cliente" name="nm_cliente" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Sexo</label><br>
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sexo" id="sexo1" value="option1"> Feminino <i class="input-helper"></i></label>
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sexo" id="sexo2" value="option2"> Masculino <i class="input-helper"></i></label>
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sexo" id="sexo3" value="option3"> Prefiro não dizer <i class="input-helper"></i></label>
                  </div>
                  <div class="form-group">
                    <label>CPF *</label>
                    <input type="text" id="cpf_cliente" name="cpf_cliente" class="form-control p_input" placeholder="000.000.000-00">
                  </div>
                  <div class="form-group">
                    <label>Data de nascimento *</label>
                    <input type="text" id="dt_nascimento" name="dt_nascimento" class="form-control p_input" placeholder="dd/mm/aaaa">
                  </div>
                  <div class="form-group">
                    <label>Rua *</label>
                    <input type="text" id="rua" name="rua" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Bairro *</label>
                    <input type="text" id="bairro" name="bairro" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Número *</label>
                    <input type="number" id="numero" name="numero" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Email *</label>
                    <input type="email" class="form-control p_input" placeholder="exemplo@email.com">
                  </div>
                  <div class="form-group">
                    <label>Telefone *</label>
                    <input type="text" id="tel_cliente" name="tel_cliente" class="form-control p_input" placeholder="(11) 123456789">
                  </div><br>
                  <div class="text-center">
                    <button type="submit" name="cadastrar" class="btn btn-primary btn-block enter-btn">Cadastrar</button>
                  </div><br>
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
    <br><br>

    <!--
    FORMULÁRIO DE ATUALIZAÇÃO CLIENTE
    nm_cliente (type=”text”)
    sexo <select> (“feminino, masculino, não binário, outros”)
    cpf (type=”numer”)
    dt_nascimento (type=”date”)
    rua (type=”text”)
    bairro (type=”text”)
    numero (type=”text”)
    email (type=”text”)
    telefone (type=”number”)
    pergunta_seguranca <select> (“cor preferida?, nome do cachorro?, prato preferido?”)
    resposta_seguranca (type=”text”)
    comprovante_endereco (type=”file”)
    atualizar <button>
    -->

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Atualizar cliente</h3>
                <form>
                  <div class="form-group">
                    <label>Nome completo *</label>
                    <input type="text" id="nm_cliente" name="nm_cliente" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Sexo</label><br>
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sexo" id="sexo1" value="option1"> Feminino <i class="input-helper"></i></label>
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sexo" id="sexo2" value="option2"> Masculino <i class="input-helper"></i></label>
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sexo" id="sexo3" value="option3"> Prefiro não dizer <i class="input-helper"></i></label>
                  </div>
                  <div class="form-group">
                    <label>CPF *</label>
                    <input type="text" id="cpf_cliente_up" name="cpf_cliente" class="form-control p_input" placeholder="000.000.000-00">
                  </div>
                  <div class="form-group">
                    <label>Data de nascimento *</label>
                    <input type="text" id="dt_nascimento_up" name="dt_nascimento" class="form-control p_input" placeholder="dd/mm/aaaa">
                  </div>
                  <div class="form-group">
                    <label>Rua *</label>
                    <input type="text" id="rua" name="rua" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Bairro *</label>
                    <input type="text" id="bairro" name="bairro" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Número *</label>
                    <input type="number" id="numero" name="numero" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Email *</label>
                    <input type="email" class="form-control p_input" placeholder="exemplo@email.com">
                  </div>
                  <div class="form-group">
                    <label>Telefone *</label>
                    <input type="text" id="tel_cliente_up" name="tel_cliente" class="form-control p_input" placeholder="(11) 123456789">
                  </div><br>
                  <div class="text-center">
                    <button type="submit" name="cadastrar" class="btn btn-primary btn-block enter-btn">Atualizar</button>
                  </div><br>
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
    <br><br>

    <!--
    FORMULÁRIO DE REDEFINICAO DE SENHA
    email (“type=”text””)
    resposta_seguranca (“type=text”)
    Redefinir <button>
    -->

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
              <div class="card col-lg-4 mx-auto">
                <div class="card-body px-5 py-5">
                  <h3 class="card-title text-left mb-3">Redefinir senha</h3>
                  <form>
                    <div class="form-group">
                      <label>Matrícula ou email *</label>
                      <input type="text" name="email_login" class="form-control p_input">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Resposta de segurança</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="1"></textarea>
                    </div><br>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block enter-btn">Redefinir</button>
                    </div><br>
                    <p class="sign-up">Lembrou?<a href="#"> Faça o Login</a></p>
                  </form>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
          </div>
          <!-- row ends -->
        </div>
    <!-- page-body-wrapper ends -->
    <br><br>

    <!--
    FORMULÁRIO DE ATUALIZAÇÃO DE LIVRO
    titulo_livro (type=”text”)
    editora (type=”text”)
    ano (type=”number”)
    autor (type=”text”)
    genero (type=”text”)
    paginas_livro (type=”number”)
    capa (type=”file”)
    atualizar <button>
    -->

    <div id="atualiza_livro" class="card-body" target="_blank" method="post">
      <h4 class="card-title">Atualizar livro</h4>
      <form class="form-sample" name="atualiza_livro">
        <p class="card-description"> Informações do livro </p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Título</label>
              <div class="col-sm-9">
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Edição</label>
              <div class="col-sm-9">
                <input type="text" id="edicao_up" name="edicao" placeholder="00" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Ano de publicação</label>
              <div class="col-sm-9">
                <input type="text" id="ano_up" name="ano" placeholder="1990" class="form-control">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Editora</label>
              <div class="col-sm-9">
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Categoria</label>
              <div class="col-sm-9">
                <select class="form-control">
                  <option>...</option>
                  <option>Ficção</option>
                  <option>Ciência</option>
                  <option>História</option>
                  <option>Matemática</option>
                  <option>Português</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Autor</label>
              <div class="col-sm-9">
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Alterar capa</label>
              <input type="file" name="img[]" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">explorar</button>
                </span>
              </div>
            </div>
          </div>
        </div><br>
        <div class="col-sm-9">
          <button type="submit" name="atualiza_livro" class="btn btn-primary btn-block enter-btn">Atualizar</button>
        </div>
      </form>
    </div><br><br>

    <!--
    FORMULÁRIO DE ALUGUEL
    dt_retirada (type="date")
    dt_devolucao (type="date")
    valor_total (type=”float”) obs.: form apenas aparece o valor, não é editável.
    endereco_retirada <select> (rua a, avenida b, rua c)
    confirmar <button>
    -->

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Aluguel de livro</h3>
                <form>
                  <div class="form-group">
                    <label>Código do livro *</label>
                    <input type="number" id="livro_id" name="livro_id" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Quantidade *</label>
                    <input type="number" id="qtd_livro" name="qtd_livro" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>CPF *</label>
                    <input type="text" id="cpf_aluguel" name="cpf_aluguel" class="form-control p_input" placeholder="000.000.000-00">
                  </div>
                  <!-- AQUI TEM SOMENTE A DATA DE RETIRADA PARA SER ADICIONADA 
                  E SERA MOSTRADO NA TELA A DATA PREVISTA DE 5 DIAS PARA A DEVOLUCAO -->
                  <div class="form-group">
                    <label>Data de retirada *</label>
                    <input type="date" id="dt_retirada" name="dt_retirada" class="form-control p_input" placeholder="dd/mm/aaaa">
                  </div><br>
                  <div class="text-center">
                    <button type="submit" name="reservar" class="btn btn-primary btn-block enter-btn">Reservar</button>
                  </div><br>
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
    <br><br>

    <!--
    FORMULÁRIO DE PAGAMENTO
    dt_devolucao (type="date")
    valor_total (type=”float”) obs.: form apenas aparece o valor, não é editável.
    confirmar <button>
    -->

    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Pagamento</h3>
                <form>
                  <div class="form-group">
                    <label>Código do livro *</label>
                    <input type="number" id="livro_id" name="livro_id" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Quantidade *</label>
                    <input type="number" id="qtd_livro" name="qtd_livro" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Data de devolucao *</label>
                    <input type="date" id="dt_devolucao" name="dt_devolucao" class="form-control p_input" placeholder="dd/mm/aaaa">
                  </div><br>
                  <div class="text-center">
                    <button type="submit" name="reservar" class="btn btn-primary btn-block enter-btn">Confirmar</button>
                  </div><br>
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
    <br><br>

    <!--
    FORMULÁRIO PESQUISAR LIVRO
    id_livro (type="number")
    -->
    
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Pesquisar livro</h3>
                <form>
                  <div class="form-group">
                    <label>Código do livro *</label>
                    <input type="number" id="livro_id" name="livro_id" class="form-control p_input">
                  </div><br>
                  <div class="text-center">
                    <button type="submit" name="pesquisar" class="btn btn-primary btn-block enter-btn">Pesquisar</button>
                  </div><br>
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
    <br><br>
    
</body>
</html>

<!-- UTILIZANDO MASCARAs PARA FORÇAR USUÁRIO A DIGITAR A QUANTIDADE E O TIPO DE CARACTERES -->
<!-- MASCARA DA MATRICULA -->

<script>

//MASCARA DO CPF

  $( "#cpf" ).keypress(function() {
      $(this).mask('000.000.000-00');
  });

//MASCARA DA TELEFONE ADM -->

  $( "#telefone" ).keypress(function() {
      $(this).mask('(00) 000000000');
  });

//MASCARA DA EDICAO DO LIVRO -->

  $( "#edicao" ).keypress(function() {
      $(this).mask('00');
  });

//MASCARA DO ANO DO LIVRO -->

  $( "#ano" ).keypress(function() {
      $(this).mask('0000');
  });

//MASCARA ATUALIZA EDICAO DO LIVRO -->

  $( "#edicao_up" ).keypress(function() {
      $(this).mask('00');
  });

//MASCARA ATUALIZA ANO DO LIVRO -->

  $( "#ano_up" ).keypress(function() {
      $(this).mask('0000');
  });

//MASCARA DE DATA DE NASCIMENTO CLIENTE -->

  $( "#dt_nascimento" ).keypress(function() {
      $(this).mask('00/00/0000');
  });

//MASCARA ATUALIZA CPF CLIENTE -->

  $( "#cpf_cliente_up" ).keypress(function() {
      $(this).mask('000.000.000-00');
  });

//MASCARA ATUALIZA TELEFONE CLIENTE -->

  $( "#tel_cliente_up" ).keypress(function() {
      $(this).mask('(00) 000000000');
  });
//MASCARA ATUALIZA DATA DE NASCIMENTO CLIENTE -->

$( "#dt_nascimento_up" ).keypress(function() {
      $(this).mask('00/00/0000');
  });

//MASCARA DO CPF CLIENTE -->

  $( "#cpf_cliente" ).keypress(function() {
      $(this).mask('000.000.000-00');
  });

//MASCARA DA TELEFONE CLIENTE -->

  $( "#tel_cliente" ).keypress(function() {
      $(this).mask('(00) 000000000');
  });

//MASCARA CPF ALUGUEL

  $( "#cpf_aluguel" ).keypress(function() {
      $(this).mask('000.000.000-00');
  });
</script>
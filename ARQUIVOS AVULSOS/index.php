<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <title>Biblioteca</title>
        <!-- Favicon-->
        <link rel="shortcut icon" href="assets/images/book-open-solid.svg" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="assets/css/style.css">

        <style type="text/css">
            body {background-image: url(https://super.abril.com.br/wp-content/uploads/2018/04/bibliotecas.png); }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar ">
            <div class="row">
                <div class="col-12 grid-margin">
                    <a class="navbar-brand" href="index.php">Biblioteca</a>
                    <a class="btn btn-primary" href="pages/autenticacao/login.php">Login</a>
                    <a class="btn btn-secondary" href="pages/autenticacao/cad_funcionario.php">Cadastrar</a>
                </div>
            </div>
        </nav>
            
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Procure seu livro no campo de busca abaixo!</h1>
                            <div id="example_filter" class="dataTables_filter"><input type="search" class="form-control p_input" placeholder="Procurar" aria-controls="example"></div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</html>

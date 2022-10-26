<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MT Cell: Qualidade com preço baixo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg menu">
        <div class="container-fluid">
          <a class="nav-link" href="index.php">
            <img src="img/logo.png" alt="" width="50px"> 
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse itens-header" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="https://wa.me/5521990853560" target="_blank">WhatsApp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="mailto:mateus.martins.rj@gmail.com" target="_blank">E-Mail</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="acessorios.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Acessórios
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="acessorios.php#capas">Capas</a></li>
                  <li><a class="dropdown-item" href="acessorios.php#peli">Películas</a></li>
                  <li><a class="dropdown-item" href="acessorios.php#caixas">Caixas de Som</a></li>
                </ul>
              </li>
              <?php
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    if(isset($_SESSION['email'])){
                        $email = $_SESSION['email'];
                        $senha = $_SESSION['senha'];
                        // $nome = $_SESSION['nomeUsu'];
                        // $cpf = $_SESSION['cpfUsu'];
                        // $telefone = $_SESSION['telefoneUsu'];
                        // $end = $_SESSION['endeUsu'];

                        echo "
                            <a href='logout.php' class='nav-link text-white'> LOGOUT </a>
                        ";
                    }
                    else{
                        echo "
                            <a href='login.php' class='nav-link text-white'>Login</a> 
                            <a href='cadastro.php' class='nav-link text-white'>Cadastrar</a>
                        ";
                    }
                    
                ?>
          </div>
        </div>
      </nav>

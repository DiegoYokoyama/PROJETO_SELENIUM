<?php
include '../../app/session/verificacao.php';
?>
<!-- CABEÇALHO E MENU SANDUICHE DO ADM -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/styles.css">

  <!--Links para funcionar o BootStap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <title>Relatórios Aluno ADM</title>
</head>

<body class="body-relatorioAluno_adm">

  <!--Menu de Navegação-->
  <header> 
    <nav class="navbar navbar-dark bg-primary fixed-top nav-adm">
        <div class="container-fluid">
            <div class="md-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            </div>
            <a class="navbar-brand me-auto fs-2 fw-bold" id="titulo-cabecalho-adm" href="#">Área de Administração Hub Fábricas</a>
            <a class="navbar-brand md-auto fs-6" id="nome-cabecalho-adm" href="#"><?php echo $_SESSION['nome']?></a>
          <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header ">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5><?php echo $_SESSION['nome']?>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav flex-column pe-3">
                <li class="nav-item">
                  <a class="nav-link active fs-5" aria-current="page" href="./admHome.php">Home</a>
                </li>
                <li class="nav-item dropdown-adm">
                  <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Administradores
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./cadastroAdm.php">Adicionar Administradores</a></li>
                    <li><a class="dropdown-item" href="./editarAdm.php">Editar Administradores </a></li>
                 </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link fs-5" aria-current="page" href="./cadastroAdmEdital.php">Editais</a>
                </li>

                <li class="nav-item dropdown-adm">
                  <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Fábricas
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./adicionarCarrosselAdm.php">Cadastrar Carrossel</a></li>
                    <li><a class="dropdown-item" href="./editarCarrosselAdm.php">Editar Carrossel </a></li>
                 </ul>
                </li>


                <li class="nav-item dropdown-adm">
                  <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Relatórios
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="./relatorioAlunoADM.php">Edital Aluno</a></li>
                    <li><a class="dropdown-item" href="./relatorioeditaldaempresa.php">Edital Empresa</a></li>
                    <li><a class="dropdown-item" href="./relatoriobancotalento.php">Banco de Talentos</a></li>
                    <li><a class="dropdown-item" href="./relatorioVagasEmprego.php">Vagas de Emprego</a></li>

                </ul>
                </li>


                <li class="nav-item fs-5">
                  <a class="nav-link" href="./usuarioAdm.php">Usuário</a>
                </li>
                <li class="nav-item mt-auto mb-2">
                  <a class="nav-link fs-5" href="../../app/session/logout.php">Sair</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>        
  </header>
  
  <main class="main-relatorioAluno_adm">
    <div class="container-fluid">
      <!-- <div class="container"> -->

      <div class="imagem-do-relatorio-aluno-adm">
        <img src="../../Imagens/imagem-relatorio-aluno-adm.svg" class="img-fluid">
      </div>
      <div class="col-12">
        <div class="relatorioAlunoAdm">
          <div class="relatorio-aluno-adm-centered">
            <div class="relatorio-aluno-adm-container">
              <div class="col-12">
                <div class="relatorio-edital-adm-container-title">
                  <h1>Relatório Aluno</h1>
                </div>
                <!-- <div class="container mt-3"> -->
                <input type="text" size="34" maxlength="11" id="relatorioAlunoAdmInput"
                  class="form-control relatorio-aluno-adm-input" placeholder="Digite o nome do edital que procura.">
                <!-- </div> -->
              </div>
              <div class="container overflow-x-auto">
                <!-- <div class="row"> -->
                <!-- <div class="col-md-12"> -->
                <div class="quadro-cinza-adm-relatorio">
                  <div class="quadro-branco-adm-relatorio">
                    <div class="relatorio-adm-borda-com-conteudo">


                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-green-adm"></span>
                        Processo Seletivo 12/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-green-adm"></span>
                        Processo Seletivo 12/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-green-adm"></span>
                        Processo Seletivo 12/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-red-adm"></span>
                        Processo Seletivo 06/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-red-adm"></span>
                        Processo Seletivo 06/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-red-adm"></span>
                        Processo Seletivo 06/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-green-adm"></span>
                        Processo Seletivo 08/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-green-adm"></span>
                        Processo Seletivo 10/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-green-adm"></span>
                        Processo Seletivo 11/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-green-adm"></span>
                        Processo Seletivo 13/2023 - Fábrica de Software - Aluno
                      </label>

                      <label class="text-relatorio-processo-seletivo">
                        <span class="icon-green-adm"></span>
                        Processo Seletivo 12/2023 - Fábrica de Software - Aluno
                      </label>

                    </div>
                  </div>
                </div>
                <!-- </div> -->
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- </div> -->
    </div>
  </main>
</body>

</html>
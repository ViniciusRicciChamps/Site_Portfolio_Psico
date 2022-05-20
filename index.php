<?php



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="style.css" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.1/css/all.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.css" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <!--  <link rel="stylesheet" href="sprites/lib/main.css" /> -->
  <script src="sprites/lib/main.js"></script>
  <title>Document</title>
</head>

<body>
  <header>
    <nav class="
          navbar navbar-expand-lg navbar-light
          bg-light
          border
          rounded
          ml-1
          mr-1
          mt-3
        ">
      <div class="container-fluid d-inline border-top-0">


        <img src="img/Logo Edlaine Ricci fundo verde-branco.png" style="width:270px;height:270px;" class="img_logo" alt="" />
        <!--
        <a class="navbar-brand" href="#">
          <p class="">
            Dra. Edlaine <br />
            Ferreira da C. Ricci
          </p>
        </a> -->
      </div>
    </nav>
    <nav class="
          navbar navbar-expand-lg navbar-light
          bg-light
          border
          rounded
          ml-1
          mr-1
          mt-1
        ">
      <div class="container-fluid">
        <button class="navbar-toggler mb-3 mt-3 rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active text-info" href="#">Home
                <span class="visually-hidden"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Consultório</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Especialidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Agendar Sessão</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div id="demo" class="carousel slide d-flex justify-content-center" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active bg-warning"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="bg-warning"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="bg-warning"></button>
    </div>

    <div class="carousel-inner mt-3 w-50">
      <div class="carousel-item active">
        <img src="img/Logo Edlaine Ricci -  Larissa Ricci 15-05-2021 (1).png" alt="Los Angeles" class="d-block w-100 mx-auto rounded " />
      </div>
      <div class="carousel-item">
        <img src="img/10198642.jpg" alt="Chicago" class="d-block w-100 mx-auto rounded" />
      </div>
      <div class="carousel-item">
        <img src="img/3872886.jpg" alt="New York" class="d-block w-100 mx-auto rounded" />
      </div>
    </div>

    <button class="carousel-control-prev rounded btn-secondary" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next rounded btn-secondary" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <div class="container mt-4 border border-primary rounded">
    <h2 class="text-center p-3">Agendar Sessão</h2>



    <form action="" method="POST" enctype="multipart/form-data">
      <fieldset>
        <div class="form-group row">
          <div class="w-50 col-6">
            <input type="text" class="form-control" name="nomeAgendarSessao" id="nomeAgendarSessao" placeholder="Nome completo" />
          </div>
          <div class="w-50 col-6">
            <input type="text" class="form-control" name="emailAgendarSessao" id="emailAgendarSessao" placeholder="email@exemplo.com" />
          </div>
        </div>
        <div class="form-group row">
          <div class="col-4">
            <input type="number" class="form-control" name="idadeAgendarSessao" id="idadeAgendarSessao" placeholder="Idade" />
          </div>
          <div class="col-4">
            <input type="tel" class="form-control" name="telefoneAgendarSessao" id="telefoneAgendarSessao" placeholder="Telefone com DDD" />
          </div>
          <div class="col-4">
            <select class="form-select" id="generoSessao" name="generoSessao" aria-label="Default select example">
              <option selected>Selecione seu gênero</option>
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
              <option value="Outros">Outros</option>
            </select>
          </div>
          <div class="">
            <label for="nascimentoAgendarSessao">Data Nascimento:</label>
            <input type="date" class="form-control" name="nascimentoAgendarSessao" id="nascimentoAgendarSessao" />
          </div>
          <div class="">
            <div class="form-check">
              <div class="form-group">
              <label for="formFile" class="form-label">Faça o upload de um arquivo caso tenha encaminhamento</label>
                <input class="form-control" type="file" id="formFile" name="formFile">
                <label for="formFile" class="form-label"> <STRong>Upload do encaminhamento. Formatos aceitos JPEG, PNG,
                    PDF.</STRong> </label>
              </div>
            </div>
          </div>
          <div class="">
            <h5 class="border-bottom text-left text-primary">
              Escolha uma data para agendar uma sessão.
            </h5>
            <div id="calendario" class="">
              <input type="date" class="form-control" name="dataAgendarSessao" id="dataAgendarSessao" />
            </div>
          </div>
        </div>
        <div class="container">
          <input type="button" value="Agendar" name="submit" id="botaoAgendar" class="btn btn-success mb-2">
          <div class="alert alert-dismissible alert-secondary" id="alerta">
            <strong id="strongTextoAlerta">Preencha os campos!</strong>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <div class="container">
    <h2 class="text-center p-3">Contato</h2>

    <div class="d-flex justify-content-around">
      <a class="" target="_blank" href="https://wa.me/5515991731221">
        <h1 class="bi bi-whatsapp text-success"></h1>
      </a>
      <a class="" href="" data-toggle="modal" data-target="#myModal">
        <h1 class=" bi bi-envelope"></h1>
      </a>
      <a class="" href="tel:5515991731221">
        <h1 class="bi bi-telephone text-warning"></h1>
      </a>

    </div>
  </div>
  <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h3>Enviar E-email</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Seu endereço de E-mail:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email@exemplo.com">
              </div>
              <div class="form-group">
                <label for="exampleInputNome">Seu nome completo:</label>
                <input type="text" class="form-control" id="exampleInputNome" placeholder="Pedro da Silva...">
              </div>
              <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Assunto:</label>
                <select class="form-select" id="exampleSelect1">
                  <option>Valores</option>
                  <option>Agendamento</option>
                  <option>Consulta</option>
                  <option>Dúvidas</option>
                  <option>Informações</option>
                  <option>Outros</option>
                </select>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Mensagem:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Enviar menssagem</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-light rounded text-center border
  rounded
  ml-1
  mr-1
  mt-1">
    <!-- Grid container -->
    <div class="container p-4 pb-0 ">
      <!-- Section: Social media -->
      <section class="mb-4 ">
        <!-- Facebook -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
        <!-- Google -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>
<script src="js/script.js">
  

</script>


</html>
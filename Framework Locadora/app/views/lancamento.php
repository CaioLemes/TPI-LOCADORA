<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Locadora</title>

    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>


    <link href="public/css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href=/index>Home Page</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/catalogo">Catálogos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/lancamento">Lançamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/admin_pagina">ADMIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#mapa">Localização</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Lançamentos</h1>
              <a href="#mapa" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

      <!-- FILMES -->
      <div>
        
      </div>


    <!-- Login -->
    <section id="login" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Login</h2>
            <form role="form" method="post" action="/enviar">
              <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" maxlength="20" name="nome" required="" class="form-control" id="nome" placeholder="" />
                  <label for="nome">Senha</label>
                  <input type="password" maxlength="20" name="nome" required="" class="form-control" id="nome" placeholder="" />
              </div>
              <button type="submit" name="action" class="btn btn-default">ENTRAR</button>
          </form><br><br>
          <p>Não possui uma conta?
          <button type="submit" name="action" class="btn btn-default">CADASTRAR-SE</button></p>
          </div>
        </div>
        
      </div>
    </section>

    <!-- Mapa -->
    <section id="mapa" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <a href="catalogos.php" class="btn btn-default btn-lg">LOCALIZAÇÃO</a>
          </div>
        </div>
      </div>
    </section>



    </body>

</html>

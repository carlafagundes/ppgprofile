<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="#">
  <!-- Estilos -->
  <link rel="stylesheet" href="css/uikit.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!--<link rel="stylesheet" id="theme-style-css" href="https://demo.yootheme.com/themes/wordpress/2017/joline/wp-content/themes/yootheme/css/theme.css?ver=1496844980" type="text/css" media="all">-->
  <!-- Fontes -->
  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <!-- Título -->
  <title>PPG Profile</title>
</head>
<body class="home blog " style="">
  <!-- HEADER -->
  <div class="tm-header-mobile uk-hidden@m">
    <nav class="uk-navbar-container uk-navbar" uk-navbar="">
      <div class="uk-navbar-center">
        <a class="uk-navbar-item uk-logo" href="<?php echo BASEURL; ?>index.php">
          <img src="images/logo-interna.png" class="uk-responsive-height" alt="PPG Profile">
          <span class="logo-interna">PPG Profile</span>
        </a>
      </div>
      <div class="uk-navbar-right">
        <a class="uk-navbar-toggle" href="#tm-mobile" uk-toggle="">
          <div uk-navbar-toggle-icon="" class="uk-navbar-toggle-icon uk-icon"></div>
        </a>
      </div>
    </nav>
  </div>
  <div class="tm-header uk-visible@m" uk-header="">
    <div class="uk-navbar-container uk-sticky uk-sticky-fixed uk-active uk-navbar-sticky uk-sticky-below" uk-sticky="" media="768" cls-active="uk-active uk-navbar-sticky" style="position: fixed; top: 0px; width: 1903px;">
      <div class="uk-container">
        <nav class="uk-navbar" uk-navbar="{&quot;align&quot;:&quot;left&quot;}">
          <div class="uk-navbar-left logo">
            <a href="<?php echo BASEURL; ?>index.php">
              <img src="images/logo-interna.png" alt="PPG Profile">
              <span class="logo-interna">PPG Profile</span>
            </a>
          </div>
          <div class="uk-navbar-center">
            <div class="uk-margin-auto-vertical">
              <ul class="uk-navbar-nav">
              	<li><a href="index.php">Visão Geral</a></li>
                <li>
                  <a href="#">Cadastrar</a>
                  <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="cadastraraluno.php">Aluno</a></li>
                        <li><a href="cadastrarprofessor.php">Professor</a></li>
                        <li><a href="cadastrarcurso.php">Curso</a></li>
                    </ul>
                </div>
                </li>
              	<li><a href="relatorio.php">Relatório</a></li>
              </ul>
            </div>
          </div>
          <div class="uk-navbar-right">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link" aria-expanded="false">
              <span class="avatar avatar-online">
                <img src="images/avatar.png" alt="avatar"><i></i>
              </span>
              <span class="user-name">Edicarla Silva</span>
            </a>
            <div class="logout" uk-icon="icon: sign-out">
              <a href="#">Logout</a>
            </div>
        </div>
        </nav>
      </div>
    </div>
  </div>
   <main class="uk-container">

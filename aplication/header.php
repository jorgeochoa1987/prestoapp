<?php
date_default_timezone_set('UTC');
//Reanudamos la sesión
session_start();

//Comprobamos si el usario está logueado
//Si no lo está, se le redirecciona al index
//Si lo está, definimos el botón de cerrar sesión y la duración de la sesión
if(!isset($_SESSION['usuario']) and $_SESSION['estado'] != 'Autenticado') {
    header('Location: index.php');
    $nombre = $_SESSION['usuario'];
} else {
  $id = $_SESSION['id'];
  $estado = $_SESSION['usuario'];
  $nombreApe = $_SESSION['nombreapellido'];
  $foto = $_SESSION['foto'];
  $salir = '<a  style="padding-left: 13px;" class="class="dropdown-item text-danger" href="../recursos/salir.php" target="_self"><i class="material-icons text-danger">&#xE879;</i>Cerrar sesión</a>';
  require('../recursos/sesiones.php');
  date_default_timezone_set('date.timezone = "America/Bogota";');
};
?> 
<!doctype html>
<html class="no-js h-100" lang="es">
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PRESTOAPP</title>
    <meta name="description" content="sistema de cobranza colombia">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="icon" href="images/money.png" type="image/png" sizes="16x16">
    <script src="js/ohsnap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.card-post--1.card-post--aside .card-body {
    padding: 2.5625rem 1.5625rem !important;
}
.table td, .table th {
  padding: .55rem !important;
}  
  .promo-popup.hidden {
    bottom: -73% !important;
  
}

    .show-menu-arrow
    {
      width: 110% !important;
    }
    .bootstrap-select.btn-group .dropdown-menu.inner {
    position: static;
    float: none;
    border: 0;
    padding: 0;
    margin: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.dropdown-menu {
    z-index: 1000;
    min-width: 10rem;
    padding: 10px 0;
    margin: 0 0 0;
    font-size: 1rem;
    color: #5a6169;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.05);
    border-radius: .375rem;
    box-shadow: 0 0.5rem 4rem rgba(0,0,0,.11), 0 10px 20px rgba(0,0,0,.05), 0 2px 3px rgba(0,0,0,.06);
}
  @media (max-width: 500px){ 
    .promo-popup.hidden {
    bottom: -74% !important;
   
}
}

@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi){
[type=reset], [type=submit], button, html [type=button] 
{

    padding: 2px !important; 
  }
}
  </style>
<script type="text/javascript">
       (function(document) {
      'use strict'; 

      var LightTableFilter = (function(Arr) {

        var _input;

        function _onInputEvent(e) {
          _input = e.target;
          var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
          Arr.forEach.call(tables, function(table) {
            Arr.forEach.call(table.tBodies, function(tbody) {
              Arr.forEach.call(tbody.rows, _filter);
            });
          });
        }

        function _filter(row) {
          var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
          row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
        }

        return {
          init: function() {
            var inputs = document.getElementsByClassName('light-table-filter');
            Arr.forEach.call(inputs, function(input) {
              input.oninput = _onInputEvent;
            });
          }
        };
      })(Array.prototype);

      document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
          LightTableFilter.init();
        }
      });

    })(document);
 
   </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css"> </head>
  </head>
  <body class="h-100">
   
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/menu.svg" alt="Menú de sistema">
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
         
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <i class="material-icons">edit</i>
                  <span>Inicio</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="nuevocliente.php">
                  <i class="material-icons">group_add</i>
                  <span>Nuevo cliente</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="listarcliente.php">
                  <i class="material-icons">accessibility</i>
                  <span>Listar clientes</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="carteracrear.php">
                  <i class="material-icons">account_balance_wallet</i>
                  <span>Nueva cartera</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="listarcartera.php">
                  <i class="material-icons">format_align_left</i>
                  <span>Listar Cartera</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="nuevoprestamo.php">
                  <i class="material-icons">monetization_on</i>
                  <span>Nuevo prestamo</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="listarprestamo.php">
                  <i class="material-icons">monetization_on</i>
                  <span>Listas  prestamos</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="nuevogasto.php">
                  <i class="material-icons">monetization_on</i>
                  <span>Crear Gastos</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="listargastos.php">
                  <i class="material-icons">monetization_on</i>
                  <span>Listas Gastos</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <i class="material-icons">label</i>
                  <span>Reportes</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="reportexcartera.php">
                  <i class="material-icons">assignment</i>
                  <span>Reportes por cartera </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="reportexcliente.php">
                  <i class="material-icons">assignment</i>
                  <span>Reportes de clientes </span>
                </a>
                <li class="nav-item">
                <a class="nav-link " href="reporte" target="_blank">
                  <i class="material-icons">assignment</i>
                  <span>Reportes x fecha  de hoy </span>
                </a>
              </li>

              
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
             
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                 
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img  style="
    width: 50%;
    height: 39px;
" class="user-avatar rounded-circle mr-2" src="<?php  echo $foto ;?>" alt="Usuario">
                    <span class="d-none d-md-inline-block"><?php echo  $nombreApe; ?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile.php?id=<?php echo $id; ?> ">
                      <i class="material-icons">&#xE7FD;</i> Mi perfil</a>
                    
                    <div class="dropdown-divider"></div>
                   <?php echo $salir ?>
                      
                  </div>
                </li>
            
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>

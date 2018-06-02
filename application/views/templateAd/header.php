<html>
    <head>

 
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php base_url();?>assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php base_url();?>assets/css/style.css"  media="screen,projection"/>
      <title>inicio</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body class="black white-text" background='assets/fondo/fw.jpg'>

<!--       INICIO MENU DE NAVEGACION        -->
 <header></header>
 <main>
 <nav>
   <div class="nav-wrapper grey darken-4">
     <img src="<?php echo base_url();?>assets/fondo/logo.png" class="responsive-img" width="100">
     <ul class="right hide-on-med-and-down">
       <li><a href="<?php base_url();?>adminIndex">Inicio</a></li>
       <li><a href="badges.html">Perfil</a></li>
       <li><a href="collapsible.html">Salir</a></li>
     </ul>
   </div>
 </nav>
<!-- Dropdown item -->
 <ul id="camaras" class="dropdown-content">
 <li><a href="<?php base_url();?>camaraVivo">en vivo</a></li>
 <li class="divider"></li>
 <li><a href="#!">Grabaciones</a></li>
 <li class="divider"></li>

</ul>
<ul id="Estacionamiento" class="dropdown-content   ">
 <li><a href="#!">Estacionamiento</a></li>
 <li class="divider"></li>
 <li><a href="#!">Editar</a></li>
 <li class="divider"></li>

</ul>
<ul id="Registro" class="dropdown-content">
 <li><a href="#!">en vivo</a></li>
 <li class="divider"></li>
 <li><a href="#!">Grabaciones</a></li>
 <li class="divider"></li>

</ul>
<ul id="personal" class="dropdown-content">
 <li><a href="<?php base_url();?>Registrar">registrar</a></li>
 <li class="divider"></li>
 <li><a href="<?php base_url();?>mostrarpersonal">personal</a></li>
 <li class="divider"></li>

</ul>
<ul id="residentes" class="dropdown-content">
 <li><a href="<?php base_url();?>Registrar">visitante</a></li>
 <li class="divider"></li>
 <li><a href="#!">Locales</a></li>
 <li class="divider"></li>

</ul>

<!-- Dropdown item fin -->
<nav>
 <div class="nav-wrapper" style="background-color:#080E40">
  
   <ul class="center hide-on-med-and-down ">
   <li><a class="dropdown-button " href="#!" data-activates="Estacionamiento">Estacionamiento<i class="material-icons right">arrow_drop_down</i></a></li>
   <li><a class="dropdown-button" href="#!" data-activates="camaras">Cámaras<i class="material-icons right">arrow_drop_down</i></a></li>
     <li><a class="dropdown-button" href="#!" data-activates="Registro">Registro<i class="material-icons right">arrow_drop_down</i></a></li>
     <li><a class="dropdown-button" href="#!" data-activates="personal">Personal<i class="material-icons right">arrow_drop_down</i></a></li>
     <li><a class="dropdown-button" href="#!" data-activates="residentes">Residentes<i class="material-icons right">arrow_drop_down</i></a></li>
   </ul>
 </div>
</nav>

<!--       FIN MENU DE NAVEGACION        -->


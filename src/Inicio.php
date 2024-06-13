<?php
require_once '../mvc/SessionIniciada/Session.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'componets/head-elements.php';?>
    <title>Inicio</title>
</head>
<body class="font-Secundario" >
<main>
<?php
include 'componets/navbar.php';
include 'componets/navbarSecundario.php';
include 'componets/informacion.php';
?>
</main>
<style>
    main{
    display: grid;
  grid-template-columns: 300px 1fr   ;
  grid-template-rows:  65px 1fr;
  grid-template-areas: 
  "a b "
  "a c ";
  }
</style>
</body>


</html>
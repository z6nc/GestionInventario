<?php
include '../mvc/SessionIniciada/Session.php';
include '../mvc/ProductosVencidosMVC/ListarProductosVencidosController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Font.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap">
    <link rel="stylesheet" href="css/EstilosPrincipal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Document</title>
</head>
<body class="font-Secundario">
    <main>
    <?php
include 'componets/navbar.php';
include 'componets/navbarSecundario.php';
include 'componets/ProductosVencidosList.php';
?>
    </main>
</body>

<style>
    main{
    display: grid;
  grid-template-columns: 300px 1fr;
  grid-template-rows:  65px 1fr;
  grid-template-areas: 
  "a b "
  "a c ";
  }
</style>
</html>
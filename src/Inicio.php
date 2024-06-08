<?php
require_once '../mvc/SessionIniciada/Session.php';
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
<body class="font-Secundario" style="position: relative;">
<main class="main">
    <section class="main-Container">
        <h1 class="main-Container-Title">Bienvenido</h1>
        <p class="main-Container-Text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
    </section>
</main>
<section>
<?php
include 'componets/navbar.php';
?>
</section>



</body>

<style>
    main{
       display: flex;
       justify-content: center;
       margin-left: 1000px;
       
    }
</style>
</html>
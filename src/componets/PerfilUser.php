<head>
  <link rel="stylesheet" href="css/Estilo-PerfilUser">
</head>

<section class="ContainerPerfilUser">
    <div class="ContainerTitle">
    <div style="display: flex;align-items: center;  margin: 12px 10px; gap:5px;" class="Container_House">
      <a href="../src/inicio.php" > <i  style="color: #16a085;" class="fas fa-home"></i></a>
      <p style="color:#5c5b60;">/ Perfil</p>
     </div>
    </div>
    <div class="SectionPerfilUser">

        <div class="ContainerImg">
           <h2 >Bienvenido/a <?php echo $idusuario ?></h2>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/640px-User_icon_2.svg.png" alt="">
        </div>
    
        <div class="ContainerTableData">
               <table style="text-align: center;">
                    <tr class="columnTable">
                        <td  class="ItemTable">Nombre:</td>
                        <td><?php echo $idusuario ?></td>
                    </tr>
                    <tr class="columnTable">
                        <td class="ItemTable">Apellido:</td>
                        <td><?php echo $apellido ?></td>
                    </tr>
                    <tr class="columnTable">
                        <td class="ItemTable">Jerarquia:</td>
                        <td><?php echo $Jerarquia ?></td>
                    </tr>
                    <tr class="columnTable">
                        <td ><a href="" class="BtnEditar"><i style="  font-size: 21px;" class="fas fa-edit"></i></a></td>
                        <td><a href="../mvc/SessionIniciada/CerrarSession.php" class="BtnCerrar"><i style="  font-size: 21px;" class="fas fa-door-open"></i></a></td>
                    </tr>
                   
               </table>
        </div>
    </div>

</section>


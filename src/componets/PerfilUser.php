<?php
$NombreReal= "María";
$ApellidoUsuario = "Fernández Martínez";
$NombreUsuario = "maria.fm";
?>

<section class="ContainerPerfilUser">
    <div class="ContainerTitle">
    <div style="display: flex;align-items: center;  margin: 12px 10px; gap:5px;" class="Container_House">
      <a href="../src/inicio.php" > <i  style="color: #16a085;" class="fas fa-home"></i></a>
      <p style="color:#5c5b60;">/ Perfil</p>
     </div>
    </div>
    <div class="SectionPerfilUser">
    <h2 >Bienvenido/a <?php echo $idusuario ?></h2>

        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/640px-User_icon_2.svg.png" alt="">
        </div>
    
        <div class="ContainerTableData">
               <table style="text-align: center;">
                    <tr>
                        <td  class="ItemTable">Nombre:</td>
                        <td><?php echo $NombreReal ?></td>
                    </tr>
                    <tr>
                        <td class="ItemTable">Apellido:</td>
                        <td><?php echo $ApellidoUsuario ?></td>
                    </tr>
                    <tr>
                        <td class="ItemTable">Usuario:</td>
                        <td><?php echo $NombreUsuario ?></td>
                    </tr>
                    <tr>
                    <td><a href="">Editar Perfi</a></td>
                    <td><a href="">Cerrar Session</a></td>
                    </tr>
               </table>
        </div>
    </div>

</section>


<style>
    .ContainerPerfilUser{
        background-color: whitesmoke;

    }
    .SectionPerfilUser{
        background-color: white;
        display: flex;
        border-left: 7px solid #16A085;
        justify-content: center;
        margin: auto;
        width: auto;
        align-items: center;
        flex-direction: column;
        margin: 0px 36%;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        border-radius: 10px;
      img{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin: 20px;
        border: 1px solid #16A080;
      }
      table{
        margin: 10px ;
        font-size: 18px;
      }
      table  .ItemTable{
        color: gray;
        padding: 3px 0px;
        font-weight: 500;
      }
    }
</style>
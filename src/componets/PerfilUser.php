<?php
$NombreReal= "María";
$ApellidoUsuario = "Fernández Martínez";
$NombreUsuario = "maria.fm";
?>

<section class="ContainerPerfilUser">
    <div class="ContainerTitle">
    <h1 class="text-center">Perfil de Usuario</h1>
    </div>
    <div class="SectionPerfilUser">
    <h2 class="text-center">Bienvenido/a <?php echo $idusuario ?></h2>

        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/640px-User_icon_2.svg.png" alt="">
        </div>
    
        <div class="ContainerTableData">
               <table style="text-align: center;">
                    <tr>
                        <td>Nombre:</td>
                        <td><?php echo $NombreReal ?></td>
                    </tr>
                    <tr>
                        <td>Apellido:</td>
                        <td><?php echo $ApellidoUsuario ?></td>
                    </tr>
                    <tr>
                        <td>Usuario:</td>
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
        border: 2px solid #16A085;
      }
    }
</style>
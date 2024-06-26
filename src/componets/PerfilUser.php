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
                        <td><a href="" class="BtnCerrar"><i style="  font-size: 21px;" class="fas fa-door-open"></i></a></td>
                    </tr>
                   
               </table>
        </div>
    </div>

</section>


<style>
    .ContainerPerfilUser{
        background-color: whitesmoke;
        width: 100%;
    }
    .SectionPerfilUser{
        background-color: white;
        max-width: 54%;
        margin: auto;
         display: grid;
         grid-template-columns: 1fr 1fr;
         text-align: center;
        border-left: 7px solid #16A085;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        border-radius: 10px;
        height: 50%;
      img{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin: 20px;
        border: 1px solid #16A080;
      }
      .ContainerTableData 
       {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
       .ContainerImg{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        background-color: #16A085;

      }
      table{
        margin: 10px ;
        font-size: 18px;
      }
      table  .ItemTable{
        color: gray;
        font-weight: 500;
      }
        table td{
            padding: 12px 0px;
        }


      .BtnEditar{
        background-color: #007cfd;
        color: white;
        padding: 7px 26px;
        border-radius: 5px;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
      }
        .BtnEditar:hover{
            background-color: skyblue;
        }
        .BtnCerrar{
        background-color: #f66549;
        color: white;
        padding: 7px 26px;
        border-radius: 5px;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
      }
    }
</style>
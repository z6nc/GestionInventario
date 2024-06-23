<?php 
$idMenu = $_GET['IDMENU'];
$NombreMenu = $_GET['NOMBRE_MENU'];
$PrecioMenu = $_GET['PRECIOVENTA'];
$EstadoMenu = $_GET['EstadoMenu'];
?>
<section style="background-color: whitesmoke; ">

  <form class="shadows" action="../mvc/AgregarMenuMVC/EditarMenuController.php" method="POST">
    <div style="background-color: #16a085;">
      <h1 style=" margin-top: 20px;color: white; padding-left: 20px; ">EDITAR  MENU</h1>
    </div>
    <div class="" style="padding: 23px 15px;  display: flex;  flex-wrap: wrap; gap: 25px; text-align: center;">
    <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
        <label style="font-size: 18px; color: gray;"  class="form-label">ID  MENU:</label>
        <input style="padding: 3px 3px; font-size: 17px;" type="text"  name="IDMenu" value="<?php echo htmlspecialchars($idMenu); ?>" required>
      </div>
      <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
        <label style="font-size: 18px; color: gray;"  class="form-label">Nombre del Menu:</label>
        <input style="padding: 3px 3px; font-size: 17px;" type="text"  name="NomMenu" value="<?php echo htmlspecialchars($NombreMenu); ?>" required>
      </div>
      <div style="display: flex; align-items: center;   flex: 1 1 400px; gap: 9px;">
        <labe style="font-size: 18px; color: gray;"  class="form-label">Precio Menu: </labe>
        <input style="padding: 3px 3px; font-size: 17px;" type="text" name="PrecioMenu" value="<?php echo htmlspecialchars($PrecioMenu); ?>" required >
      </div>
      <div class="" style=" flex: 1 1 400px; display: flex; align-items: center;gap: 9px;">
        <label style="font-size: 18px; color: gray;"  class="form-label">Estado del Menu: </label>
        <select style="padding: 3px 3px; font-size: 17px;" name="EstadoMenu"  required>
          <option value="HABILITADO" <?php if ($EstadoMenu === 'HABILITADO') echo 'selected'  ; ?>>HABILITADO</option>
          <option value="INHABILITADO" <?php if ($EstadoMenu === 'INHABILITADO') echo 'selected'  ;  ?>>INHABILITADO</option>
    </select>
      </div>



    </div>
    <div class="" style="display: flex; justify-content: center; gap: 9px; margin: 3% 0px;">
      <button class="Botones" style="background-color: #007cfd; "> <i class="fas fa-save"></i> Guardar</button>
      <a class="Botones" style="background-color: red; " href="../src/Menu.php"> <i class="fas fa-arrow-left"></i> Volver</a>
    </div>


  </form>
  

</section>
<style>
  .shadows {
    background-color: white;
    max-width: 55%;
    width: auto;
    margin: auto;
    display: flex;
    flex-direction: column;
    margin-top: 3%;
    gap: 12px;
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  }

  .Botones {

    cursor: pointer;
    color: white;
    border: none;
    padding: 10px 19px;
    border-radius: 4px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.1s ease-in-out;

  }

  .Botones:hover {
    transform: scale(1.05);
  }
</style>
<?php 
$idProveedor = $_GET['IDPROVEEDOR'];
$NombreProveedor = $_GET['RAZON_SOCIAL'];
$RucProveedor = $_GET['RUC'];
?>
<section style="background-color: whitesmoke; ">

  <form class="shadows" action="../mvc/AgregarProveedorMVC/EditarProveedorController.php" method="POST">
    <div style="background-color: #16a085;">
      <h1 style=" margin-top: 20px;color: white; padding-left: 20px; ">EDITAR  PROVEEDOR</h1>
    </div>
    <div class="" style="padding: 23px 15px;  display: flex;  flex-wrap: wrap; gap: 25px; text-align: center;">
    <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px; display: none;">
        <label style="font-size: 18px; color: gray;"  class="form-label">ID  PROVEEDOR:</label>
        <input style="padding: 3px 3px; font-size: 17px; " type="text"  name="IDProveedor" value="<?php echo htmlspecialchars($idProveedor); ?>"  required>
      </div>
      <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
        <label style="font-size: 18px; color: gray;"  class="form-label">Nombre del Proveedor:</label>
        <input style="padding: 3px 3px; font-size: 17px;" type="text"  name="NomProveedor" value="<?php echo htmlspecialchars($NombreProveedor); ?>" required>
      </div>
      <div style="display: flex; align-items: center;   flex: 1 1 400px; gap: 9px;">
        <labe style="font-size: 18px; color: gray;"  class="form-label">RUC: </labe>
        <input style="padding: 3px 3px; font-size: 17px;" type="text" name="RucProveedor" value="<?php echo htmlspecialchars($RucProveedor); ?>" required >
      </div>



    </div>
    <div class="" style="display: flex; justify-content: center; gap: 9px; margin: 3% 0px;">
      <button class="Botones" style="background-color: #007cfd; "> <i class="fas fa-save"></i> Guardar</button>
      <a class="Botones" style="background-color: red; " href="../src/Proveedor.php"> <i class="fas fa-arrow-left"></i> Volver</a>
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
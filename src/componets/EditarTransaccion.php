<?php 
$IDTransaccion = $_GET['ID_TRANSACCION'];
$IDPRODUCTO = $_GET['IDPRODUCTO'];
$NOM_PRODUCTO = $_GET['NOM_PRODUCTO'];
$FECHA_COMPRA = $_GET['FECHA_COMPRA'];
$STOCK = $_GET['STOCK'];
$PRECIO = $_GET['PRECIO'];
$FECHA_CADUCIDAD = $_GET['FECHA_CADUCIDAD'];
$MONTO_TOTAL = $_GET['MONTO_TOTAL'];
$ESTADO = $_GET['ESTADO'];

?>
<section style="background-color: whitesmoke; ">

  <form class="shadows" action="../mvc/TransaccionMVC/EditarTransaccionController.php" method="POST">
    <div style="background-color: #16a085;">
      <h1 style=" margin-top: 20px;color: white; padding-left: 20px; ">EDITAR  COMPRA</h1>
    </div>
    <div class="" style="padding: 23px 15px;  display: flex;  flex-wrap: wrap; gap: 25px; text-align: center;">
    <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px; display: none;">
        <label style="font-size: 18px; color: gray;"  class="form-label">ID  Compra:</label>
        <input style="padding: 3px 3px; font-size: 17px; text-transform: uppercase; " type="text"  name="IDTransaccion" value="<?php echo htmlspecialchars($IDTransaccion); ?>"  required>
      </div>
      <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
            <label style="font-size: 18px; color: gray;"  class="form-label">Fecha de Compra:</label>
            <input style="padding: 3px 3px; font-size: 17px;" type="date" name="FechaCompra" value="<?php echo htmlspecialchars($FECHA_COMPRA); ?>" required>
        </div>
      <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
            <label style="font-size: 18px; color: gray;"  class="form-label">Producto:</label>
            <select style="padding: 3px 3px; font-size: 17px;" name="ProductoID" required>
                <option value="<?php echo htmlspecialchars($IDPRODUCTO); ?>" <?php  echo 'selected'  ; ?>><?php echo htmlspecialchars($NOM_PRODUCTO); ?></option>
            </select>
        </div>
        
        <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
            <label style="font-size: 18px; color: gray;"  class="form-label">Stock:</label>
            <input style="padding: 3px 3px; font-size: 17px;" type="text" name="Stock" value="<?php echo htmlspecialchars($STOCK); ?>" required>
        </div>
        <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
            <label style="font-size: 18px; color: gray;"  class="form-label">Precio:</label>
            <input style="padding: 3px 3px; font-size: 17px;" type="text" name="Precio" value="<?php echo htmlspecialchars($PRECIO); ?>" required>
        </div>
        <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
            <label style="font-size: 18px; color: gray;"  class="form-label">Fecha de Caducidad:</label>
            <input style="padding: 3px 3px; font-size: 17px;" type="date" name="FechaCaducidad" value="<?php echo htmlspecialchars($FECHA_CADUCIDAD); ?>" required>
        </div>
        <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
            <label style="font-size: 18px; color: gray;"  class="form-label">Monto Total:</label>
            <input style="padding: 3px 3px; font-size: 17px;" type="text" name="MontoTotal" value="<?php echo htmlspecialchars($MONTO_TOTAL); ?>" required>
        </div>
        <div class="" style="display: flex; align-items: center;  flex: 1 1 400px; gap: 9px;">
            <label style="font-size: 18px; color: gray;"  class="form-label">Estado:</label>
            <select style="padding: 3px 3px; font-size: 17px;" name="Estado" required>
                <option value="Revisado" <?php if ($ESTADO === 'Revisado') echo 'selected'  ; ?>>Revisado</option>
                <option value="Pendiente" <?php if ($ESTADO === 'Pendiente') echo 'selected'  ;  ?>>Pendiente</option>
                <option value="Eliminado" <?php if ($ESTADO === 'Eliminado') echo 'selected'  ;  ?>>Eliminado</option>
            </select>
        </div>
     
    </div>
    <div class="" style="display: flex; justify-content: center; gap: 9px; margin: 3% 0px;">
      <button class="Botones" style="background-color: #007cfd; "> <i class="fas fa-save"></i> Guardar</button>
      <a class="Botones" style="background-color: red; " href="../src/Transaccion.php"> <i class="fas fa-arrow-left"></i> Volver</a>
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
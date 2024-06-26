
<section style="background-color: #f1f1f1;position: relative; " class="Container-Menu">
  <article style=" padding:1.5% 5% 0% 5%;">
    <div style="display: flex;align-items: center;  margin: 12px 0px; gap:5px;" class="Container_House">
      <a href="../src/inicio.php" > <i  style="color: #16a085;" class="fas fa-home"></i></a>
      <p style="color:#5c5b60;">/ Menu</p>
    </div>

    <script>
        function enviarFormulario() {
            document.getElementById('miFormulario').submit();
        }
    </script>

    <div style="display: flex; align-items: center;" class="Container_Filtro">
      <div class="Container_Result">
        <form id="miFormulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <label for="opciones">Categorias</label>
            <select style="border: none; padding: 3px 7px;" id="opciones" name="opciones" onchange="enviarFormulario()">
              <option value="0">Elija Una Opccion</option>
              <option value="1">Aderesos</option>
              <option value="2">Menestras</option>
              <option value="3">Arroces</option>
              <option value="4">Aceites</option>
              <option value="5">Condimenntos</option>
              <option value="6">Bebidas</option>
              <option value="7">Lacteos</option>
              <option value="8">Carnes</option>
              <option value="9">Frutas y Verduras</option>
              <option value="10">Pastas</option>
              <option value="11">Panes y Repsoteria</option>
              <option value="12">Enlatados</option>
              <option value="13">Congelados</option>
              <option value="14">Cereales y Legumbres</option>
              <option value="16">Sales</option>
            </select>
        </form>
      </div>
    </div>


    <table class="shadows" style=" width: 100%; background-color: white; max-width: 90%; margin: auto; margin-top: 20px; ">
      <thead class=" " style=" background-color:  #16a085; "  >

          <tr class="" style="color: white;" >
            <th class="borders" style=" padding: 10px 0px;" scope="col">ID</th>
            <th class="borders" scope="col">NOMBRE</th>
            <th class="borders" scope="col">STOCK</th>
            <th class="borders" scope="col">PRECIO</th>
          </tr>
        </thead>
        <tbody class="table-group-divider " style="text-align: center;">
          <?php
          $opcion_seleccionada = $_POST['opciones'] ?? null;
          if($opcion_seleccionada === "1"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias1 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "2"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias2 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "3"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias3 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "4"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias4 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "5"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias5 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "6"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias6 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "7"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias7 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "8"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias8 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "9"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias9 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "10"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias10 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "11"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias11 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "12"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias12 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "13"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias13 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "14"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias14 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "15"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias15 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
          if($opcion_seleccionada === "16"){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($ResultadoCategorias16 as $Categoria) : 
                  ?>
                  <tr style="color:gray;  ">
                    <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['IDPRODUCTO']); ?></td>
                    <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Categoria['NOM_PRODUCTO']); ?></td>
                    <td><?php echo htmlspecialchars($Categoria['STOCK']); ?></td>
                    <td>S/ <?php echo htmlspecialchars($Categoria['PRECIOCOMPRA']); ?></td>
                  </tr>
                  <?php  endforeach;
            }
          }
            ?>
        </tbody>
      </table>
  </article>
</section>

<style>
  .VistaRespuesta{
    position: absolute;
    top: 0px;
    width: 90%;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: white;
    margin-top: 21px;
    margin-left: 5%;
    border-radius: 5px;
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
     display: none;
  }
.StyleSuceess{
  background-color: #e4f2f0;
  color: #47736d;
}
.StyleError{
  background-color: #f8d7da;
  color: #842029;
}

.shadows{
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
}
.borders{
  border-bottom: 2px solid black;
}
tr:hover>:not(th){
  background-color: #f1f1f19c;
}

.butomsCustmomers{
  border: none; 
  padding: 9px 12px;
  border-radius: 5px; 
  transition: all 0.1s ease-in-out;
}
.butomsCustmomers:hover{
  transform: scale(1.05);
}
</style>

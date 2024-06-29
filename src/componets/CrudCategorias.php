<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx-style/0.8.13/xlsx-style.min.js"></script>
</head>
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

    <div style="display: flex; align-items: center; " class="Container_Filtro">
      <div class="Container_files">
        <button class="butomsCustmomers" style="background-color: #007cfd; "><a href="Categoriaadd.php" style="text-decoration: none ;color: white; font-size: 12px; font-weight: 600;"><i class="fas fa-plus-circle"></i> AGREGAR NUEVA CATEGORIA</a></button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br><br>
      </div>
      <div class="Container_files">
        <button class="butomsCustmomers" style="background-color:#f66549; "><a href="Categoriadelete.php" style="text-decoration: none ;color: white; font-size: 12px; font-weight: 600;"><i class="fas fa-trash"></i> ELIMINAR CATEGORIA</a></button>
        <br><br>
      </div>
    </div>

    <div style="display: flex; align-items: center;" class="Container_Filtro">
      <div class="Container_Result">
        <form id="miFormulario" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <label for="opcionesSelect">Categorias</label>
            <select style="border: none; padding: 3px 7px;" id="opcionesSelect" name="opcionesSelect" onchange="enviarFormulario()">
              <option value="0">Elija Una Opccion</option>
              <?php echo $opciones; ?>
            </select>
        </form>
      </div>
    </div>
    <table class="shadows" style=" width: 100%; background-color: white; max-width: 90%; margin: auto; margin-top: 20px; ">
      <thead class=" " style=" background-color:  #16a085; "  >

          <tr class="" style="color: white;" >
            <th class="borders" style=" padding: 10px 0px;" scope="col">ID CATEGORIA</th>
            <th class="borders" scope="col">ID PRODUCTO</th>
            <th class="borders" scope="col">NOMBRE</th>
            <th class="borders" scope="col">STOCK</th>
            <th class="borders" scope="col">PRECIO</th>
          </tr>
        </thead>
        <tbody class="table-group-divider " style="text-align: center;">
          <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

              $opcion_seleccionada = $_POST['opcionesSelect'] ?? null;
              $datoCat = $opcion_seleccionada ?? null;
              $sql = "SELECT IDPRODUCTO, NOM_PRODUCTO, STOCK, PRECIOCOMPRA, idCategoria FROM producto WHERE idCategoria =".$datoCat.""; 
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $result = $stmt->get_result();
              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      $ResultadoCategorias[] = [
                          'IDPRODUCTO' => $row['IDPRODUCTO'],
                          'NOM_PRODUCTO' => $row['NOM_PRODUCTO'],
                          'STOCK' => $row['STOCK'],
                          'PRECIOCOMPRA' => $row['PRECIOCOMPRA'],
                          'idCategoria' => $row['idCategoria'],
                      ];
                  }
                  foreach ($ResultadoCategorias as $Categoria) : 
                    ?>
                    <tr style="color:gray;  ">
                      <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Categoria['idCategoria']); ?></td>
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
  <div id="alerta" class="VistaRespuesta   " role="alert">
    <div style="display: grid; grid-template-columns: 70px 1fr; gap: 10px; ">
      <div class=" " style="background-color: #77c0b5; display: flex; align-items: center; justify-content: center; ">
      <i  style="font-size: 22px; color: white; " class="fas fa-check-circle"></i>
      </div> 
      <p id="TextoRespuesta"></p>
    </div>
    <span style="padding-right: 9px; cursor: pointer;">X</span>
</div>
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

<script src="js/AlertaRespuestCrudCategoria.js"></script>
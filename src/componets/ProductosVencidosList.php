

<head>
  <link rel="stylesheet" href="css/ListarMenu.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx-style/0.8.13/xlsx-style.min.js"></script>
</head>
<section style="background-color: #f1f1f1;position: relative; " class="Container-Menu">
  
    <article style=" padding:1.5% 5% 0% 5%;">
     <div style="display: flex;align-items: center;  margin: 12px 0px; gap:5px;" class="Container_House">
      <a href="../src/inicio.php" > <i  style="color: #16a085;" class="fas fa-home"></i></a>
      <p style="color:#5c5b60;">/ Productos Vencidos </p>
     </div>

     <div style="display: flex; align-items: center; justify-content: space-between;" class="Container_Filtro">
       <div class="Container_Search">
          <input type="text" placeholder="Buscar Menu" style="padding: 10px 20px; border: none; border-radius: 4px; margin: 10px 0px; ">
          <button style="padding: 10px 20px; border: none; border-radius: 4px; margin: 10px 0px; background-color: #16a085; color: white; "><i class="fas fa-search"></i></button>
       </div>
       <div class="Container_Result">
       <label for="opciones">Resultado</label>
        <select style="border: none; padding: 3px 7px;" id="opciones" name="opciones">
            <option value="opcion1">5</option>
            <option value="opcion2">10</option>
            <option value="opcion3">20</option>
            <option value="opcion3">Todos</option>

        </select>
       </div>

     </div>

    </article>
   
    

<table id="menuTable" class="shadows" style=" width: 100%; background-color: white; max-width: 90%; margin: auto; margin-top: 20px; ">
<thead class=" " style=" background-color:  #16a085; "  >

    <tr class="" style="color: white;" >
      <th class="borders"  scope="col">Imagen</th>
      <th class="borders" scope="col">NOMBRE</th>
      <th class="borders" scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody class="table-group-divider " style="text-align: center;">
    <?php foreach ($ResultadoProductoVencidos as $productoVencidos) : ?>
    <tr style="color:gray;  ">
      <td  style=" " scope="row"><img width="10%" src="<?php echo htmlspecialchars($productoVencidos['URL_IMG']); ?>" alt=""></td>
      <td style="text-transform: uppercase;"><?php echo htmlspecialchars($productoVencidos['NOM_PRODUCTO']); ?></td>
      <td><?php echo htmlspecialchars($productoVencidos['FECHA_CADUCIDAD']); ?></td>
    </tr>
    <?php  endforeach; ?>
  </tbody>
</table>
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

<script src="js/AlertaRespuestCrudMenu.js"></script>
<script src="js/exportExcel.js"> </script>

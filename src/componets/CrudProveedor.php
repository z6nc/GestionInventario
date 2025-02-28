
<head>
  <link rel="stylesheet" href="css/ListarMenu.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx-style/0.8.13/xlsx-style.min.js"></script>
</head>
<section style="background-color: #f1f1f1;position: relative; " class="Container-Menu">
  
    <article style=" padding:1.5% 5% 0% 5%;">
     <div style="display: flex;align-items: center;  margin: 12px 0px; gap:5px;" class="Container_House">
      <a href="../src/inicio.php" > <i  style="color: #16a085;" class="fas fa-home"></i></a>
      <p style="color:#5c5b60;">/ Proveedor</p>
     </div>

     <div style="display: flex; align-items: center; justify-content: space-between;" class="Container_Filtro">
      <div class="Container_files">
        <button class="butomsCustmomers" style="background-color: #007cfd; "><a href="ProveedorAdd.php" style="text-decoration: none ;color: white; font-size: 12px; font-weight: 600;"><i class="fas fa-plus-circle"></i> AGREGAR NUEVO</a></button>
        <button id="exportButton"  class="butomsCustmomers" style="background-color: gray; "><a href=""style="text-decoration: none ;color: white; font-size: 12px;font-weight: 600;"> <i class="fas fa-upload"></i> EXPORTAR</a></button>
      </div>
       <div class="Container_Search">
       <input type="text" id="buscar-producto" onkeyup="barraBusqueda('buscar-producto')" placeholder="Buscar Proveedor" style="padding: 10px 20px; border: none; border-radius: 4px; margin: 10px 0px; ">
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
      <th class="borders" style=" padding: 10px 0px;" scope="col">ID</th>
      <th class="borders" scope="col">RAZON_SOCIAL</th>
      <th class="borders" scope="col">RUC</th>
      <th class="borders" scope="col">ACCIONES </th>

    </tr>
  </thead>
  <tbody class="table-group-divider " style="text-align: center;">
    <?php foreach ($ResultadoListarProveedor as $Proveedor) : ?>
    <tr style="color:gray;  ">
      <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Proveedor['IDPROVEEDOR']); ?></td>
      <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Proveedor['RAZON_SOCIAL']); ?></td>
      <td><?php echo htmlspecialchars($Proveedor['RUC']); ?></td>
      <td style="display: flex; justify-content: center; gap: 10px; padding: 10px 0px; ">
        <button style="background-color: #ffcb66 ; padding:8px 10px;  border: none; border-radius: 4px;">
          <a href="../mvc/AgregarProveedorMVC/ObtenerProveedorIDController.php?IDPROVEEDOR=<?php echo $Proveedor['IDPROVEEDOR']; ?>">
            <i style=" color: black; font-size: 18px;" class="fas fa-edit"></i>
           </a>
       </button> 
         <button style="background-color:#f66549 ; padding:8px 10px;  border: none; border-radius: 4px;">
         <a href="../mvc/AgregarProveedorMVC/EliminarProveedorController.php?IDPROVEEDOR=<?php echo $Proveedor['IDPROVEEDOR']; ?>">
            <i style="color: black;  font-size: 18px;" class="fas fa-trash"></i>
          </a>  
        </button>
      </td>
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

<script>
window.onload = function () {
    let TextoRespuesta = document.getElementById('TextoRespuesta');
    const urlParams = new URLSearchParams(window.location.search);
    const exitoProveedor = urlParams.get('success');
    const errorProveedor = urlParams.get('error');
    let alerta = document.getElementById('alerta');

    if (exitoProveedor === 'ProveedorRegisteredSuccessfully') {
      alerta.style.display = 'flex';
      alerta.classList.add('StyleSuceess');
      TextoRespuesta.innerText = 'Proveedor registrado Correctamente';
    } else if (errorProveedor === 'ProveedorNotRegisteredSuccessfull'){
      alerta.style.display = 'flex';
       alerta.classList.add('StyleError');
      TextoRespuesta.innerText = 'Proveedor no registrado Correctamente';
    }
      else if (errorProveedor === 'ProveedorNotDeletedSuccessfull'){
        alerta.style.display = 'flex';
        alerta.classList.add('StyleError');
        TextoRespuesta.innerText = 'Proveedor no eliminado Correctamente';
      }
    else if (exitoProveedor === 'ProveedorDeletedSuccessfully'){
      alerta.style.display = 'flex';
       alerta.classList.add('StyleSuceess');
      TextoRespuesta.innerText = 'Proveedor eliminado Correctamente';
    }

    document.querySelector('#alerta span').addEventListener('click', () => {
      alerta.style.display = 'none';
    });
  };

</script>
<script src="js/exportExcelProveedor.js"></script>
<script src="js/buscadorProveedor.js"></script>
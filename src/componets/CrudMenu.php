

<section style="background-color: #f1f1f1; " class="Container-Menu">
  
    <article style=" padding:1.5% 5% 0% 5%;">
     <div style="display: flex;align-items: center;  margin: 12px 0px;" class="Container_House">
      <a href="" > <i  style="color: #16a085;" class="fas fa-home"></i></a>
      <p >/ Menu</p>
     </div>

     <div style="display: flex; align-items: center; justify-content: space-between; " class="Container_Filtro">
      <div class="Container_files">
        <button><a href=""><i class="fas fa-plus-circle"></i> Agregar  Nuevo</a></button>
        <button><a href=""> <i class="fas fa-upload"></i> Exportar</a></button>
      </div>
       <div class="Container_Search">
          <input type="text" placeholder="Buscar Menu" style="padding: 10px 20px; border: none; border-radius: 4px; margin: 10px 0px; ">
          <button style="padding: 10px 20px; border: none; border-radius: 4px; margin: 10px 0px; background-color: #16a085; color: white; "><i class="fas fa-search"></i></button>
       </div>
       <div class="Container_Result">
       <label for="opciones">Resultado</label>
        <select id="opciones" name="opciones">
            <option value="opcion1">5</option>
            <option value="opcion2">10</option>
            <option value="opcion3">20</option>
            <option value="opcion3">Todos</option>

        </select>
       </div>

     </div>

    </article>
   
    

<table class="shadows" style=" width: 100%; background-color: white; max-width: 90%; margin: auto; margin-top: 20px; ">
<thead class=" " style=" background-color:  #16a085; "  >

    <tr class="" style="color: white;" >
      <th class="borders" style=" padding: 10px 0px;" scope="col">ID</th>
      <th class="borders" scope="col">NOMBRE MENU</th>
      <th class="borders" scope="col">PRECIO MENU</th>
      <th class="borders" scope="col">ESTADO MENU </th>
      <th class="borders" scope="col">ACCIONES </th>

    </tr>
  </thead>
  <tbody class="table-group-divider " style="text-align: center;">
    <?php foreach ($ResultadoListarMenu as $Menu) : ?>
    <tr style="color:gray;  ">
      <td  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Menu['IDMENU']); ?></td>
      <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Menu['NOMBRE_MENU']); ?></td>
      <td>S/ <?php echo htmlspecialchars($Menu['PRECIOVENTA']); ?></td>
      <td><?php echo htmlspecialchars($Menu['EstadoMenu']); ?></td>
      <td style="display: flex; justify-content: center; gap: 10px; padding: 10px 0px; ">
        <button style="background-color: #ffcb66 ; padding:8px 10px;  border: none; border-radius: 4px;"><a href=""><i style=" color: black; font-size: 18px;" class="fas fa-edit"></i></a> </button> 
         <button style="background-color:#f66549 ; padding:8px 10px;  border: none; border-radius: 4px;"><a href=""><i style="color: black;  font-size: 18px;" class="fas fa-trash"></i></a>  </button>
      </td>
    </tr>
    <?php  endforeach; ?>
  </tbody>
</table>
</section>

<style>
.shadows{
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
}
.borders{
  border-bottom: 2px solid black;
}
tr:hover>:not(th){
  background-color: #f1f1f19c;
}

</style>
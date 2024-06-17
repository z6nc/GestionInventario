<section style="background-color: #f1f1f1; " class="Container-Menu">
  
    <article class="shadows" style="width: 100%;display: flex; justify-content:space-between; align-items: center; padding: 10px 10px; background-color: white; max-width: 90%; margin: auto; margin-top: 3%; border-radius: 5px; ">
   <div style="display: flex;  justify-content: center ; align-items: center; gap: 10px; ">
   <i style="font-size: 22px;   "  class="fas fa-utensils"></i>
   <h1 class="" style="font-size: 22px; letter-spacing: 2px;"> MENU</h1>  
   </div>
        <a href="#" style="background-color:#198754 ; padding: 7px 9px; text-decoration: none; border-radius: 5px; color: white;" >Agregar Menu</a>
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
    <tr style="color:gray; ">
      <th  style=" padding: 10px 0px;" scope="row"><?php echo htmlspecialchars($Menu['IDMENU']); ?></th>
      <td style="text-transform: uppercase;"><?php echo htmlspecialchars($Menu['NOMBRE_MENU']); ?></td>
      <td><?php echo htmlspecialchars($Menu['PRECIOVENTA']); ?></td>
      <td><?php echo htmlspecialchars($Menu['EstadoMenu']); ?></td>
      <td style="display: flex; justify-content: center; gap: 10px; padding: 10px 0px; ">
        <a href=""><i style="color: blue; font-size: 18px;" class="fas fa-edit"></i></a> 
         <a href=""><i style="color: red;font-size: 18px;" class="fas fa-trash"></i></a>  
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

</style>
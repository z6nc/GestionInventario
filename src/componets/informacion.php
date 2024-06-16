<section class="Informacion">
  <article class="main-Container">

    <aside class="main-Container-grid">
      <div class="container-information">
        <div>
        <a href="">Ganancias por Venta</a>
          <p class="count">S/ 3000.000 stand By</p>
        </div>
        <i class="fas fa-coins"></i>
      </div>

      <div class="container-information-Two">
        <div>
        <a href="">Producto registrados</a>
          <p class="count"><?php echo $Totalproductos ?></p>
        </div>
        <i class="fas fa-clipboard-check registered-product-icon"></i>
      </div>

      <div class="container-information-Three">
        <div>
        <a href="">Producto por Vencer  </a>
          <p class="Count"><?php echo  $ProductoVencimientos?></p>
        </div>
        <i class="fas fa-calendar-alt"></i>

      </div>

    </aside>

    <aside class="main-Container-table">
      <div class="Container-table-Product">
        <h2 >Producto Recientemente Añadidos </h2>
          <?php foreach ($ResultadoProducto as $producto) : ?>
        <div>
          <img  width="15%" src=<?php echo htmlspecialchars($producto['URL_IMG']); ?> alt="">
          <h4 style="text-transform: uppercase;"><?php echo htmlspecialchars($producto['NOM_PRODUCTO']); ?></h4><span>/</span>
          <p> INGRESO: <span ><?php echo htmlspecialchars($producto['FECHA_INGRESO']); ?></span></p>
        </div>
        <?php  endforeach; ?>
      </div>

      <div class="Container-table-Stock">
        <h2 >Productos con Stock mínimo</h2>
        <?php foreach ($ResultadoProductosStock as $productoMinimos) : ?>
        <div>
          <img width="15%" src=<?php echo htmlspecialchars($productoMinimos['URL_IMG']); ?> alt="">
          <h4 style="text-transform: uppercase;"><?php echo htmlspecialchars($productoMinimos['NOM_PRODUCTO']); ?></h4> <span>/</span>
          <p> Stock Disponible <span><?php echo htmlspecialchars($productoMinimos['STOCK']); ?> unidades</span></p>
        </div>
        <?php  endforeach; ?>
      </div>
      <div class="Container-table-Vencer">
        <h2 >Productos vencidos</h2>
        <?php foreach ($ResultadoProductoCaducidos as $productoCaducidos) : ?>
        <div>
          <img width="15%" src=<?php echo htmlspecialchars($productoCaducidos['URL_IMG']); ?> alt="">
          <h4 style="text-transform: uppercase;"><?php echo htmlspecialchars($productoCaducidos['NOM_PRODUCTO']); ?></h4><span>/</span>
          <p> Vencido el <span><?php echo htmlspecialchars($productoCaducidos['FECHA_CADUCIDAD']); ?></span></p>
        </div>
        <?php  endforeach; ?>
      </div>
    </aside>
  </article>
</section>
<style>
  .Informacion {
    background-color: #F1F2F7;
    grid-area: c;
  }

  .main-Container {
    display: grid;
    grid-template-rows: 130px 1fr;
    gap: 20px;
    padding: 16px;
  }

  .main-Container .main-Container-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 20px;
  }
 


  .main-Container .main-Container-grid .container-information {
    display: flex;
    background: white;
    justify-content: space-between;
    padding: 0 24px;
    align-items: center;
    border-radius: 9px;
    border-left: 9px solid #FFC107;
  }

  .main-Container .main-Container-grid .container-information i {
    font-size: 50px;
    color : #dddfeb;
  }
  .main-Container .main-Container-grid .container-information a{
    color:#f6c23e ;
    text-decoration: none;
    font-weight: 600;
    text-transform: uppercase;
  }

 .main-Container .main-Container-grid .container-information p{
  font-size: larger;
 }
 .main-Container .main-Container-grid .container-information-Two {
    display: flex;
    background: white;
    justify-content: space-between;
    padding: 0 24px;
    align-items: center;
    border-radius: 9px;
    border-left: 9px solid #1cc88a;
  }

  .main-Container .main-Container-grid .container-information-Two i {
    font-size: 50px;
    color : #dddfeb;
  }
  .main-Container .main-Container-grid .container-information-Two a{
    color:#1cc88a ;
    text-decoration: none;
    font-weight: 600;
    text-transform: uppercase;
  }

 .main-Container .main-Container-grid .container-information-Two p{
  font-size: larger;
 }

 .main-Container .main-Container-grid .container-information-Three {
    display: flex;
    background: white;
    justify-content: space-between;
    padding: 0 24px;
    align-items: center;
    border-radius: 9px;
    border-left: 9px solid #e74a3b;
  }

  .main-Container .main-Container-grid .container-information-Three i {
    font-size: 50px;
    color : #dddfeb ;
  }
  .main-Container .main-Container-grid .container-information-Three a{
    color:#e74a3b ;
    text-decoration: none;
    font-weight: 600;
    text-transform: uppercase;
  }

 .main-Container .main-Container-grid .container-information-Three p{
  font-size: larger;
 }

  .main-Container .main-Container-table {
    display: grid;
    grid-template-columns: 1fr 1fr  ;
    grid-template-rows: 1fr   ;
    gap: 15px;
    height: auto;
  }
  .main-Container .main-Container-table .Container-table-Product {
    background: white;
    border-radius: 9px;
    padding: 10px  25px;
    border-left: 9px solid #4e73df;
  }
  .main-Container .main-Container-table .Container-table-Product div{
    display: flex;
    text-align: center;
    gap: 10px;
    align-items: center;
    margin: 10px 0;
    padding: 9px 0;
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 1px 2px 4px -2px rgb(0 0 0 / 0.1);
    
  }
  .main-Container .main-Container-table .Container-table-Product h2{
    font-size: 20px;
    font-weight: 900;
    text-transform: uppercase;
  }
  .main-Container .main-Container-table .Container-table-Product div h4{
   font-size: 15px;
   cursor: default;
  }
  .main-Container .main-Container-table .Container-table-Product div p{
    font-size: 14px;
    color: gray;
    cursor: default;
  }


  .main-Container .main-Container-table .Container-table-Stock {
    background: white;
    border-radius: 9px;
    padding: 10px  25px;
    border-left: 9px solid #36b9cc;
  }
  .main-Container .main-Container-table .Container-table-Stock div{
    display: flex;
    text-align: center;
    gap: 10px;
    align-items: center;
    margin: 10px 0;
    padding: 9px 0;
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 1px 2px 4px -2px rgb(0 0 0 / 0.1);
    
  }
  .main-Container .main-Container-table .Container-table-Stock h2{
    font-size: 20px;
    font-weight: 900;
    text-transform: uppercase;
  }
  .main-Container .main-Container-table .Container-table-Stock div h4{
   font-size: 15px;
   cursor: default;
  }
  .main-Container .main-Container-table .Container-table-Stock div p{
    font-size: 14px;
    color: gray;
    cursor: default;
  }
 
  .main-Container .main-Container-table .Container-table-Vencer {
    background: white;
    border-radius: 9px;
    padding: 10px  25px;
    border-left: 9px solid red;
  }
  .main-Container .main-Container-table .Container-table-Vencer div{
    display: flex;
    text-align: center;
    gap: 10px;
    align-items: center;
    margin: 10px 0;
    padding: 9px 0;
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 1px 2px 4px -2px rgb(0 0 0 / 0.1);
    
  }
  .main-Container .main-Container-table .Container-table-Vencer h2{
    font-size: 20px;
    font-weight: 900;
    text-transform: uppercase;
  }
  .main-Container .main-Container-table .Container-table-Vencer div h4{
   font-size: 15px;
   cursor: default;
  }
  .main-Container .main-Container-table .Container-table-Vencer div p{
    font-size: 14px;
    color: gray;
    cursor: default;
  }


 
</style>
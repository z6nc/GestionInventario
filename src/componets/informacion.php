<section class="Informacion">
  <article class="main-Container">

    <aside class="main-Container-grid">
      <div class="container-information">
        <div>
        <a href="">Ganancias por Venta</a>
          <p class="count">s/ 3000.000</p>
        </div>
        <i class="fas fa-coins"></i>
      </div>

      <div class="container-information-Two">
        <div>
        <a href="">Producto registrados</a>
          <p class="count">40</p>
        </div>
        <i class="fas fa-clipboard-check registered-product-icon"></i>
      </div>

      <div class="container-information-Three">
        <div>
        <a href="">Producto por Vencer </a>
          <p class="Count">4</p>
        </div>
        <i class="fas fa-calendar-alt"></i>

      </div>

    </aside>

    <aside class="main-Container-table">
      <div class="Container-table-Product">
        <h2 class="font-Principal">Producto Recientemente Añadidos</h2>
        <div>
          <h4>SACO DE ARROZ DE MAR</h4>
          <p> CONDIMENTO</p>
        </div>
      </div>

      <div class="Container-table-Stock">
        <h2 class="font-Principal">Producto con Stock mínimo</h2>
        <div>
          <h4>Aceite Vegetal PRIMOR 1.8L</h4>
          <p> Abarrotes</p>
        </div>
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
    grid-template-rows: 1fr 1fr;
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
    grid-template-columns: 1fr 1fr;
  }
</style>
<section class="Informacion">
  <article class="main-Container">

    <aside class="main-Container-grid">
      <div class="container-information">
      <i class="fas fa-box product-icon"></i>
          <div>
            <p class="count">4</p>
          <a href="">Registrar producto</a>
          </div>
      </div>

      <div class="ontainer-information-Two">
      <i class="fas fa-clipboard-check registered-product-icon"></i>
          <div>
            <p class="count">3</p>
          <a href="">Producto registrados</a>
          </div>
      </div>

      <div class="ontainer-information-Three">
          <img src="" alt="">
          <div>
            <p class="Count">4</p>
            <a href="">Producto por Vencer </a>
          </div>
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
    padding: 20px;
  }
  .main-Container .main-Container-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 20px;
  }

</style>
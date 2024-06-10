<section class="main">
    <aside class="main-Container">
        <div class="main-Container-Text">
            <p id="fecha" ></p>
            <p id="hora"> </p>

        </div>
        <div class="main-Container-User">
          <a href="#">Bienvenido/a <span style="color:#16A085; font-weight: 900;"><?php echo $idusuario ?></span></a>
        </div>
    </aside>
</section>

<style>
    .main {
        grid-area: b;
        background: white;
    }
    .main .main-Container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 3px 20px;
    }
    .main .main-Container .main-Container-Text {
        display: flex;
        gap: 9px;
    }
    .main .main-Container .main-Container-Text p {
        font-size: 18px;
        color: #333;
    }
    .main .main-Container .main-Container-User a {
        font-size: 18px;
        text-transform: uppercase;
        text-decoration: none;
        color: black;
        transition:all 0.2s ease-in-out;
    }
    .main .main-Container .main-Container-User a:hover{
      color: #16A085;

    }
</style>
<script src="js/FechaHora.js"></script>

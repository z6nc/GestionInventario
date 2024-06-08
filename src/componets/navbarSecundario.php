<section class="main">
    <aside class="main-Container">
        <div class="main-Container-Text">
            <p id="fecha" ></p>
            <p id="hora"> </p>

        </div>
        <div class="main-Container-User">
          //user 
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
</style>
<script src="js/FechaHora.js"></script>

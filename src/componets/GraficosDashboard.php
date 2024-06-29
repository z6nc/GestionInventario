
    <?php include '../mvc/DashboardMVC/ProductosMayorStockController.php'; ?>

    <article class="ArticleDasboardA BorderShadow">
        <h1>Productos con Mayor Stock</h1>
        <canvas id="productosChart" width="100%" height="60%"></canvas> 

    </article>
    <article class="ArticleDasboardB BorderShadow">
        <h1>Productos Poco Stock</h1>

    </article>
    <article class="ArticleDasboardC BorderShadow">
        <h1>Productos Vencidos</h1>
    </article>
    <article class="ArticleDasboardD BorderShadow">
        <h1>Gasto por mes</h1>
    </article>

    <?php include 'js/GraficoProductosMayorStock.php' ?>

    
    <style>
        .BorderShadow {
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
        }
        .ArticleDasboardA, .ArticleDasboardB, .ArticleDasboardC, .ArticleDasboardD {
            background-color: white;
            border-radius: 10px;
            margin: 10px;
            padding: 10px;
            text-align: center;
            transition: all .5s ease-in-out;
        }
       
        .ArticleDasboardA { grid-area: GraficoA; }
        .ArticleDasboardB { grid-area: GraficoB; }
        .ArticleDasboardC { grid-area: GraficoC; }
        .ArticleDasboardD { grid-area: GraficoD; }
    </style>
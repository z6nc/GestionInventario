
    
    <?php include '../mvc/DashboardMVC/ProductosMenorStockController.php'; ?>
    <?php include '../mvc/DashboardMVC/ProductosMayorStockController.php'; ?>
    <?php include '../mvc/DashboardMVC/GastosPorMesController.php'; ?>


     <article class="ArticleDasboardA BorderShadow">
        <h1>Productos con Mayor Stock</h1>
        <canvas id="productosChart" width="100%" height="60%"></canvas> 

    </article>

    <article  class="ArticleDasboardB BorderShadow">
        <h1>Productos Poco Stock</h1>
        <canvas  id="productosMenorChart" width="100%" height="60%"></canvas> 
    </article>
    <article class="ArticleDasboardC BorderShadow">
        <h1>Productos Vencidos</h1>
    </article>
    <article class="ArticleDasboardD BorderShadow">
        <h1>Gasto por mes</h1>
        <canvas id="gastoChart" width="100%" height="25%"></canvas>
    </article>

    <script>
        window.onload = function() {
            const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
            
            // Datos para el segundo gráfico (Gasto por Mes)
            const labelsGasto = <?php echo json_encode(array_column($ResultadoGastoPorMes, 'MES')); ?>.map(month => monthNames[month - 1]);
            const gastoData = <?php echo json_encode(array_column($ResultadoGastoPorMes, 'GASTO')); ?>;
           
            // Configurar y crear el segundo gráfico
            const ctxGasto = document.getElementById('gastoChart').getContext('2d');
            new Chart(ctxGasto, {
                type: 'line',
                data: {
                    labels: labelsGasto,
                    datasets: [{
                        label: 'Gasto por Mes (Soles)',
                        data: gastoData ,
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Datos para el primer gráfico (Productos con Mayor Stock)
            const labelsProductos = <?php echo json_encode(array_column($ResultadoProductosMayoresStock, 'NOM_PRODUCTO')); ?>;
            const stockData = <?php echo json_encode(array_column($ResultadoProductosMayoresStock, 'STOCK')); ?>;

            // Configurar y crear el primer gráfico
            const ctxProductos = document.getElementById('productosChart').getContext('2d');
            new Chart(ctxProductos, {
                type: 'bar',
                data: {
                    labels: labelsProductos,
                    datasets: [{
                        label: 'Stock de Productos',
                        data: stockData,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

         
            const labelsNom = <?php echo json_encode(array_column($ResultadoProductosMenorStock, 'NOM_PRODUCTO')); ?>;
    const stockDatas = <?php echo json_encode(array_column($ResultadoProductosMenorStock, 'STOCK')); ?>;

    // Configura el gráfico con Chart.js
    const ctx = document.getElementById('productosMenorChart').getContext('2d');
    const productosMenorChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labelsNom,
            datasets: [{
                label: 'Stock de Productos',
                data: stockDatas,
                backgroundColor: '#ff002e23',
                borderColor: 'red',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
        }
        
    });
        }
    </script>
 
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
            max-height: 100%;
        }
       
        .ArticleDasboardA { grid-area: GraficoA; }
        .ArticleDasboardB { grid-area: GraficoB; }
        .ArticleDasboardC { grid-area: GraficoC; }
        .ArticleDasboardD { grid-area: GraficoD; }
    </style>

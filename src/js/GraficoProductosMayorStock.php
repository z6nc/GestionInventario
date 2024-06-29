<script>
window.onload = function () {
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
    }
</script>

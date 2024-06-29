<script>
window.onload = function() {
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
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
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

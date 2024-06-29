<script>
window.onload = function() {
    const labels = <?php echo json_encode(array_column($ResultadoProductosMayoresStock, 'NOM_PRODUCTO')); ?>;
    const stockData = <?php echo json_encode(array_column($ResultadoProductosMayoresStock, 'STOCK')); ?>;

    // Configura el gráfico con Chart.js
    const ctx = document.getElementById('productosChart').getContext('2d');
    const productosChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
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
            },
        }
        
    });
}
</script>

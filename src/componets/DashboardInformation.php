
<section class="ContainerDashboard">
<?php
include 'GraficosDashboard.php'
?>
</section>

<style>
    .ContainerDashboard{
      background-color: whitesmoke;
      display: grid;
      grid-template-areas: 
      "GraficoA GraficoB GraficoC"
      "GraficoD GraficoD GraficoD";
      
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
